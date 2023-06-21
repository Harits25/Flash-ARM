{{-- <div class="fixed bg-white w-full mx-auto px-6 sm:px-8 lg:px-10 border-b-[1px] border-black">
    <div class="flex items-center justify-between h-20 md:h-24">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-4">
            <div
                class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center text-xl md:text-2xl rounded-md md:rounded-lg bg-black">
                <h1 class="font-bold font-serif text-white text-2xl md:text-3xl">F</h1>
            </div>
            <h1 class="text-lg md:text-xl font-bold">Flash ARM</h1>
        </a>
        
    </div>
</div> --}}

<div class="fixed w-full bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center justify-center w-10 h-10 rounded-md bg-black">
                    <h1 class="font-bold font-serif text-white text-2xl">F</h1>
                </a>
            </div>
            <a href="{{ route('login') }}"
                class="flex items-center justify-center px-3 py-2 text-white rounded-lg md:rounded-xl text-sm font-light bg-black">Get
                Started</a>
        </div>
    </div>
</div>
