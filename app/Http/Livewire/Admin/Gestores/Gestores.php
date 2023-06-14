<?php

namespace App\Http\Livewire\Admin\Gestores;

use Livewire\Component;
use App\Models\User;

class Gestores extends Component
{
    public $gestores;

    public $pesquisa ='';

    public function filtrarDados()
    {
        if(empty($this->pesquisa))
        {
            $this->gestores = User::all();
        }
        else
        {
            $this->gestores = User::where('name', 'like', "%$this->pesquisa%")
              ->orWhere('name', 'like', "%$this->pesquisa%")
              ->orWhere('CPF', 'like', "%$this->pesquisa%")
              ->orWhere('telephone', 'like', "%$this->pesquisa%")
              ->orWhere('email', 'like', "%$this->pesquisa%")
              ->get();
        }

    }

    public function render()
    {

        $this->filtrarDados();

        return view('livewire.admin.gestores.gestores')->layout('components.admin.layouts.principal');
    }
}
