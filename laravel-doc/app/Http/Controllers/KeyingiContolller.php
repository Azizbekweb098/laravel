<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyingiContolller extends Controller
{
    public function __invoke(Request $request)
    {
        return 'hello wolrd';
    }
}
