<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected  $fillable = [
            'fkcodcategoria' ,
            'fkcodprograma',
            'fkcodhospital', 
            'datainicio',
            'datafinal',
            'matricula',
            'crm',
            'fkcodestado', 
            'fkcodcurso',
            'ano',
            'fkcodcidade'
    ];
}
