<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>
       
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('updatePass',Auth::user()->id) }}">
            @csrf
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('New Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                   Update
                </x-primary-button>
            </div>
        </form>
       
    </x-auth-card>
   
</x-guest-layout>
