<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class ActivityExtraCreate extends Component
{
    public $name;
    public $preu;
    public $preuSoci;

    public function render()
    {
        return view('livewire.admin.activity-extra-create');
    }
    public function crear()
    {
        $this->validate([
            'name' => 'required',
            'preu' => 'required',
            'preuSoci' => 'required',
        ]);



        $insert =  DB::table('extres')->insert(['name' => $this->name, 'preu' => $this->preu, 'preu_soci' => $this->preuSoci]);
        if ($insert) {
            return redirect('/admin/extra');
        } else {
            return back()->with('fail', 'Ha fallat al guardar el registre');
        }
    }
}
