<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SociController extends Controller
{
    public function index(){
        return view("soci.index");
      }
}
