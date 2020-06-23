<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey='id_produto';
    protected $table='produtos';
    
    protected $fillable = ['designacao',
                       'preco',
                       'qt_stock',
                       'id_categoria'
                      ];
}