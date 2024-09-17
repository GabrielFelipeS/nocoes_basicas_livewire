<?php

namespace App\Livewire;
use App\Models\Anotation;
use Livewire\Component;

class AnotationsTable extends Component
{
    public $anotations = [];
    public $listeners = [
        'anotation-has-been-registered'=> 'loadAnotation'
    ];

    public function render()
    {
        return view('livewire.anotations-table');
    }

    public function mount() {
        $this->loadAnotation();
    }

    #[On('anotation-has-been-registered')]
    public function loadAnotation() {
        $this->anotations = Anotation::all();
    }
}
