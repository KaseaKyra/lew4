<?php

namespace Modules\Questions\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Questions\Events\Handlers\RegisterQuestionsSidebar;

class QuestionsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterQuestionsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('questions', array_dot(trans('questions::questions')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('questions', 'permissions');

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
            'Modules\Questions\Repositories\QuestionRepository',
            function () {
                $repository = new \Modules\Questions\Repositories\Eloquent\EloquentQuestionRepository(new \Modules\Questions\Entities\Question());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Questions\Repositories\Cache\CacheQuestionDecorator($repository);
            }
        );
// add bindings

    }
}
