<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- username -->
            <div>
                <x-input-label for="username" :value="__('username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- fullname -->
            <div>
                <x-input-label for="fullname" :value="__('fullname')" />

                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />

                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- address -->
            <div>
                <x-input-label for="address" :value="__('address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- birthdate -->
            <div>
                <x-input-label for="birthdate" :value="__('birthdate')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- phoneNumber -->
            <div>
                <x-input-label for="phoneNumber" :value="__('Phone Number')" />

                <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus />

                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            </div>

            <!-- agama -->
            <div>
                <x-input-label for="agama" :value="__('Agama')" />

                <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" required autofocus />

                <x-input-error :messages="$errors->get('agama')" class="mt-2" />
            </div>

            <!-- jenis kelamin -->
            <div class="mt-4">
                <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />

                <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="jenisKelamin" id="jenisKelamin">
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
