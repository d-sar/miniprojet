<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    protected $fillable = [
        'nom_pathologie'
    ];
    use HasFactory;
}