<?php

namespace DesolatorMagno\AtlantisTheme;

use Illuminate\Support\ServiceProvider;

class AtlantisThemeServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            //Config
            __DIR__ . '/../config/config.php'             => config_path('theme.php'),

            //Views
            __DIR__ . '/resources/views/layouts'          => resource_path('views/atlantis-theme/layouts'),
            __DIR__ . '/resources/views/partials'         => resource_path('views/atlantis-theme/partials'),
            __DIR__ . '/resources/views/examples'         => resource_path('views/atlantis-theme/examples'),
            __DIR__ . '/resources/views/home.blade.php'   => resource_path('views/atlantis-theme/index.blade.php'),
            __DIR__ . '/resources/views/config.blade.php' => resource_path('views/atlantis-theme/config.blade.php'),

            // Assets
            __DIR__ . '/resources/assets/js'              => public_path('vendor/atlantis-theme/js'),
            __DIR__ . '/resources/assets/css'             => public_path('vendor/atlantis-theme/css'),
            __DIR__ . '/resources/assets/img'             => public_path('vendor/atlantis-theme/img'),
            __DIR__ . '/resources/assets/fonts'           => public_path('vendor/atlantis-theme/fonts'),
        ], 'atlantis-theme');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'atlantis-theme'
        );
    }
}
