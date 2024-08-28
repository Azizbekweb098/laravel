<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChackAge
{

    public function handle(Request $request, Closure $next)
    {
        if ($request->input('age') < 18) {
            return redirect('home');
    }
        return  $next($request);
    }
}
