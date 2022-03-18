<x-guest-layout>
    <x-jet-authentication-card>
        <div>
            <img src="https://www.esp.ce.gov.br/wp-content/uploads/sites/78/2021/09/ESP-CE-ORGAO-SEC-INVERTIDA-WEB.svg" alt="">
        </div>
        <div class="flex items-center flex-col mt-4">
            <img
             src="https://cdn.icon-icons.com/icons2/402/PNG/512/search-file_40436.png" alt=""
            style="width:50px;">
            <h3 class="text-green">S2DOC</h3>
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            
            <div class="flex items-center flex-col">
               
                <x-jet-button class="w-48 mt-4">
                    <span class="text-center  m-auto">{{ __('Login') }}</span>
                </x-jet-button>

                @if (Route::has('password.request'))
                    <a class="mt-4 underline text-sm text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                        {{ __('Não é cadastrado? Crie sua conta aqui') }}
                    </a>
                @endif
            </div>

            <div class="mt-4 flex items-center flex-col">
                <a href="#" class="">
                    <label for="remember_me" class="flex items-center">
                        {{-- <x-jet-checkbox id="remember_me" name="remember" /> --}}
                        <span class="ml-2 text-sm text-blue-600">{{ __('Esqueceu a senha? clique aqui') }}</span>
                    </label>
                </a>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
