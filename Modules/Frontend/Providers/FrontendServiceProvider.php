<?php

namespace Modules\Frontend\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Frontend\Events\Handlers\RegisterFrontendSidebar;

class FrontendServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterFrontendSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('frontends', array_dot(trans('frontend::frontends')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('frontend', 'permissions');

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
            'Modules\Frontend\Repositories\FrontendRepository',
            function () {
                $repository = new \Modules\Frontend\Repositories\Eloquent\EloquentFrontendRepository(new \Modules\Frontend\Entities\Frontend());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Frontend\Repositories\Cache\CacheFrontendDecorator($repository);
            }
        );
// add bindings

    }
}
