<?php

use App\Http\Middleware\admin_newsroom;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
         $middleware->alias([
            'admin_newsroom' => \App\Http\Middleware\admin_newsroom::class,
        ]);
        $middleware->alias([
            'admin_product' => \App\Http\Middleware\admin_product::class,
        ]);
        $middleware->alias([
            'admin_career' => \App\Http\Middleware\admin_career::class,
        ]);
        $middleware->alias([
            'superadmin' => \App\Http\Middleware\superadmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
