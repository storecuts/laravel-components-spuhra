<?php

namespace StoreCuts\LaravelComponentsSpuhra;

use Illuminate\Support\ServiceProvider;

class LaravelComponentsSpuhraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'storecuts-components');

        $this->loadViewComponentsAs('storecuts', [
            \StoreCuts\LaravelComponentsSpuhra\Components\InputText::class,
            \StoreCuts\LaravelComponentsSpuhra\Components\InputNumber::class,
            \StoreCuts\LaravelComponentsSpuhra\Components\InputRadio::class,
            \StoreCuts\LaravelComponentsSpuhra\Components\InputCheckbox::class,
            \StoreCuts\LaravelComponentsSpuhra\Components\Select::class,
            \StoreCuts\LaravelComponentsSpuhra\Components\Textarea::class,
        ]);
    }
}
