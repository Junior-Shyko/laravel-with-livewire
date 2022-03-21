<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class CreateApplication extends Component
{
    public $showDivCourse = true;
    protected $listeners = ['showDiv' => 'change'];

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
        
        return view('livewire.create-application', compact('course', 'city'));
    }
}
