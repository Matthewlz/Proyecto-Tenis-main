<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Galeria;
class GalleryEdit extends Component{
    
    use WithFileUploads;
    public $galeria;

    public $idGaleria;
    public $title;
    public $description;
    public $photo;

    public function render(){
        return view('livewire.admin.gallery-edit');
    }
    public function mount($galeria){
        

        $this->idGaleria=$galeria->id;
        $this->title=$galeria->title;
        $this->description=$galeria->description;
        

        
    }
    public function edit(){
        
       
        if($this->photo){
           $this->photo->store('galeria','public');
           $this->validate([
              'title' => 'required',
              'description' => 'required',
              'photo' => 'image|max:2000',
            ]);
        }
        else{
          $this->validate([
            'title' => 'required',
            'description' => 'required',
            ]); 
        }
    
      $galeria=Galeria::find($this->idGaleria);
      $galeria->title=$this->title;
      $galeria->description=$this->description;
      if($this->photo){
      $galeria->image_path=$this->photo->hashName();
      }
      $galeria->save();
      return redirect('/admin/galeria/'.$this->idGaleria.'/edit');
    
  }
}
