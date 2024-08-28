<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakController extends Controller
{
    public function index(?string $user = null)
    {
        return 'Salom Sizning ismingiz' . $user;
    }
}
