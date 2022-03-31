<div class="container mx-auto py-3 mt-3">
    <div class="row row-cols-1 text-center">
        <h1 class="font-weight-light">Meus requerimentos</h1>
        <div class="container mx-auto py-3 mt-3 bg-white border-bottom shadow-sm">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark text-white">
                    <tr>
                        <th scope="col">Data Solic.</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Curso/Programa</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Pag. DAE</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($allRequeriments as $item)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</td>
                            <td>{{ $item->fkcodcategoria }}</td>
                            <td>
                                {{ $item->fkcodprograma !== 0 ? \App\Models\Requisition::getNameProgram($item->fkcodprograma) : 
                                \App\Models\Requisition::getNameProgram($item->fkcodcurso) }}
                            </td>
                            <td>Em Análise</td>
                            <td>Realizado</td>
                            <td>
                                <x-jet-secondary-button wire:click="showModalRequeriments({{$item->id}})" titulo="Visualizar resposta">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </x-jet-secondary-button>
                                <x-jet-secondary-button  title="Alterar requerimento">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </x-jet-secondary-button>
                                <x-jet-danger-button wire:click="showModalDeleteRequeriments({{$item->id}})" title="Excluir requerimento">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </x-jet-danger-button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- modal requerimento --}}
        <x-jet-dialog-modal wire:model="modalShowRequeriments">
            <x-slot name="title">
                Meu Requerimento
            </x-slot>
        
            <x-slot name="content">
                <ul class="list-group">
                    <li class="list-group-item">Resposta enviada em {{$dateAnswer}} </li>
                    <li class="list-group-item">
                        <p wire:model="informations">
                            <strong>Informação Complementar:</strong>
                        </p> 
                        <p>
                            {{$informations}}
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p><strong>Resposta:</strong></p>
                        <p>{{ $answer }}</p>
                    </li>
                    <li class="list-group-item">
                        <p><strong>Análise:</strong></p>
                    </li>
                    <li class="list-group-item ">
                        <p class="text-emerald-900">
                            Pagamento realizado
                        </p>
                    </li>
                  </ul>
            </x-slot>
            
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModalRequeriments()" wire:loading.attr="disabled">
                    Sair
                </x-jet-secondary-button>
        
                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
        {{-- fechar modal requerimento --}}

        {{-- DELETE REQUERIMENTO --}}
        <x-jet-dialog-modal wire:model="modalDeleteRequeriments">
            <x-slot name="title">
                DELETAR REQUERIMENTO victor
            </x-slot>

            <x-slot name="content">
                <p class="text-danger">
                    Deseja realmente excluir esse requerimento?
                </p>
            </x-slot>
            
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeDeleteRequeriments()" wire:loading.attr="disabled">
                    Sair
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteRequeriments({{$idDelete}})" wire:loading.attr="disabled">
                    Excluir
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
        {{-- FIM DELETE REQUERIMENTO --}}
    </div>
</div>