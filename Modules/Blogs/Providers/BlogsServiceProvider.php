<?php

namespace Modules\Blogs\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Blogs\Events\Handlers\RegisterBlogsSidebar;

class BlogsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterBlogsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('blogs', array_dot(trans('blogs::blogs')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('blogs', 'permissions');

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
            'Modules\Blogs\Repositories\BlogRepository',
            function () {
                $repository = new \Modules\Blogs\Repositories\Eloquent\EloquentBlogRepository(new \Modules\Blogs\Entities\Blog());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Blogs\Repositories\Cache\CacheBlogDecorator($repository);
            }
        );
// add bindings

    }
}
