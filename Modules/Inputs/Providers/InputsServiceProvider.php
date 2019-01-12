<?php

namespace Modules\Inputs\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Inputs\Events\Handlers\RegisterInputsSidebar;

class InputsServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterInputsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('inputs', array_dot(trans('inputs::inputs')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('inputs', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Inputs\Repositories\InputRepository',
            function () {
                $repository = new \Modules\Inputs\Repositories\Eloquent\EloquentInputRepository(new \Modules\Inputs\Entities\Input());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Inputs\Repositories\Cache\CacheInputDecorator($repository);
            }
        );
// add bindings

    }
}
