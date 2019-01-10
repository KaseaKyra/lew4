<?php

namespace Modules\Options\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Options\Events\Handlers\RegisterOptionsSidebar;

class OptionsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterOptionsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('options', array_dot(trans('options::options')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('options', 'permissions');

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
            'Modules\Options\Repositories\OptionRepository',
            function () {
                $repository = new \Modules\Options\Repositories\Eloquent\EloquentOptionRepository(new \Modules\Options\Entities\Option());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Options\Repositories\Cache\CacheOptionDecorator($repository);
            }
        );
// add bindings

    }
}
