<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    public function index()
    {
        return view('supervisor.dashboard'); // Create this view next
    }
}

