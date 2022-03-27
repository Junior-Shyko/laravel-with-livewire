<div class="col-span-12 lg:col-span-12">
    <label class="block text-sm font-medium 
        text-gray-700">Programa</label>
    <select name="curso" wire:model="formReq.fkcodprograma" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option>--Selecione--</option>
        <option value="1">ANASTESIOLOGIA</option>
        <option value="2">CANCEROLOGIA PEDIÁTRICA</option>
        <option value="3">CARDIOLOGIA</option>
        <option value="4">CARDIOLOGIA  R3/ ECOCARDIOGRAFIA</option>
        <option value="5">CARDIOLOGIA PEDIÁTRICA</option>
    </select>
</div>
 {{-- Hospital --}}
<div class="col-span-12 lg:col-span-8">
    <label class="block text-sm font-medium 
        text-gray-700">Hospital</label>
    <select  wire:model="formReq.fkcodhospital" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option>--Selecione--</option>
        <option value="1">HGF- HOSPITAL GERAL DE FORTALEZA</option>
        <option value="2">HIAS - HOSPITAL INFANTIL ALBERT SABIN</option>
        <option value="3">HM- HOSPITAL DE MESSEJANA DR. CARLOS ALBERTO STUDART GOMES</option>
        <option value="4">HGCCO - HOSPITAL GERAL DR. CÉSAR CALS DE OLIVEIRA</option>
        <option value="5">HGWA - HOSPITAL GERAL DR. WALDEMAR DE ALCÃNTARA</option>
    </select>
</div>
{{-- PERIODO --}}
<div class="col-span-12 lg:col-span-2">
    <label class="block text-sm font-medium 
        text-gray-700">De:</label>
        <input  wire:model="dtini" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
        id="" type="text" placeholder="__/__/____">
        <p class="text-gray-600 text-xs italic">Período da solicitação</p>
</div>
<div class="col-span-12 lg:col-span-2">
    <label class="block text-sm font-medium 
        text-gray-700">Até:</label>
        <input wire:model="dtend" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
        id="" type="text" placeholder="__/__/____">
</div>
{{-- Matrícula --}}
<div class="col-span-12 lg:col-span-4">
    <label class="block text-sm font-medium 
        text-gray-700">Matrícula</label>
        <input wire:model="formReq.matricula" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
        id="" name="matricula" type="text">
</div>
{{-- CRM --}}
<div class="col-span-12 lg:col-span-4">
    <label class="block text-sm font-medium 
        text-gray-700">
    CRM
    </label>
    <input wire:model="formReq.crm" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" 
        id="" name="ano" type="text">
</div>
{{-- UF --}}
<div class="col-span-12 lg:col-span-4">
    <label for="first_name" 
        class="block text-sm font-medium 
        text-gray-700">UF</label>
    <select wire:model="formReq.fkcodestado" class="mt-1 focus:ring-emerald-500 focus:border-emerald-500 
        block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option>--Selecione--</option>
        @foreach ($state as $key => $item)
            <option value="{{$key + 1}}">{{$item['nome']}}</option>
        @endforeach
    </select>
</div>