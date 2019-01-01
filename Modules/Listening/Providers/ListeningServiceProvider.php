<?php

namespace Modules\Listening\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Listening\Events\Handlers\RegisterListeningSidebar;

class ListeningServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterListeningSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('listenings', array_dot(trans('listening::listenings')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('listening', 'permissions');

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
            'Modules\Listening\Repositories\ListeningRepository',
            function () {
                $repository = new \Modules\Listening\Repositories\Eloquent\EloquentListeningRepository(new \Modules\Listening\Entities\Listening());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Listening\Repositories\Cache\CacheListeningDecorator($repository);
            }
        );
// add bindings

    }
}
