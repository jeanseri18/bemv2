<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['image', 'titre', 'detail', 'date', 'heure', 'type', 'statut'];
}
