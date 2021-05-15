<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactensMailable;
use Illuminate\Support\Facades\Mail;

class ContactensController extends Controller{
    public function index(){
      return view("contactens.index");
    }
    /**
     * Methode que envia un correu amb tots els camps rebuts del formulari cap el destinatari en el meu cas jo pero l'utilitzo amb Mailer
     * i una vegada envia el correu sortira un alert que s'ha enviat un missatge confirmant que s'ha enviat
     */
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $correu= new ContactensMailable($request->all());
        Mail::to('grmatthewlz@gmail.com')->send($correu);
        return redirect()->route('contactens.index')->with('info','Missatge enviat');
    }
      
}
