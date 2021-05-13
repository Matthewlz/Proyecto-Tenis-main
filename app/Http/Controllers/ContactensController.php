<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactensMailable;
use Illuminate\Support\Facades\Mail;

class ContactensController extends Controller{
    public function index(){
      return view("contactens.index");
    }
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
