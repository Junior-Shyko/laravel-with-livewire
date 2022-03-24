<?php

namespace App\Http\Livewire;

use DB;
use Manny\Manny;
use Livewire\Component;

class Requisition extends Component
{
    public $showDivResidency = false;
    public $showDivCourse = false;
    public $showDivComp = false;
    protected $listeners = ['showDiv' => 'change'];
    public $dtini = '';
    public $dtend = '';
    public $formReq = [];

    public function change($value)
    {
      
        $this->showDivComp = true;
        if($value == 0){
            $this->showDivComp = false;
        }elseif($value == 3 || $value == 4){
            $this->showDivResidency = true;
            $this->showDivCourse = false;
        }else{
            $this->showDivCourse = true;
            $this->showDivResidency = false;           
        }
    }

    public function render()
    {
        $course = DB::table('cursos')->get();

        // foreach ($course as $key => $value) {
        //     dump($value->id. ' - '. $value->curso);
        // }
        // dd($course);
        $city = [
            0 => 'Fortaleza',
            1 => 'Caucaia',
            2 => 'Juazeiro do Norte',
            3 => 'Maracanaú',
            4 => 'Sobral',
            5 => 'Crato',
        ];
        $this->dtini = Manny::mask($this->dtini, "11/11/1111");
        $this->dtend = Manny::mask($this->dtend, "11/11/1111");
        $state = [
            ["sigla" => "AC", "nome" => "Acre"],
            ["sigla" => "AL", "nome" => "Alagoas"],
            ["sigla" => "AP", "nome" => "Amapá"],
            ["sigla" => "AM", "nome" => "Amazonas"],
            ["sigla" => "BA", "nome" => "Bahia"],
            ["sigla" => "CE", "nome" => "Ceará"],
            ["sigla" => "DF", "nome" => "Distrito Federal"],
            ["sigla" => "ES", "nome" => "Espírito Santo"],
            ["sigla" => "GO", "nome" => "Goiás"],
            ["sigla" => "MA", "nome" => "Maranhão"],
            ["sigla" => "MT", "nome" => "Mato Grosso"],
            ["sigla" => "MS", "nome" => "Mato Grosso do Sul"],
            ["sigla" => "MG", "nome" => "Minas Gerais"],
            ["sigla" => "PA", "nome" => "Pará"],
            ["sigla" => "PB", "nome" => "Paraíba"],
            ["sigla" => "PR", "nome" => "Paraná"],
            ["sigla" => "PE", "nome" => "Pernambuco"],
            ["sigla" => "PI", "nome" => "Piauí"],
            ["sigla" => "RJ", "nome" => "Rio de Janeiro"],
            ["sigla" => "RN", "nome" => "Rio Grande do Norte"],
            ["sigla" => "RS", "nome" => "Rio Grande do Sul"],
            ["sigla" => "RO", "nome" => "Rondônia"],
            ["sigla" => "RR", "nome" => "Roraima"],
            ["sigla" => "SC", "nome" => "Santa Catarina"],
            ["sigla" => "SP", "nome" => "São Paulo"],
            ["sigla" => "SE", "nome" => "Sergipe"],
            ["sigla" => "TO", "nome" => "Tocantins"]
        ];
           
            
        return view('livewire.create-application', compact('course', 'city', 'state'));
    }

    public function store()
    {
        dd($this->formReq);
    }
    // public function render()
    // {
    //     return view('livewire.requisition');
    // }
}
