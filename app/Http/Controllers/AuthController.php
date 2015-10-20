<?php

namespace App\Http\Controllers;

use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin()
    {
       switch (request('role')) {
           case 'super':
               $user = User::where('username', 'super')->first();
               break;

           case 'annisa':
               $user = User::where('username', 'annisa')->first();
               break;

           case 'shabrina':
               $user = User::where('username', 'shabrina')->first();
               break;

           case 'ita':
               $user = User::where('username', 'ita')->first();
               break;

           case 'reane':
               $user = User::where('username', 'reane')->first();
               break;

           default:
               return abort(403);
               break;
       }


        auth()->login($user);

        return redirect()->intended('/');
    }

    public function getLogout()
    {
        auth()->logout();

        return redirect('/');
    }
}
