<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $data_hora;
    public $descricao;// não precisa do request

    public function render() // Função padrão
    {
        return view('livewire.tarefa.create');
    }
    public function store(){ //dd: como se fosse um return. Para a tela e mostra apenas os dados dentro dele.
      Tarefa::create([
        'nome'=>$this->nome,
        'data_hora'=>$this->data_hora,
        'descricao'=>$this->descricao
      ]);

      session()->flash('success', 'Cadastro Realizado');
    }

}
