<?php

namespace App\Providers;

use App\Http\Repositories\User\UserRepo;
use App\Http\Repositories\User\UserRepoInterface;
use App\Http\Services\User\UserService;
use App\Http\Services\User\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepoInterface::class, UserRepo::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
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
