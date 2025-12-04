<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function usuarios()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('dashboard.usuarios', compact('users'));
    }
}
