<?php

namespace App\Http\Livewire\Requisition;

use Livewire\Component;

class Show extends Component
{
    public $ModalFormVisible=false;

    public function ShowReportModal()
    {
        $this->ModalFormVisible=true;
    }
    
    public function render()
    {
        return view('livewire.requisition.show');
    }
}
