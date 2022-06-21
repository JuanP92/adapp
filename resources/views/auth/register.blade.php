<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf


            <!-- Rol -->
            <div>
                <x-input id="rol_id" type="hidden" name="rol_id" value="2" required />
            </div>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- codigo -->
            <div class="mt-4">
                <x-label for="codigo" :value="__('Código')" />

                <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Tipo de Documento -->
            <div class="mt-4">
                <x-label for="tipo_doc" :value="__('Tipo de Documento')" />

                <select id="tipo_doc" name="tipo_doc" class="block mt-1 w-full">
                    <option value="cc" selected>Cedula de Ciudadania</option>
                    <option value="ti">Tarjeta de Identidad</option>
                    <option value="ce">Cedula Extranjera</option>
                </select>
            </div>

            <!-- Numero de documento -->
            <div class="mt-4">
                <x-label for="documento" :value="__('Documento')" />

                <x-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')" required />
            </div>

            <!-- Numero de documento -->
            <div class="mt-4">
                <x-label for="celular" :value="__('# de Celular')" />

                <x-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" required />
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
