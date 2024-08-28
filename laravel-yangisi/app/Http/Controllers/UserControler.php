<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {
        $coke = cookie('name', 'value');
   return response('hello')->withCookie('value');
    }
    public function hello(Request $request)
    {
        dd($request->getAcceptableContentTypes());
    }
    public function ma()
    {
     return view('main');
    }

}
