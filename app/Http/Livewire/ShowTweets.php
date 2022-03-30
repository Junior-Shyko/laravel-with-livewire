<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message =  'Apenas um teste';

    public $showModalInst = false;

    public function render()
    {
        $tweets = Tweet::get();
        return view('livewire.show-tweets' , compact('tweets'));
    }

    public function showModal() 
    {
        $this->showModalInst = true;
       
    }

    public function create()
    {
        Tweet::create([
            'content' => $this->message,
            'user_id' => 1
        ]);
        $this->message = "";
    }
}
