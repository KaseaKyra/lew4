<?php

namespace Modules\Sortings\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Sortings\Events\Handlers\RegisterSortingsSidebar;

class SortingsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterSortingsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('sortings', array_dot(trans('sortings::sortings')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('sortings', 'permissions');

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
            'Modules\Sortings\Repositories\SortingRepository',
            function () {
                $repository = new \Modules\Sortings\Repositories\Eloquent\EloquentSortingRepository(new \Modules\Sortings\Entities\Sorting());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Sortings\Repositories\Cache\CacheSortingDecorator($repository);
            }
        );
// add bindings

    }
}
