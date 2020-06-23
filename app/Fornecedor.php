<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $primaryKey='id_fornecedor';
    protected $table='fornecedor';
    
    protected $fillable = ['designacao',
                       'morada',
                       'Telefone',
                       'codigo postal',
                       'email'
                      ];
}