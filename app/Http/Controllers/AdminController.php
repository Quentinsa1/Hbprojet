<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Affiche le dashboard de l'admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}