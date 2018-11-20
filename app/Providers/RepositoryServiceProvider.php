<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\InstitutionRepository::class, \App\Repositories\InstitutionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PublishRepository::class, \App\Repositories\PublishRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BigAreaRepository::class, \App\Repositories\BigAreaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AreaRepository::class, \App\Repositories\AreaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AreaUserRepository::class, \App\Repositories\AreaUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AreaPublishRepository::class, \App\Repositories\AreaPublishRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PublishUserRepository::class, \App\Repositories\PublishUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TypeUserRepository::class, \App\Repositories\TypeUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserTypeUserRepository::class, \App\Repositories\UserTypeUserRepositoryEloquent::class);
        //:end-bindings:
    }
}
