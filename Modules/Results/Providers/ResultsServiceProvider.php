<?php

namespace Modules\Results\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Results\Events\Handlers\RegisterResultsSidebar;

class ResultsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterResultsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('results', array_dot(trans('results::results')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('results', 'permissions');

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
            'Modules\Results\Repositories\ResultRepository',
            function () {
                $repository = new \Modules\Results\Repositories\Eloquent\EloquentResultRepository(new \Modules\Results\Entities\Result());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Results\Repositories\Cache\CacheResultDecorator($repository);
            }
        );
// add bindings

    }
}
