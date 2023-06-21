<x-app-layout class="w-full h-screen" >
    <div class="pt-24 pb-12 md:p-36">
        <div class="flex flex-col gap-6 items-center w-full md:items-start">
            <h1 class="font-bold text-xl md:text-2xl md:pl-8">Artikel Popular</h1>
            <div class="flex flex-col w-full justify-normal gap-6 items-center md:flex-row md:justify-between">
                <div class="w-80 h-80 rounded-xl bg-cover" style="background-image: url('{{ asset('images/Main-Article.jpg') }}')"></div>
                <div class="flex flex-col gap-4 w-80 md:w-[700px] items-start">
                    <h1 class="font-bold text-xl md:text-2xl text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    </h1>
                    <p class="text-justify leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 text-white px-3 md:px-4 py-2 md:py-3 rounded-md">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
