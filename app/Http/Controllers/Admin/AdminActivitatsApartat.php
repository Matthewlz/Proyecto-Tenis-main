<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartat;
use Illuminate\Http\Request;
use App\Models\Opcion;

class AdminActivitatsApartat extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.home')->only('index', 'create', 'edit', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($identificador)
    {

        return view('admin.activitats.apartat.index',compact('identificador'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($identificador){
        return view('admin.activitats.apartat.create',compact('identificador'));
    }
    public function delete(Request $request){
       
        $apartat= Apartat::find($request->id);
        $apartat->delete();
        $identificador=$request->id_opcio;
        return redirect()->route('apartat.index',compact('identificador'));

     
    }

}
