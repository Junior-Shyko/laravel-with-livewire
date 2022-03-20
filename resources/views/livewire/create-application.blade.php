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
            <div class="w-full">
                <div class="bg-white border rounded shadow p-2">
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-gray-700">Categoria</label>
                        <select id="newCourse" wire:change="change($event.target.value)"
                            class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                            block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option>--Selecione--</option>
                            <option value="0">CURSO LIVRE</option>
                            <option value="1">ESPECIALIZAÇÃO</option>
                            <option value="2">RESIDÊNCIA</option>
                            <option value="3">RESIDÊNCIA MULTIPROFISSIONAL EM SAÚDE</option>
                        </select>
                    </div>
                </div>
                @if ($showDivCourse)
                <div class="grid grid-cols-3 grid-flow-col gap-8 bg-white border rounded shadow p-2">
                    <div class="col-span-12">
                        <label class="block text-sm font-medium 
                            text-gray-700">Curso</label>
                        <select class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                            block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option>--Selecione--</option>
                            <option value="0">APERFEIÇOAMENTO EM ATENÇÃO DOMICILIAR</option>
                            <option value="1">APERFEIÇOAMENTO EM CONTROLE, AVALIAÇÃO, REGULAÇÃO E AUDITORIA</option>
                            <option value="2">OUTRO</option>
                        </select>
                    </div>
                    <div  class="col-span-12">
                        <label class="block text-sm font-medium 
                            text-gray-700" for="grid-first-name">
                        Ano
                        </label>
                        <input class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                            block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
                            id="grid-first-name" type="text">
                    </div>
                    <div class="col-span-12">
                        <label for="first_name" 
                            class="block text-sm font-medium 
                            text-gray-700">Curso</label>
                        <select id="newCourse" wire:change="change($event.target.value)"
                            class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                            block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option>--Selecione--</option>
                            <option value="0">APERFEIÇOAMENTO EM ATENÇÃO DOMICILIAR</option>
                            <option value="1">APERFEIÇOAMENTO EM CONTROLE, AVALIAÇÃO, REGULAÇÃO E AUDITORIA</option>
                            <option value="2">OUTRO</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-flow-row auto-rows-max bg-white border rounded shadow p-2">
                    <label class="block text-sm font-medium 
                        text-gray-700">Informações Complementares</label>
                    <textarea name="" id="" cols="30" rows="10" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
                        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                
                <div class="grid grid-flow-row auto-rows-max bg-white border rounded shadow p-2">
                   <div class="flex  place-content-evenly">
                    <button class="bg-emerald-500 hover:bg-emerald-700 px-5 py-2.5 
                    text-sm leading-5 rounded-md font-semibold text-white">
                            <i class="fa fa-save"></i>
                        CADASTRAR
                      </button>
                      <button class="bg-slate-100 border-slate-300 hover:bg-slate-300  px-5 py-2.5 
                      text-sm leading-5 rounded-md font-semibold text-gray">
                      <i class="fa fa-eraser" aria-hidden="true"></i>
                          LIMPAR
                        </button>
                        <button class="bg-slate-100 hover:bg-slate-300 px-5 py-2.5 
                        text-sm leading-5 rounded-md font-semibold text-gray">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                            VOLTAR
                          </button>
                   </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>