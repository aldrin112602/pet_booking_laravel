<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add booking') }}

        </h2>
    </x-slot>

    <div class="mx-auto p-0" style="min-width: 100vw; ">
        <div class="bg-white overflow-hidden p-0">
            {{-- <x-guest-layout> --}}
                <x-authentication-card>
                    <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="#">
                        {{-- <form method="POST" action="{{ route('login') }}"> --}}
                        @csrf
                        <div>
                            <h4>Owner's Information</h4>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="mt-2">
                                <x-label for="firstname" value="{{ __('Firstname') }}" />
                                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                                    :value="old('firstname')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="lastname" value="{{ __('Lastname') }}" />
                                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                                    required />
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-label for="address" value="{{ __('Address') }}" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="contact number" value="{{ __('Contact number') }}" />
                            <x-input id="contact number" class="block mt-1 w-full" type="number" name="contact number"
                                required />
                        </div>

                        <div class="mt-4">
                            <x-label for="petname" value="{{ __('Pet Name') }}" />
                            <x-input id="petname" class="block mt-1 w-full" type="text" name="petname" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="petbreed" value="{{ __('Pet Breed') }}" />
                            <x-input id="petbreed" class="block mt-1 w-full" type="text" name="petbreed" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="petbdate" value="{{ __('Pet Birthdate') }}" />
                            <x-input id="petbdate" class="block mt-1 w-full" type="date" name="petbdate" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="petage" value="{{ __('Pet Age') }}" />
                            <x-input id="petage" class="block mt-1 w-full" type="text" name="petage" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="type" value="{{ __('Pet Type') }}" />
                            <x-input id="type" class="block mt-1 w-full" type="text" name="type" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="sex" value="{{ __('Sex') }}" />
                            <x-input id="sex" class="block mt-1 w-full" type="text" name="sex" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="color" value="{{ __('Color') }}" />
                            <x-input id="color" class="block mt-1 w-full" type="text" name="color" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="purpose" value="{{ __('Reason of Appointment') }}" />
                            <x-input id="purpose" class="block mt-1 w-full" type="text" name="purpose" required />
                        </div>




                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-4">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </x-authentication-card>

            {{-- </x-guest-layout> --}}

        </div>
    </div>
</x-app-layout>
