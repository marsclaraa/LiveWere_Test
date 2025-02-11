<?php

namespace App\Livewire\Tarefa;

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
        dd($this->nome, $this->data_hora, $this->descricao);// as variaveis nome, data e descrição estão dentro dessa rota
    }
}
