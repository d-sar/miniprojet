<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_Vous extends Model
{
     protected $fillable = [
        'date_rendez_vous', 'Heure', 'id_pat'
    ];
    use HasFactory;
}