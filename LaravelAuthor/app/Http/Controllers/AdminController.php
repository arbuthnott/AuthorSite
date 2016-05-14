<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth.basic');
    }
    
    // show an admin home screen
    public function home() {
        dd("In the admin controller, 'home' method.");
    }
}
