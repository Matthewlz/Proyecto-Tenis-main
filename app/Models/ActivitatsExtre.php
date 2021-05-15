<?php

namespace App\Models;

use App\Http\Livewire\Admin\ActivityExtra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitatsExtre extends Model
{
    use HasFactory;
    protected $fillable = [
        'activitat_id', 'extra_id',
    ];
    public function extra()
    {
        return $this->hasMany(Extre::class);
    }
}
