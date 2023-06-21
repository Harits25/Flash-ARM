<x-guest-layout>
    <div class="flex flex-row justify-between p-10 w-full h-screen bg-gray-100">
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
                        <h1 class="text-3xl md:text-4xl font-bold">Hi, Selamat Datang Kembali !!</h1>
                        <h2 class="text-sm md:text-base text-[#8A8A8A]">Kami sangat senang melihat anda kembali !!</h2>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <p class="font-medium md:font-semibold text-lg md:text-xl">Masuk</p>
                        <a href="{{ route('register') }}"
                            class="md:font-medium text-sm md:text-base text-[#0098EA] hover:text-[#3568FF]">Daftar</a>
                    </div>
                    <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}"
                        class="flex flex-col gap-2">
                        @csrf

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" class="text-xs md:text-sm" />
                            <x-input id="email" type="email" name="email" :value="old('email')"
                                class="block p-2 w-full text-xs md:text-sm" required autofocus
                                autocomplete="username" />
                        </div>

                        <div>
                            <x-label for="password" value="{{ __('Password') }}" class="text-xs md:text-sm" />
                            <x-input id="password" type="password" name="password"
                                class="block p-2 w-full text-xs md:text-sm" required autocomplete="current-password" />
                        </div>

                        {{-- <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}

                        <div class="mt-4">
                            {{-- @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif --}}

                            <x-button class="block justify-center w-full h-10 md:h-12">
                                {{ __('Log in') }}
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
