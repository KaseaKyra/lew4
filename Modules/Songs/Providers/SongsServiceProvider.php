<?php

namespace Modules\Songs\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Songs\Events\Handlers\RegisterSongsSidebar;

class SongsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterSongsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('songs', array_dot(trans('songs::songs')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('songs', 'permissions');

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
            'Modules\Songs\Repositories\SongRepository',
            function () {
                $repository = new \Modules\Songs\Repositories\Eloquent\EloquentSongRepository(new \Modules\Songs\Entities\Song());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Songs\Repositories\Cache\CacheSongDecorator($repository);
            }
        );
// add bindings

    }
}
