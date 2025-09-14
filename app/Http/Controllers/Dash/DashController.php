<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(Request $request) {
        return view("dash.main");
    }
}
