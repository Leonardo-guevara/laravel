<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Admin;
// use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('theme.index');
    }
    public function post()
    {
        return view('theme.post');
    }   
}
