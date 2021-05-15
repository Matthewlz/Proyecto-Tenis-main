<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
    * retorna una vista amb una llista d'usuaris paginats de 10 en 10 es adir cada 10 usuaris paginara la pagina index
    * task es una carpeta
    * y aqui podrem veure els usuaris només
     */
    public function index()
    {

        $usuaris= User::paginate(10);
      

       
        return view('tasks.index',compact('usuaris'));
    }

    /**
     *
     * 
     */
    public function create()
    {
        $usuaris= User::paginate(10);
        return view('tasks.create',compact('usuaris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
