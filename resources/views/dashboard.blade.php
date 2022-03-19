<x-app-layout>
    <x-slot name="header">
        <div  class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('S2DOC') }}
            </h2>
            <img
                 src="https://www.esp.ce.gov.br/wp-content/uploads/sites/78/2021/09/ESP-CE-ORGAO-SEC-INVERTIDA-WEB.svg" alt=""
                style="width:200px;">
        </div>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
