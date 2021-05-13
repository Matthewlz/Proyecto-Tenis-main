<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LlistatExtre extends Model
{
    use HasFactory;
    protected $fillable = [
        'activitat_id', 'extra_id',
    ];
}
