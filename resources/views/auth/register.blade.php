<x-guest-layout>
    <div class="flex w-full h-screen flex-row justify-between p-10 bg-gray-100">
        <div class="flex flex-col justify-between md:w-1/2 w-full">
            <a href="#" class="flex flex-row items-center gap-4">
                <div
                    class="flex items-center justify-center w-11 md:w-14 h-11 md:h-14 bg-black rounded-md md:rounded-lg">
                    <p class="font-bold font-serif text-2xl md:text-3xl text-white">F</p>
                </div>
                <p class="font-bold text-lg md:text-xl">Flash ARM</p>
            </a>
            <div class="flex justify-center">
                <div class="flex flex-col gap-5 w-96">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-3xl md:text-4xl font-bold">Hi, Selamat Datang !</h1>
                        <h2 class="text-sm md:text-base text-[#8A8A8A]">Jika Anda sudah memiliki akun Pendaftaran
                            sebelumnya, Anda dapat <a href="{{ route('login') }}"
                                class="text-[#0098EA] hover:text-[#3568FF]">Masuk
                                disini!</a></h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-2">
                        @csrf

                        <div>
                            <x-label for="name" value="{{ __('Name') }}" class="text-xs md:text-sm" />
                            <x-input id="name" type="text" name="name" :value="old('name')"
                                class="block p-2 w-full text-xs md:text-sm"
                                required autofocus autocomplete="name" />
                        </div>

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" class="text-xs md:text-sm" />
                            <x-input id="email" type="email" name="email" :value="old('email')"
                                class="block p-2 w-full text-xs md:text-sm" required
                                autofocus autocomplete="username" />
                        </div>

                        <div>
                            <x-label for="password" value="{{ __('Password') }}" class="text-xs md:text-sm" />
                            <x-input id="password" type="password" name="password"
                                class="block p-2 w-full text-xs md:text-sm"
                                required autocomplete="new-password" />
                        </div>

                        <div>
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-xs md:text-sm" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" class="block p-2 w-full text-xs md:text-sm"
                                required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="mt-4">
                            {{-- @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif --}}

                            <x-button class="block justify-center w-full h-10 md:h-12">
                                {{ __('Register') }}
                            </x-button>
                        </div>

                    </form>
                </div>
            </div>
            <p class="font-light text-xs md:text-sm text-[#8A8A8A]">© 2023 Harits Lukman | All rights reserved.</p>
        </div>
        <div class="hidden sm:block items-center w-1/2 h-full rounded-2xl bg-[#3568FF]">
            <div class="w-full h-full bg-cover bg-center py-20 px-16"
                style="background-image: url('{{ asset('images/Background-Vectors.png') }}')">
                <div class="w-full h-full rounded-2xl border border-white bg-[#B7E9F6] bg-opacity-25">
                    <div class="flex flex-col justify-between h-full p-10">
                        <h1 class="text-4xl text-white font-bold">Baca berita untuk terus terinformasi dan terinspirasi!
                        </h1>
                        <div class="flex flex-row gap-2">
                            <div class="bg-white w-12 h-1 rounded-full"></div>
                            <div class="bg-gray-200 w-6 h-1 rounded-full"></div>
                            <div class="bg-gray-200 w-6 h-1 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

{{-- Page Two --}}
{{-- Page Two --}}
{{-- Page Two --}}
{{-- Page Two --}}
{{-- Page Two --}}

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

{{-- Page Three --}}
{{-- Page Three --}}
{{-- Page Three --}}
{{-- Page Three --}}
{{-- Page Three --}}

<div class="flex w-full h-screen flex-row justify-between p-10">
    <div class="flex flex-col justify-between md:w-1/2 w-full">
        <a href="#" class="flex flex-row items-center gap-4">
            <div class="flex items-center justify-center w-11 md:w-14 h-11 md:h-14 bg-black rounded-md md:rounded-lg">
                <p class="font-bold font-serif text-2xl md:text-3xl text-white">F</p>
            </div>
            <p class="font-bold text-lg md:text-xl">Flash ARM</p>
        </a>
        <div class="flex justify-center">
            <div class="flex flex-col gap-5 w-96">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-bold">Hi, Selamat Datang Kembali</h1>
                    <h2 class="text-sm md:text-base text-[#8A8A8A]">Jika Anda sudah memiliki akun Pendaftaran
                        sebelumnya, Anda dapat <a href="#" class="text-[#0098EA] hover:text-[#3568FF]">Masuk
                            disini!</a></h2>
                </div>
                <form action="/login" method="POST">
                    @csrf

                    <div class="flex flex-col">
                        <div>
                            <label for="name" class="text-xs text-[#8A8A8A]">Nama</label>
                            <input type="text" name="nama" id="nama"
                                placeholder="Masukkan nama pengguna Anda"
                                class="bg-transparent w-full border border-gray-300 p-3 rounded-lg text-xs md:text-sm text-black">
                        </div>

                        <div x-data="{ show: true }">
                            <label for="name" class="text-xs text-[#8A8A8A]">Kata sandi</label>
                            <input type="password" name="password" id="password"
                                placeholder="Masukkan kata sandi Anda"
                                class="bg-transparent w-full border border-gray-300 p-3 rounded-lg text-xs md:text-sm text-black">
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="block rounded-lg p-3 bg-[#0098EA] hover:text-[#3568FF] mt-4">
                            <p class="text-white font-bold">Masuk</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <p class="font-light text-xs md:text-sm text-[#8A8A8A]">© 2023 Harits Lukman | All rights reserved.</p>
    </div>
    <div class="hidden sm:block items-center w-1/2 h-full rounded-2xl bg-[#3568FF]">
        <div class="w-full h-full bg-cover bg-center py-20 px-16"
            style="background-image: url('{{ asset('images/Background-Vectors.png') }}')">
            <div class="w-full h-full rounded-2xl border border-white bg-[#B7E9F6] bg-opacity-25">
                <div class="flex flex-col justify-between h-full p-10">
                    <h1 class="text-4xl text-white font-bold">Baca berita untuk terus terinformasi dan terinspirasi!
                    </h1>
                    <div class="flex flex-row gap-2">
                        <div class="bg-white w-12 h-1 rounded-full"></div>
                        <div class="bg-white w-6 h-1 rounded-full"></div>
                        <div class="bg-white w-6 h-1 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
