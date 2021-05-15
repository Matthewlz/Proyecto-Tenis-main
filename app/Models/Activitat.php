<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image_path','description','itpus'
    ];
    public function extres()
    {
        return $this->belongsToMany(Extre::class,'activitats_extres','activitat_id','extra_id');
    }
    public function opcions()
    {
        return $this->belongsToMany(Opcion::class,'activitats_opcions','activitat_id','opcio_id');
    }
  
  
  
}
