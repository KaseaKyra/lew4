<?php

namespace Modules\Answer\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Answer\Events\Handlers\RegisterAnswerSidebar;

class AnswerServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterAnswerSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('answers', array_dot(trans('answer::answers')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('answer', 'permissions');

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
            'Modules\Answer\Repositories\AnswerRepository',
            function () {
                $repository = new \Modules\Answer\Repositories\Eloquent\EloquentAnswerRepository(new \Modules\Answer\Entities\Answer());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Answer\Repositories\Cache\CacheAnswerDecorator($repository);
            }
        );
// add bindings

    }
}
