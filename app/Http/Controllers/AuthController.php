<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return 'login';
    }

    public function loginSubmit(Request $request)
    {
        return 'login submit';
    }

    public function logout()
    {
        return 'logout';
    }
}