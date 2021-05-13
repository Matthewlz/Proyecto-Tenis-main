<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContrasenyaController extends Controller
{
 
    public function edit(Request $request)
    {
     $usuari=  auth()->user();
        return view('user.contrasenya.edit',compact('usuari'));
    }

    
}
