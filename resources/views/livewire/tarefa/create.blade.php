<div class="mt-5">
{{-- o if faz parte do blade e é usado para criar este alerta
  Tudo isso é um seção (aparece uma mensagem ou dado na tela, cuidado com a segurança da mensagem) --}}

  @if(@session()->has('success')){{--emite mensagem de sucesso--}}
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close"
    data-bs-dismiss="alert" aria-laber="Close" ></button>
  </div>
      @endif

    {{-- Todo arquivo criado tem que ter uma div de abertura e fechamento. --}}
    <div class="card">
        <h5 class="card-header">Cadastro de Tarefas </h5>

        <div class="card-body">
            <form wire:submit.prevent='store'> <!--prevent, faz a ação de gravar e fim-->
                        <div class= "mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control"
                             id="nome" nome="nome" placeholder="Ex...Tarefa"
                             wire:model.defer="nome">
                        </div>

                        <div class="mb-3">
                            <label for="data_hora">Data e Hora</label>
                        <input type="datetime-local" name="data_hora" id="data_hora" class="form-control"
                        wire:model.defer="data_hora">
                      </div>

                      <div class="mb-3">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="5"
                        wire:model.defer="descricao"></textarea>
                  </div>

                  <div class="mb-3">
                    <button type="submit"
                    class="btn btn-sucess">Cadastrar</button>
                  </div>
                    </form>
                </div>
        </div>
    </div>
