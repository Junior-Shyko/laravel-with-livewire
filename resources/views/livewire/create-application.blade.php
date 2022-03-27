{{-- 
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Criar Requerimentos</h1>
            <div class="relative flex w-full flex-wrap items-stretch mb-3">
                <span class="z-10 h-full leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                <i class="fa fa-lock"></i>
                </span>
                <input type="text" placeholder="Small Input" class="px-2 py-1 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"/>
            </div>
        </div>
    </div>
</div>
--}}
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-wrap">
            <form wire:submit.prevent="store" class="w-full" id="formStoreRequisition">
            <div class="container">
                <div class="container">
                    <div class="col-span-4">
                       
                    </div>
                    <div class="col-span-4">
                        @if ($errors->any())
                        <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                              <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                              <div>
                                <p class="font-bold">Campos Obrigatórios</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-sm"><strong>{{ $error }}</strong></li>
                                    @endforeach
                                </ul>
                              </div>
                            </div>
                        </div>
                        @endif                      
                    </div>
                    <div class="col-span-4"></div>
                </div>
                <div class="bg-white border rounded shadow p-2">
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-gray-700">Categoria</label>
                        <select wire:model="formReq.fkcodcategoria" wire:change="change($event.target.value)"
                            class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                            block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option value="0">--Selecione--</option>
                            <option value="1">CURSO LIVRE</option>
                            <option value="2">ESPECIALIZAÇÃO</option>
                            <option value="3">RESIDÊNCIA</option>
                            <option value="4">RESIDÊNCIA MULTIPROFISSIONAL EM SAÚDE</option>
                        </select>
                        <p class="text-gray-600 text-xs italic">Campo Obrigatório</p>
                    </div>
                </div>
               
                <div class="grid grid-cols-12 gap-4 bg-white border rounded shadow p-2">
                    {{-- PROGRAMA --}}
                    @if ($showDivResidency)
                        @include('livewire/application/forms/residencia')
                    @endif
                    {{-- Curso --}}
                    @if ($showDivCourse)
                        @include('livewire/application/forms/course')
                    @endif
                    @if ($showDivResidency || $showDivCourse)
                    <div class="col-span-12 lg:col-span-12">
                        <label class="block text-sm font-medium 
                        text-gray-700">Informações Complementares
                        </label>
                        <textarea wire:model="formReq.informacoes" id="" cols="30" rows="10" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    @endif
                </div>
              
                    
                <div class="grid grid-flow-row auto-rows-max bg-white border rounded shadow p-2">
                    <div class="flex place-content-evenly">
                        <button type="submit" title="Cadastrar novo requerimento" class="bg-emerald-500 hover:bg-emerald-700 px-5 py-2.5 
                        text-sm leading-5 rounded-md font-semibold text-white">
                            <i class="fa fa-save"></i>
                            CADASTRAR
                        </button>
                        {{-- <button class="bg-slate-100 border-slate-300 hover:bg-slate-300  px-5 py-2.5 
                        text-sm leading-5 rounded-md font-semibold text-gray">
                            <i class="fa fa-eraser" aria-hidden="true"></i>
                            LIMPAR
                        </button> --}}
                        <a href="{{url('dashboard')}}" title="Voltar para home" class="bg-slate-100 hover:bg-slate-300 px-5 py-2.5 
                        text-sm leading-5 rounded-md font-semibold text-gray">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                            VOLTAR
                        </a>  
                    </div>
                </div>  
            </div>
        </form>
        </div>
    </div>
</div>