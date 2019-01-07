<?php

namespace Modules\Games\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Games\Events\Handlers\RegisterGamesSidebar;

class GamesServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterGamesSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('games', array_dot(trans('games::games')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('games', 'permissions');

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
            'Modules\Games\Repositories\GameRepository',
            function () {
                $repository = new \Modules\Games\Repositories\Eloquent\EloquentGameRepository(new \Modules\Games\Entities\Game());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Games\Repositories\Cache\CacheGameDecorator($repository);
            }
        );
// add bindings

    }
}
