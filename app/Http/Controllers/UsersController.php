<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(9);
        return view('welcome', [
            'users' => $users,
        ]);
    }

}
