<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Reserve;
use App\Models\Role;
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
        $reserves = Reserve::all();
        $roles = Role::all();
        $admins = Admin::all();  
     
        view()->share('admins', $admins);
        view()->share('roles', $roles);
        view()->share('reserves', $reserves);
    }
}