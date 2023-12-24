<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'date_consultation', 'motif_consultation', 'id_pat', 'id_med','id_path'
    ];
    use HasFactory;
}