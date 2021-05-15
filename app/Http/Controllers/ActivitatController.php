<?php

namespace App\Http\Controllers;

use App\Models\Activitat;
use App\Models\Apartat;
use App\Models\Extre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class ActivitatController extends Controller
{
/**
 * methode on pasare la activitat opcions apartats y extress
 */

    public function index(Activitat $activitat)
    {
       
        $extres = $activitat->extres; // recupero tots els extres de una activitat concreta
        $opcions = $activitat->opcions;// recupero totes les opcions de una activitat concreta
        $apartats = Apartat::all(); // recupero tots els apartats
        return view('activitats.index', compact('extres', 'opcions', 'activitat', 'apartats'));
    }
/**
 * casal
 * tenis
 * y torneig no els faig servir
 */
    public function tennis()
    {
        return view('activitats.tennis');
    }
    public function paddel()
    {
        return view('activitats.paddel');
    }
    public function casal()
    {
        return view('activitats.casal');
    }
    public function inscriure(Request $request)
    {
    
     
        $request->validate([
            'extres' => 'array|min:1',
            
        ]);
     $opcions=[];
        $activitat = Activitat::find($request->id_activitat);
        foreach($activitat->opcions as $opcio){
         // $opcions=$request->opcio;
         
          array_push($opcions, $opcio->name);
        }
       // dd($opcions[1]);
        //$str_json = json_encode($opcions[1]);
       //return $opcions[0];
     
        dd($request->input('extres'),$request->$opcions[1]);
        return $services = $request->input('extres');;
      
    }
}
