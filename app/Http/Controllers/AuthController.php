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
        // Form validation
        $request->validate(

            // Regras
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:20|max:50',
            ],

            // Mensagens
            [
                'text_username.required' => 'O username é obrigatório.',
                'text_username.email' => 'O username deve ser um e-mail válido.',

                'text_password.required' => 'O password é obrigatório.',
                'text_password.min' => 'O password deve ter pelo menos :min caracteres.',
                'text_password.max' => 'O password deve ter no máximo :max caracteres.',
            ]
        );

        return 'login submit';
    }

    public function logout()
    {
        return 'logout';
    }
}