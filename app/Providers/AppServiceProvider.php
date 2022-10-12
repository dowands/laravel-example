<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider implements \Illuminate\Contracts\Support\DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Domain\Post\RepoInterface::class, function ($app) {
            return new \App\Infrastructure\PostRepoImpl();
        });
    }

    public function provides(){
        return [\App\Domain\Post\RepoInterface::class];
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
