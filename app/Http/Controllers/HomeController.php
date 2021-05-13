<?php

namespace App\Http\Controllers;

use App\Models\Activitat;
use Illuminate\Http\Request;

class HomeController extends Controller{
    

    public function __invoke() {
        
        $activitats = Activitat::all();
        return view("home.index",compact('activitats'));
    }
}
