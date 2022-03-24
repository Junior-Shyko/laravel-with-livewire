<div class="col-span-12 lg:col-span-4">
    <label class="block text-sm font-medium 
        text-gray-700">Curso</label>
    <select wire:model="formReq.fkcodcurso" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option>--Selecione--</option>
        @foreach ($course as $item)
            <option value="{{$item->id}}">{{$item->curso}}</option>
        @endforeach
    </select>
    <p class="text-gray-600 text-xs italic">Campo Obrigatório</p>
</div>
{{-- Ano --}}
<div class="col-span-12 lg:col-span-4">
    <label class="block text-sm font-medium 
        text-gray-700">
    Ano
    </label>
    <input wire:model="formReq.ano" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
        id="" name="ano" type="text">
</div>
<div class="col-span-12 lg:col-span-4">
    <label for="first_name" 
        class="block text-sm font-medium 
        text-gray-700">Cidade</label>
    <select wire:model="formReq.fkcodcidade" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option>--Selecione--</option>
        @foreach ($city as $key => $item)
            <option value="{{$key}}">{{$item}}</option>
        @endforeach
    </select>
    <p class="text-gray-600 text-xs italic">Campo Obrigatório</p>
</div>