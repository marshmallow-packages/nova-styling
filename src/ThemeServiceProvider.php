<?php

namespace Marshmallow\NovaStyling;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use Marshmallow\NovaStyling\Console\InstallCommand;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::theme(asset('/marshmallow/marshmallow-theme/theme.css'));

        $this->publishes([
            __DIR__.'/../resources/css' => public_path('marshmallow/marshmallow-theme'),
        ], 'public');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
