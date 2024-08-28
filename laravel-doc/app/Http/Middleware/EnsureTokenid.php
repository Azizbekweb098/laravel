<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenid
{

    protected $routeMiddleware = [
        // Boshqa middleware'lar
        'ensureTokenid' => \App\Http\Middleware\EnsureTokenid::class,
    ];
}
