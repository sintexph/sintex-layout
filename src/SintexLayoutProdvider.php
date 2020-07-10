<?php

namespace SintexLayout;

use Illuminate\Support\ServiceProvider;

class SintexLayoutProdvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->loadViewsFrom(__DIR__.'/views', 'sintex');

        $this->loadViewComponentsAs('sintex', [
            LayoutSideBar::class,
            LayoutTopNav::class,
        ]);

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/sintex_layouts'),
        ]);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
