<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;



class ProfileIndex extends Component{
    use WithFileUploads;
    public $user;

    public $iduser;
    public $name;
    public $email;
    public $phone;
    public $dni;
    public $photo;
    public $imatge;
    public $poblacio;
    public $provincia;
    public $codiPostal;
    public $adreca;
    public $targetaSalut;

    public function render(){
        return view('livewire.admin.profile-index');
        
    }
    public function mount($user){
        if($user->profile_photo_path){
            $this->imatge='/storage/perfil/'.$user->profile_photo_path;
        }else{
            $this->imatge='https://picsum.photos/300/300';
        }
  
        $this->iduser= $user->id;
        $this->name= $user->name;
        $this->email= $user->email;
        $this->phone= $user->phone;
        $this->dni= $user->dni;
        $this->poblacio= $user->town;
        $this->provincia= $user->province;
        $this->codiPostal= $user->postal_code;
        $this->adreca= $user->address;
        $this->targetaSalut= $user->health_card;

        

        
    }
    public function edit(){
        
       
          if($this->photo){
             $this->photo->store('perfil','public');
             $this->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:9',
                'dni' =>  'required|regex:/^[0-9]{8}[A-Z a-z]{1}/',
                'photo' => 'image|max:2000',
                'targetaSalut'=>'numeric|required',
                'poblacio'=>'nullable|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'provincia'=>'nullable|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'codiPostal'=>'required|numeric',
                'adreca'=> 'required||regex:([0-9 a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
              ]);
          }
          else{
         
              $this->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:9',
                'dni' =>  'required|regex:/^[0-9]{8}[A-Z a-z]{1}/',
                'targetaSalut'=>'numeric|nullable',
                'poblacio'=>'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'provincia'=>'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'codiPostal'=>'required|numeric',
                'adreca'=> 'required|||regex:/([- ,\/0-9a-zA-Z]+)/',
              ]); 
          }
      
        $usuari=User::find($this->iduser);
        $usuari->name=$this->name;
        $usuari->email=$this->email;
        $usuari->dni=$this->dni;
        $usuari->phone=$this->phone;
        $usuari->address=$this->adreca;
        $usuari->town=$this->poblacio;
        $usuari->postal_code=$this->codiPostal;
        $usuari->province=$this->provincia;
        $usuari->health_card=$this->targetaSalut;
        if($this->photo){
        $usuari->profile_photo_path=$this->photo->hashName();
        }
        $usuari->save();
        return redirect('/admin/users/'.$this->iduser.'/edit');
      
    }
   

}
