<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
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
            'fkcodcidade',
            'user_id',
            'informacoes',
            'observacoes'
    ];

    static function getNameProgram($cod) {
        $program = DB::table('program')->where('id', '=', $cod)->get();
        return $program[0]->programa;
    }

    static function getNameCourse($cod) {
        $course = DB::table('course')->where('id' , '=', $cod)->get();
        return $course[0]->courso;
    }
}
