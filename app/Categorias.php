<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $primaryKey='id categoria';
    protected $table='categorias';
    
    protected $fillable = ['designacao'
                      ];
}