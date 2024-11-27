<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckMemberRequirement;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user'=> \App\Http\Middleware\CheckLogin::class,
            'trainer.role' => \App\Http\Middleware\CheckTrainerRole::class,
             'checkMemberRequirement' => \App\Http\Middleware\CheckMemberRequirement::class,
             'checkAuthAfterLogout' => \App\Http\Middleware\CheckAuthAfterLogout::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
