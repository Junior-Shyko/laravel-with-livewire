<?php

namespace App\Http\Livewire\Requisition;

use Livewire\Component;
use App\Models\Requisition as Requisitions;
use Carbon\Carbon;

class Show extends Component
{
    public $modalShowRequeriments=false;
    public $modalDeleteRequeriments=false;
    public $informations = 'Aguarde . . .';
    public $answer = '';
    public $dateAnswer = '';
    public $idDelete = 0;
    
    public function showModalRequeriments($id)
    {
        //dd('ShowReportModal -' . $id);
        $requesition = Requisitions::find($id);
        //dd($requesition);
        $this->informations = $requesition->informacoes;
        $this->answer = $requesition->observacoes;
        $this->dateAnswer = Carbon::parse($requesition->dataresposta)->format('d/m/Y H:i');
        $this->modalShowRequeriments=true;
    }

    public function render()
    {
        $allRequeriments = Requisitions::get();

        return view('livewire.requisition.show' , compact('allRequeriments'));
    }

    public function closeModalRequeriments()
    {
        $this->modalShowRequeriments = false;
        $this->informations = 'Aguarde . . .';
    }

    public function showModalDeleteRequeriments($id) 
    {
        $this->idDelete = $id;
        $this->modalDeleteRequeriments=true;
    }

    public function closeDeleteRequeriments()
    {
        $this->modalDeleteRequeriments=false;
    }

    public function deleteRequeriments(Requisitions $requesition)
    {
        try {
            $requesition->delete();
            $this->dispatchBrowserEvent('toastr:success', ['message' => 'Requerimento Excluído']);
            $this->modalDeleteRequeriments=false;
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('toastr:error', ['message' => 'Error: '.$th->getMessage()]);
        }
    }
}
