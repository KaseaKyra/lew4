<?php

namespace Modules\Grammar\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Grammar\Events\Handlers\RegisterGrammarSidebar;

class GrammarServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterGrammarSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('grammars', array_dot(trans('grammar::grammars')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('grammar', 'permissions');

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
            'Modules\Grammar\Repositories\GrammarRepository',
            function () {
                $repository = new \Modules\Grammar\Repositories\Eloquent\EloquentGrammarRepository(new \Modules\Grammar\Entities\Grammar());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Grammar\Repositories\Cache\CacheGrammarDecorator($repository);
            }
        );
// add bindings

    }
}
