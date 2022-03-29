<x-app-layout>
<div class="py-6 ">
    <div class="container border-4 border-gray-900">
        <div class="flex justify-center items-center h-screen ">
            <div>
                <h1 class="p-2 font-bold text-xl">Meus requerimentos</h1>    
            </div>            
        </div>
    </div>
    <div class="container border-4 border-gray-900">
        <div class="flex justify-center items-center h-screen">
            
            <div>
                <br>
            </div>
            <div class="bg-white border-b border-gray-200 p-2 shadow-md">
                <table class="table-auto hover:table-fixed p-2">
                    <thead>
                      <tr class="bg-green-800">
                        <th class="px-4 py-2 text-white">Data Solic.</th>
                        <th class="px-4 py-2 text-white">Categoria</th>
                        <th class="px-4 py-2 text-white">Curso/Programa</th>
                        <th class="px-4 py-2 text-white">Situação</th>
                        <th class="px-4 py-2 text-white">Pagamento DAE</th>
                        <th class="px-4 py-2 text-white">Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($allRequeriments as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</td>
                            <td class="border px-4 py-2">{{ $item->fkcodcategoria }}</td>
                            <td class="border px-4 py-2">{{ $item->fkcodprograma !== 0 ? \App\Models\Requisition::getNameProgram($item->fkcodprograma) : \App\Models\Requisition::getNameProgram($item->fkcodcurso) }}</td>
                            <td class="border px-4 py-2">Em Análise</td>
                            <td class="border px-4 py-2">Realizado</td>
                            <td class="border px-4 py-2">
                                {{-- <a href="{{url('requerimento/'.$item->id)}}" class="py-0.5 px-2 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    <i class="fa fa-eye"></i>
                                </a> --}}
                                <x-jet-secondary-button wire:click="ShowReportModal({{$item->id}})">
                                    <i class="fa fa-eye"></i>
                                </x-jet-button>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

</x-app-layout>
