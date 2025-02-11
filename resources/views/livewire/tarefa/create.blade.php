<div class="mt-5">
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
