<?php

namespace Marshmallow\NovaStyling;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ThemeServiceProvider extends ServiceProvider
{
    const NOVA_VIEWS_PATH = __DIR__ . '/../resources/views/';
    const CSS_PATH = __DIR__ . '/../resources/css';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::theme(asset('/vendor/marshmallow/marshmallow-theme.css'));

        Nova::serving(function (ServingNova $event) {
            Nova::style('marshmallow-theme', __DIR__.'/../resources/css/marshmallow-theme.css');
        });

        $this->publishes([
            self::NOVA_VIEWS_PATH => resource_path('views/vendor/nova'),
        ], 'resource');

        $this->publishes([
            self::CSS_PATH => public_path('css/vendor/marshmallow'),
        ], 'public');
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
