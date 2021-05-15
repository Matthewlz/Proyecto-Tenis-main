<?php

namespace App\Http\Controllers;
use App\Models\Activitat;
use App\Models\Apartat;

class ActivitatController extends Controller{


    public function index(Activitat $activitat){

       
      $extres= $activitat->extres;
      $opcions= $activitat->opcions;
      $apartats = Apartat::all();


      
     
        return view('activitats.index',compact('extres','opcions','activitat','apartats'));
    }
    
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
