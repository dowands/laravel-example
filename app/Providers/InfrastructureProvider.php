<?php

namespace App\Providers;

class InfrastructureProvider extends \Illuminate\Support\ServiceProvider implements \Illuminate\Contracts\Support\DeferrableProvider{
    public function register()
    {
        $this->app->singleton(\App\Domain\Post\RepoInterface::class, function ($app) {
            return new \App\Infrastructure\PostRepoImpl();
        });
    }

    public function provides(){
        return [\App\Domain\Post\RepoInterface::class];
    }
}