<?php

namespace App\Http\Livewire;

use DB;
use Manny\Manny;
use Livewire\Component;

class CreateApplication extends Component
{
    public $showDivResidency = false;
    public $showDivCourse = false;
    public $showDivComp = false;
    protected $listeners = ['showDiv' => 'change'];
    public $dtini = '';
    public $dtend = '';

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
            ['codigo'  => 1, 'estado' => 'Acre' , 'sigle' => 'AC'],
            ['codigo'  => 2, 'estado' => 'Alagoas' , 'sigle' => 'AL'],
            ['codigo'  => 3, 'estado' => 'Amazonas' , 'sigle' => 'AM'],
            ['codigo'  => 4, 'estado' => 'Amapá' , 'sigle' => 'AP'],
            ['codigo'  => 5, 'estado' => 'Bahia' , 'sigle' => 'BA'],
            ['codigo'  => 6, 'estado' => 'Ceará' , 'sigle' => 'CE']
        ];

        return view('livewire.create-application', compact('course', 'city', 'state'));
    }
}
