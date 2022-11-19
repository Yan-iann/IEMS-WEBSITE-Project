<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
           
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif

        @if(Session::get('sucess'))
            <div class="alert alert-success">
            {{ Session::get('sucess')}}
            </div>
        @endif

        <div class="block mt-1">
                    <center><span class="ml-2 text-lg text-blue-600">{{ __('Welcome!') }}</span><br>
                    <center><span class="ml-2 text-sm text-black-600">{{ __('A library of wildlife information awaits you') }}</span><br><br>
                </label>
            </div>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <br>
                <x-primary-button class="ml-4">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
