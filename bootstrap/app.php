<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
          then: function () {
            // For Admin API routes
            Route::middleware('api')
                ->prefix('api/admin') // All routes will start with /api/admin
                ->name('api.admin.') // Optional: adds a prefix to route names
                ->group(base_path('routes/admin_api.php'));

            // For User API routes
            Route::middleware('api')
                ->prefix('api/user') // All routes will start with /api/user
                ->name('api.user.') // Optional: adds a prefix to route names
                ->group(base_path('routes/common_api.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();