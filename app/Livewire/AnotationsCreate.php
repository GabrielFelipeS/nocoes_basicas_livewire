<?php

namespace App\Livewire;

use App\Livewire\Forms\AnotationRegisterForm;
use Livewire\Component;

use App\Models\Anotation;

class AnotationsCreate extends Component
{
    public $id;
    public $nome;
    public AnotationRegisterForm $form;

    public function render()
    {
        return view('livewire.anotations-create');
    }

    public function save() {
        $data['name'] = $this->nome;
    
        Anotation::updateOrCreate(['id' => $this->id], $data);
        $this->dispatch('anotation-has-been-registered');

    }
}
