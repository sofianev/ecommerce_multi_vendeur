<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class loginController extends Controller
{

    public function getLogin()
    {
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request)
    {
        //make validation 

    }
}
