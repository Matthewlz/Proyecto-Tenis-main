<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Galeria;
use Illuminate\Support\Facades\DB;

class GalleryCreate extends Component{

    use WithFileUploads;
    

    public $title;
    public $description;
    public $photo;

    public function render(){
        return view('livewire.admin.gallery-create');
    }
    public function crear(){
            $this->validate([
                'title' => 'required',
                'description' => 'required',
                'photo' => 'image|max:2000',
            ]);
            $this->photo->store('galeria','public');
           
         
       $insert=  DB::table('galerias')->insert(['title'=>$this->title,'image_path'=>$this->photo->hashName(),'description'=>$this->description]);
       if($insert){
        return redirect('/admin/galeria');
       }else{
            return back()->with('fail','Ha fallat al pujar la imatge');
       }

    }
}
