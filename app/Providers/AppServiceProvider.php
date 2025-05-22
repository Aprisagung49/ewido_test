<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       Gate::define('admin_product', function (User $user) {
        return $user->admin_id === 3 || $user->admin_id === 1;
    });

    Gate::define('admin_newsroom', function (User $user) {
        return $user->admin_id === 2 || $user->admin_id === 1;
    });

    Gate::define('admin_career', function (User $user) {
        return $user->admin_id === 4 || $user->admin_id === 1;
    });

    Gate::define('superadmin', function (User $user) {
        return $user->admin_id === 1;
    });

    }
}
