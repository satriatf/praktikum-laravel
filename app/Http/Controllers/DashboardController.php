<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // method untuk menampilkan dashboard
    public function index(){
        return view('admin.contents.dashboard.index');
    }
}
