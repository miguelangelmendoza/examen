<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    protected $table = "mascotas";

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'edad', 'tipo', 'color'];

}
