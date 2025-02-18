<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Index extends Component
{
    public $tarefaId;
    public $nome;
    public $data_hora;
    public $descricao;

    public function render()
    {
        $tarefa = Tarefa::all();
        return view('livewire.tarefa.index', compact('tarefa')); //compact envia a variavel para dentro da tela(blade)
    }

    public function abrirModalVisualizar($tarefaId)
    {
        $tarefa = Tarefa::find($tarefaId);

        if ($tarefa) {
            $this->nome = $tarefa->nome;
            $this->data_hora = $tarefa->data_hora;
            $this->descricao = $tarefa->descricao;
        }
    }
    public function abrirModalExclusao($tarefaId){
        $this->tarefaId = $tarefaId;
    }

    public function excluir(){
        if($this->tarefaId){
            Tarefa::find($this->tarefaId)->delete();
        }
    }
}
