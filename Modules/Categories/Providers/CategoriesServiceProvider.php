<?php

namespace Modules\Categories\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Categories\Events\Handlers\RegisterCategoriesSidebar;

class CategoriesServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterCategoriesSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('categories', array_dot(trans('categories::categories')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('categories', 'permissions');

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
            'Modules\Categories\Repositories\CategoryRepository',
            function () {
                $repository = new \Modules\Categories\Repositories\Eloquent\EloquentCategoryRepository(new \Modules\Categories\Entities\Category());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Categories\Repositories\Cache\CacheCategoryDecorator($repository);
            }
        );
// add bindings

    }
}
