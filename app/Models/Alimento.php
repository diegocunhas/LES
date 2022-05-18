<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;
    protected $fillable=['cd_alimento','nm_alimento','ds_alimento','nm_categoria_alimento'];
}
