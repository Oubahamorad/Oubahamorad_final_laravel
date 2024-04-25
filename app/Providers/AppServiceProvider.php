<?php

namespace App\Providers;

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
    { $resrves =Reserve::all();
        $roles = Role::all();

        view()->share(['roles '=>$roles] );
        view()->share(['resrves'=> $resrves]);
    }
}
