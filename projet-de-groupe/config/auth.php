<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Htpp\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {+
    }
}
