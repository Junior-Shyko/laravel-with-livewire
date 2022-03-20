<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    {{-- <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div> --}}

    <div class="mt-8 text-2xl">
       Olá, {{ Auth::user()->name }} ! 
      
    </div>

    <div class="mt-6 text-gray-500">
        Seja bem vindo(a)
    </div>
    
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <i class="fa fa-plus fa-2x"> </i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="{{ url('criar-requerimento') }}">NOVO REQUERIMENTO</a>
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm">
            <span class="text-gray-500">
                <ul>
                    <li>Clique no ícone NOVO para preencher o Requerimento;</li>
                    <li>Selecione a Categoria referente ao curso realizado;</li>
                    <li> Preencha o formulário com as informações necessárias;</li>
                    <li>Clique no botão CADASTRAR para enviar sua requisição.</li>
                </ul>
            </span>
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <i class="fa fa-search fa-2x"> </i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="https://laracasts.com">CONSULTAR REQUERIMENTO</a>
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm">
                <span class="text-gray-500">
                    <ul>
                        <li>Clique no ícone CONSULTAR para visualizar seus Requerimentos;</li>
                        <li>Clique no ícone em forma de lupa para VISUALIZAR o Requerimento desejado;</li>
                        <li>Acompanhe o andamento de suas solicitações conforme SITUAÇÃO exibida.</li>
                    </ul>
                </span>
                </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <i class="fa fa-file-text-o fa-2x"> </i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="#">GERAR DAE (DOCUMENTO DE ARRECADAÇÃO ESTADUAL) PARA PAGAMENTO</a>
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <i class="fa fa-edit fa-2x"> </i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="https://laracasts.com">EDITAR FICHA DE CADASTRO</a>
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started what matters most: building your application.
            </div>
        </div>
    </div>
</div>

