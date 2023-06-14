<?php

namespace App\Http\Livewire\Admin\Gestores;

use Livewire\Component;
use App\Models\User;

class GestoresForm extends Component
{

    public $name;
    public $CPF;
    public $telephone;
    public $email;

    public function salvar()
    {
        $gestor = new User();
        $gestor->name = $this->name;
        $gestor->CPF = $this->CPF;
        $gestor->telephone = $this->telephone;
        $gestor->email = $this->email;


        $gestor->save();

        session()->flash('toast', 'Gestor salvo com sucesso!');

        return redirect('/gestores');
    }

    public function render()
    {
        return view('livewire.admin.gestores.gestores-form')->layout('components.admin.layouts.principal');
    }
}
