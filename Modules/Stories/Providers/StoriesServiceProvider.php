<?php

namespace Modules\Stories\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Stories\Events\Handlers\RegisterStoriesSidebar;

class StoriesServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterStoriesSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('stories', array_dot(trans('stories::stories')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('stories', 'permissions');

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
            'Modules\Stories\Repositories\StoryRepository',
            function () {
                $repository = new \Modules\Stories\Repositories\Eloquent\EloquentStoryRepository(new \Modules\Stories\Entities\Story());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Stories\Repositories\Cache\CacheStoryDecorator($repository);
            }
        );
// add bindings

    }
}
