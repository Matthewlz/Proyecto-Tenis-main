<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ContrasenyaEdit extends Component
{
    public $usuari;
    public $inputPasswordOld;
    public $inputPasswordNew;
    public $inputPasswordNewVerify;

    public function render()
    {
        return view('livewire.contrasenya-edit');
    }
    public function mount($usuari)
    {
        $this->usuari = $usuari;
    }

    public function edit()
    {

        $this->validate([
            'usuari' => 'required',
            'inputPasswordOld' => 'required|min:8',
            'inputPasswordNew' => 'required|min:8',
            'inputPasswordNewVerify' => 'required|min:8',
        ]);
      
      
        if ($this->inputPasswordNewVerify == $this->inputPasswordNew) {
            $user = User::find($this->usuari->id);
            if (Hash::check($this->inputPasswordOld,$user->password)) {
                $user->password = Hash::make( $this->inputPasswordNew);
                $user->save();
                session()->flash('missatge', 'Correcte.');
                return redirect('/admin/contrasenya/edit');
            }else{
                session()->flash('error', 'Error Al introduir la Contrasenya Actual.');
                return redirect('/admin/contrasenya/edit');
            }
         
        }
    }
}
