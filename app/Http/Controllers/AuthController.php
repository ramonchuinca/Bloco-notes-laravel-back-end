<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function login()
   {
    return ('login');
   }

   public function loginSubmit(Request $request)
   {
    echo 'login submit';
   }

   public function logout()
   {
    echo 'logout';
   }
}
