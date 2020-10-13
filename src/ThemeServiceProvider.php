<?php

namespace Marshmallow\NovaStyling;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    const NOVA_VIEWS_PATH   = __DIR__ . '/../resources/views';
    const CSS_PATH          = __DIR__ . '/../resources/css';
    const JS_PATH           = __DIR__ . '/../resources/js';
    const CONFIG_FILE       = __DIR__ . '/../config/nova-styling.php';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // JS for Responsive design
        Nova::serving(function (ServingNova $event) {
            Nova::style('nova-styling',  __DIR__ . '/../resources/css/responsive.css');
            Nova::script('nova-styling', __DIR__ . '/../resources/js/responsive.js');
            Nova::provideToScript([
                'mmns' => config('nova-styling')
            ]);
        });

        // Publishes Config
        $this->publishes([
            self::CONFIG_FILE       => config_path('nova-styling.php'),
        ], 'config');

        // Views
        $this->publishes([
            self::NOVA_VIEWS_PATH   => resource_path('views/vendor/nova')
        ]);

        // Publish Public CSS for login screen
        $this->publishes([
            self::CSS_PATH          => public_path('vendor/marshmallow/nova-styling'),
        ], 'public');

        // Sets CSS file as asset
        Nova::theme(asset('vendor/marshmallow/nova-styling/marshmallow-theme.css'));
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_FILE,
            'nova-styling'
        );
    }
}
