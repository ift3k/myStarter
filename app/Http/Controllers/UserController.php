<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers()
    {
        return view('addUser');
    }

    public function listUsers()
    {
        return view('listUser');
    }

    public function editUsers()
    {
        return view('editUser');
    }
}
