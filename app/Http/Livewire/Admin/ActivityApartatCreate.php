<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ActivityApartatCreate extends Component
{
    public $identificador;
    public $name;
    public function render()
    {
        return view('livewire.admin.activity-apartat-create');
    }
    
    public function mount($identificador){
        $this->identificador=$identificador;
    }

    public function crear()
    {
        $this->validate([
            'name' => 'required',
        ]);



        $insert =  DB::table('apartats')->insert(['name' => $this->name, 'opcio_id' => $this->identificador]);
        if ($insert) {
            return  redirect('/admin/apartat/'.$this->identificador) ;
        } else {
            return back()->with('fail', 'Ha fallat al guardar el registre');
        }
    }
}
