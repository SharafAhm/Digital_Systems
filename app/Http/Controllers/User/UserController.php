<?php

namespace App\Http\Controllers\User;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard'); // Ensure this view exists
    }
}
