<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<div class="relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 relative flex items-center py-24 xl:py-20">
        <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 p-4 gap-4">
            <div class="relative">
                <div class="flex flex-col items-start">
                    <span class="font-mitr uppercase text-indigo-500">{{ config('settings.welcome_message_title') }}</span>
          
                    <h1 class="font-roboto-slab text-4xl sm:text-6xl text-red-400 leading-tight mt-4">{{ config('settings.welcome_message') }}</h1>
            
                    <div class="max-w-md">
                        <p class="font-source-sans-pro text-indigo-500 mt-6 text-lg">{{ config('settings.welcome_message_description') }}</p>
                    </div>
          
                    <a href="#" class="block bg-indigo-500 hover:bg-indigo-400 py-2 px-4 rounded-full text-sm font-mitr text-white uppercase mt-10">Star a Fundriser for Free</a>
                </div>
            </div>
            <div class="relative grid justify-items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('storage/'.config('settings.welcome_image')) }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center py-5 mb-20 z-10">
        <div class="bg-white p-2 w-80 max-w-3xl sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none z-10">
            <div
                style='background: url("{{ asset('storage/'.config('settings.featured_image')) }}")'
                class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
            ></div>
            <div class="flex sm:flex-1 flex-col gap-2 p-1">
                <div class="flex">
                    <div class="rounded-full px-6 py-1 bg-gradient-to-tl from-blue-400 via-blue-500 to-blue-400 text-white font-bold">FEATURED</div>
                </div>
                <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
                    {{ config('settings.featured_title') }}
                </h1>
                <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                    {{ config('settings.featured_description') }}
                </p>
                <div class="flex gap-4 mt-auto">
                 <button
                    class='ml-auto flex items-center gap-1 sm:text-lg text-white border border-gray-300 px-4 py-1 rounded-full bg-indigo-600 hover:bg-indigo-500 transition-colors focus:bg-indigo-400 focus:outline-none focus-visible:border-gray-500 font-bold'
                >
                    <span>DONATE NOW</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>