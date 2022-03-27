<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionGeneral extends Model
{
    use HasFactory;

    static public function DataBRtoMySQL( $DataBR ) 
    {

        $DataBR = str_replace(array(" – ","-"," "," "), " ", $DataBR);
        list($data) = explode(" ", $DataBR);
        return implode("-",array_reverse(explode("/",$data))) ;
        
    }   
}
