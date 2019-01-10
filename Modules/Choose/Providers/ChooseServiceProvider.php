<?php

namespace Modules\Choose\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Choose\Events\Handlers\RegisterChooseSidebar;

class ChooseServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterChooseSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('chooses', array_dot(trans('choose::chooses')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('choose', 'permissions');

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
            'Modules\Choose\Repositories\ChooseRepository',
            function () {
                $repository = new \Modules\Choose\Repositories\Eloquent\EloquentChooseRepository(new \Modules\Choose\Entities\Choose());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Choose\Repositories\Cache\CacheChooseDecorator($repository);
            }
        );
// add bindings

    }
}
