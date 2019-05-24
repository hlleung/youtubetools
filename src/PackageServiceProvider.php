<?php

namespace Shoaling\Youtubetools;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
        }
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
        }
    }
}