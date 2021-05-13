<?php

namespace App\Http\Livewire\Admin;

use App\Models\Activitat;
use Livewire\Component;
use App\Models\Opcion;
use App\Models\Extre;
use App\Models\LlistatExtre;
use App\Models\llistatOpcion;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class ActivityCreate extends Component
{

    public  $name;
    public  $description;
    public  $photo;

    public $checkExtras = [];
    public $checkOpcions = [];
    public $tipus;
    use WithFileUploads;
    public function render()
    {
        $opcions = Opcion::get();
        $extres = Extre::get();

        return view('livewire.admin.activity-create', compact('opcions', 'extres'));
    }
    public function mount(){
        $this->tipus='Infantil';
    }

    public function crear()
    {


        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|image|max:2000',
        ]);
        $this->photo->store('activitat', 'public');


        DB::transaction(function () {
          
            $activitat = new Activitat();
            $activitat->name =  $this->name;
            $activitat->image_path = $this->photo->hashName();
            $activitat->description = $this->description;
            $activitat->tipus =  $this->tipus;
            $activitat->save();
            if (count($this->checkExtras) > 0) {
                foreach ($this->checkExtras as $checkExtra) {

                    $extre = new LlistatExtre();
                    $extre->activitat_id = $activitat->id;
                    $extre->extra_id = $checkExtra;
                    $extre->save();
                }
            }

            foreach ($this->checkOpcions as $checkOpcio) {

                $opcio = new llistatOpcion();
                $opcio->activitat_id = $activitat->id;
                $opcio->opcio_id = $checkOpcio;
                $opcio->save();
            }
        }, 5);

        return redirect('/admin/activitats/create');
    }
}
