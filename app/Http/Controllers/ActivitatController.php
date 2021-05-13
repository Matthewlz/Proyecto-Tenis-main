<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitatController extends Controller{
    
    public function tennis(){
        return view('activitats.tennis');
    }
    public function paddel(){
        return view('activitats.paddel');
    }
    public function casal(){
        return view('activitats.casal');
    }
}
