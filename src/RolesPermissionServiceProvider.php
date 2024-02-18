<?php

namespace CodeNomads\RolesPermission;

use Illuminate\Support\ServiceProvider;

class RolesPermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/../routes.php';
    }
}
