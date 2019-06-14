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
            __DIR__ . '/resources/views/layouts/logo-header.blade.php' => resource_path('views/atlantis-admin/layouts/logo-header.blade.php'),
            __DIR__ . '/resources/views/layouts/navbar.blade.php'      => resource_path('views/atlantis-admin/layouts/navbar.blade.php'),
            __DIR__ . '/resources/views/layouts/sidebar.blade.php'     => resource_path('views/atlantis-admin/layouts/sidebar.blade.php'),
            __DIR__ . '/resources/views/layouts/master.blade.php'      => resource_path('views/atlantis-admin/layouts/master.blade.php'),

            // Assets
            __DIR__ . '/resources/assets/js'                           => public_path('vendor/atlantis-admin/js'),
            __DIR__ . '/resources/assets/css'                          => public_path('vendor/atlantis-admin/css'),
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
