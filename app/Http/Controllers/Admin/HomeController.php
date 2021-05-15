<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //retorna una vista
    public function index(){
        return view('admin.index');
    }
}
