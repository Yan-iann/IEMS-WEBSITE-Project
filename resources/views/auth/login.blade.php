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

        <div class="block mt-1 mb-3">
                    <h1 class="display-4 subheader" >Welcome!</h1>
                    <p> A whole library of information awaits you.</p>
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

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
           

            <br>
                <button  class="btn btn-info">
                    Login
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
