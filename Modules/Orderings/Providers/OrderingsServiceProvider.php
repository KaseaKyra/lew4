<?php

namespace Modules\Orderings\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Orderings\Events\Handlers\RegisterOrderingsSidebar;

class OrderingsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterOrderingsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('orderings', array_dot(trans('orderings::orderings')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('orderings', 'permissions');

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
            'Modules\Orderings\Repositories\OrderingRepository',
            function () {
                $repository = new \Modules\Orderings\Repositories\Eloquent\EloquentOrderingRepository(new \Modules\Orderings\Entities\Ordering());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Orderings\Repositories\Cache\CacheOrderingDecorator($repository);
            }
        );
// add bindings

    }
}
