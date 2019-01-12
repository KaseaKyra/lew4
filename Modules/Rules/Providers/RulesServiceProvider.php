<?php

namespace Modules\Rules\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Rules\Events\Handlers\RegisterRulesSidebar;

class RulesServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterRulesSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('rules', array_dot(trans('rules::rules')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('rules', 'permissions');

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
            'Modules\Rules\Repositories\RuleRepository',
            function () {
                $repository = new \Modules\Rules\Repositories\Eloquent\EloquentRuleRepository(new \Modules\Rules\Entities\Rule());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Rules\Repositories\Cache\CacheRuleDecorator($repository);
            }
        );
// add bindings

    }
}
