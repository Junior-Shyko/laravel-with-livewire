<x-app-layout>
    <div class="container mx-auto py-3 mt-3">
        <div class="row row-cols-1 text-center">
            <h1 class="font-weight-light">Meus requerimentos</h1>
        </div>
    </div>

    <div class="container mx-auto py-3 mt-3 bg-white border-bottom shadow-sm">
        
        <table class="table table-striped table-hover">
            <thead class="bg-success text-white">
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
                  <x-jet-secondary-button data-toggle="modal" data-target="#requiriments_{{$item->id}}">
                    <i class="fa fa-eye"></i>
                  </x-jet-button>
                  <div class="modal" id="requiriments_{{$item->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Requerimento</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <ul class="list-group">
                            <li class="list-group-item">Criado em </li>
                            <li class="list-group-item">A Categoria foi {{$item->id}} </li>
                            <li class="list-group-item">o Curso ou Programa foi </li>
                            <li class="list-group-item">A situação está em Análise</li>
                            <li class="list-group-item">Pagamento realizado</li>
                          </ul>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn bg-teal-800 text-white" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</x-app-layout>
