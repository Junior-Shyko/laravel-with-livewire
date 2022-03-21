<?php

namespace App\Http\Livewire;

use DB;
use Manny\Manny;
use Livewire\Component;

class CreateApplication extends Component
{
    public $showDivCourse = true;
    protected $listeners = ['showDiv' => 'change'];
    public $dtini = '';
    public $dtend = '';

    public function change($value)
    {
       //dump($value);
       if($value == 0){

           $this->showDivCourse = true;

       }else{
            $this->showDivCourse = false;
           
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
        return view('livewire.create-application', compact('course', 'city'));
    }
}
