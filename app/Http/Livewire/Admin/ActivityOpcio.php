<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Opcion;
class ActivityOpcio extends Component
{
    public function render()
    {
        $opcions= Opcion::paginate(9);
        return view('livewire.admin.activity-opcio',compact('opcions'));
    }
}
