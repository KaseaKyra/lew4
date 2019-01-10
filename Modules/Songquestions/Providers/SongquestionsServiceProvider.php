<?php

namespace Modules\Songquestions\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Songquestions\Events\Handlers\RegisterSongquestionsSidebar;

class SongquestionsServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterSongquestionsSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('questions', array_dot(trans('songquestions::questions')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('songquestions', 'permissions');

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
            'Modules\Songquestions\Repositories\QuestionRepository',
            function () {
                $repository = new \Modules\Songquestions\Repositories\Eloquent\EloquentQuestionRepository(new \Modules\Songquestions\Entities\Question());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Songquestions\Repositories\Cache\CacheQuestionDecorator($repository);
            }
        );
// add bindings

    }
}
