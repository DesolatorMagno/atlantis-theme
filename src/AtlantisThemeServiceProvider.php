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
            __DIR__ . '/../config/config.php'                          => config_path('theme.php'),

            //Views
            __DIR__ . '/resources/views/layouts/logo-header.blade.php' => resource_path('views/atlantis-theme/layouts/logo-header.blade.php'),
            __DIR__ . '/resources/views/layouts/navbar.blade.php'      => resource_path('views/atlantis-theme/layouts/navbar.blade.php'),
            __DIR__ . '/resources/views/layouts/sidebar.blade.php'     => resource_path('views/atlantis-theme/layouts/sidebar.blade.php'),
            __DIR__ . '/resources/views/layouts/master.blade.php'      => resource_path('views/atlantis-theme/layouts/master.blade.php'),
            __DIR__ . '/resources/views/partials/msg.blade.php'        => resource_path('views/atlantis-theme/layouts/msg.blade.php'),

            // Assets
            __DIR__ . '/resources/assets/js'                           => public_path('vendor/atlantis-theme/js'),
            __DIR__ . '/resources/assets/css'                          => public_path('vendor/atlantis-theme/css'),
            __DIR__ . '/resources/assets/img'                          => public_path('vendor/atlantis-theme/img'),
            __DIR__ . '/resources/assets/fonts'                        => public_path('vendor/atlantis-theme/fonts'),
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
