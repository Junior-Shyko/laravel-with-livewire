<?php

namespace App\Http\Livewire;

use DB;
use Manny\Manny;
use Livewire\Component;
use App\Models\Requisition as Requisitions;
use App\Models\FunctionGeneral;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class Requisition extends Component
{
    public $showDivResidency = false;
    public $showDivCourse = false;
    public $showDivComp = false;
    protected $listeners = ['showDiv' => 'change'];
    public $dtini = '';
    public $dtend = '';
    public $formReq = [];
   
    protected $messages = [
        'formReq.fkcodcategoria.required' => 'O Campo categoria é obrigatório',
        'formReq.fkcodcurso.required' => 'O Campo Curso é obrigatório',
        'formReq.fkcodcidade.required' => 'O Campo Cidade é obrigatório',
    ];

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
        
        $val = [];
        if($this->formReq['fkcodcategoria'] == 1 || $this->formReq['fkcodcategoria'] == 2) {
            $val = $this->validate(
                [
                    'formReq.fkcodcategoria' => 'required',
                    'formReq.fkcodcurso' => 'required',
                    'formReq.fkcodcidade' => 'required',
                ]
            );
        }else{
            $val = $this->validate(
                ['formReq.fkcodcategoria.required' => 'Categoria é obrigatória'],
                ['formReq.fkcodprograma' => 'required'],
                ['formReq.fkcodhospital' => 'required'],
                ['dtini' => 'required'],
                ['dtend' => 'required'],
                ['formReq.crm' => 'required'],
                ['formReq.fkcodestado' => 'required'],               
            );
        }

        if(isset($this->dtini)) {
            $dtini = Carbon::parse($this->dtini);
            $this->dtini = $dtini->format('Y-m-d');
        }
        if(isset($this->dtend)) {
            $dtend = Carbon::parse($this->dtend);
            $this->dtend = $dtend->format('Y-m-d');
        }

        try {
            //code...event.detail.message
            $insert = [
                    'fkcodcategoria' => $this->formReq['fkcodcategoria'],
                    'fkcodprograma' => isset( $this->formReq['fkcodprograma'] ) ?  $this->formReq['fkcodprograma'] : 0,
                    'fkcodhospital' => isset( $this->formReq['fkcodhospital'] ) ?  $this->formReq['fkcodhospital'] : 0, 
                    'datainicio' => isset( $this->dtini ) ?  $this->dtini : null,
                    'datafinal' => isset( $this->dtend ) ?  $this->dtend : null,
                    'matricula' => isset( $this->formReq['matricula'] ) ?  $this->formReq['matricula'] : null,
                    'crm' => isset( $this->formReq['crm'] ) ?  $this->formReq['crm'] : null,
                    'fkcodestado' => isset( $this->formReq['fkcodestado'] ) ?  $this->formReq['fkcodestado'] : null, 
                    'fkcodcurso' => isset( $this->formReq['fkcodcurso'] ) ?  $this->formReq['fkcodcurso'] : null,
                    'ano' => isset( $this->formReq['ano'] ) ?  $this->formReq['ano'] : null,
                    'fkcodcidade' => isset( $this->formReq['fkcodcidade'] ) ?  $this->formReq['fkcodcidade'] : null
            ];
            Requisitions::create($insert);
            $this->reset();
            $this->dispatchBrowserEvent('toastr:success', ['message' => 'Requerimento cadastrado com sucesso']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            $this->dispatchBrowserEvent('toastr:error', ['message' => 'Ocorreu um erro inexperado']);
        }
    }

    public function show()
    {
        $allRequeriments = Requisitions::get();
       
        return view('livewire.requisition.show', compact('allRequeriments'));
    }
}
