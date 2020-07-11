<?php

namespace SintexLayout;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SintexLayoutProdvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'sintex');

        Blade::component('sintex::components.sintex-layout-top-nav', 'sintextop');
        Blade::component('sintex::components.sintex-layout-sidebar', 'sintexside');

        $this->publishes([
            __DIR__.'/views/layouts' => resource_path('views/vendor/sintex_layout'),
        ]);
    }
}
