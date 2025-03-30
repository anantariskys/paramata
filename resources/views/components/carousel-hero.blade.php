<header x-data="{ currentSlide: 0 }" class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <template x-for="(slide, index) in [0,1,2]" :key="index" >
        <div x-show="currentSlide === index" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full"
            class="absolute inset-0"
            style="background-image: url('{{ asset('images/hero.png') }}'); background-size: cover; background-position: center;">
            <div class="min-h-screen">
                <div class="container min-h-screen flex items-center justify-between py-16">
                    <div class="flex flex-col h-full gap-4">
                        <h1 class="text-5xl font-bold text-primary">ToxiRAE Pro Family</h1>
                        <p class="text-black text-lg font-medium">The ToxiRAE Pro family is wireless, personal single-gas
                            monitors that can reliably and accurately monitor a full range of common toxic industrial
                            chemicals (TICs), volatile organic compounds (VOCs), combustible gases, carbon dioxide (CO2),
                            and Oxygen (O2).</p>
                        <button class="bg-primary text-white px-4 w-fit py-2 rounded-xl flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>Read More
                        </button>
                    </div>
                    <img src="{{ asset('images/hero1.png') }}" alt="" class="w-full max-w-md">
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation buttons -->
    <button @click="currentSlide = (currentSlide - 1 + 3) % 3" 
        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/50 p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>
    <button @click="currentSlide = (currentSlide + 1) % 3"
        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/50 p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in [0,1,2]" :key="index">
            <button @click="currentSlide = index"
                :class="{'bg-primary': currentSlide === index, 'bg-white/50': currentSlide !== index}"
                class="w-3 h-3 rounded-full transition-colors duration-300"></button>
        </template>
    </div>
</header>