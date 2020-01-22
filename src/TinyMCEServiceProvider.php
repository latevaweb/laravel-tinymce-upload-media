<?php

namespace LaTevaWeb\TinyMCE;

use Illuminate\Support\ServiceProvider;

class TinyMCEServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tinymce-upload-media.php' => config_path('tinymce-upload-media.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views'),
        ], 'views');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tinymce');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tinymce-upload-media.php', 'tinymce-upload-media');
    }
}