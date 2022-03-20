<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateApplication extends Component
{
    public $showDivCourse = false;
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
        return view('livewire.create-application');
    }
}
