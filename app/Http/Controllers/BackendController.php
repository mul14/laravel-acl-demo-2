<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend');
    }

    public function createUser()
    {
       if (! $this->authorize('create.user')) {
           return "I can't create new user :(";
       }

       return 'Yay! I can access create new user :D';
    }

    public function editUser()
    {
       if (! $this->authorize('edit.user')) {
           return "I can't access edit user :(";
       }

       return 'Yay! I can access edit user feature :D';
    }

    public function deleteUser()
    {
       if (! $this->authorize('delete.user')) {
            return "I can't delete a user :(";
       }

       return 'Yay! I can delete anyone :D';
    }
}
