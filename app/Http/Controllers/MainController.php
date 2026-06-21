<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() // <= Iisso e Um methodo que vai ser chamado quando a rota for acessada
    {
        return view('main'); // <= Isso é para retornar a view main.blade.php
    }
}
