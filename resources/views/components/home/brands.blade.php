<x-section-layout title="Our Brands" :isCenter="true">
    @php
    $brands = [
        [
            'image' => 'images/brand-1.png',
            'name' => 'Brand 1',
        ],
        [
            'image' => 'images/brand-2.png', 
            'name' => 'Brand 2',
        ],
        [
            'image' => 'images/brand-3.png',
            'name' => 'Brand 3', 
        ],
        [
            'image' => 'images/brand-4.png',
            'name' => 'Brand 4',
        ],
        [
            'image' => 'images/brand-5.jpg',
            'name' => 'Brand 5',
        ],
        [
            'image' => 'images/brand-6.png',
            'name' => 'Brand 6',
        ],
        [
            'image' => 'images/brand-7.png',
            'name' => 'Brand 7',
        ],
        [
            'image' => 'images/brand-8.png',
            'name' => 'Brand 8',
        ],
        [
            'image' => 'images/brand-9.jpeg',
            'name' => 'Brand 9',
        ],
        [
            'image' => 'images/brand-10.png',
            'name' => 'Brand 10',
        ],
      
    ];

    // Chunk customers array for mobile slides (2 items per slide)
    $mobileSlides = array_chunk($brands, 2);

    // Chunk customers array for desktop slides (4 items per slide)
    $desktopSlides = array_chunk($brands, 4);
@endphp

<div x-data="{ currentSlide: 0 }" class="relative">
    <div class="overflow-hidden">
        <div class="flex transition-transform py-8 md:py-12 duration-300 ease-in-out"
            :style="{ transform: `translateX(-${currentSlide * 100}%)` }">

            <!-- Mobile Slides -->
            @foreach ($mobileSlides as $slide)
                <div class="md:hidden w-full flex-shrink-0">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($slide as $brand)
                            <div class="w-full aspect-video">
                                <img src="{{ asset($brand['image']) }}" alt="{{ $brand['name'] }}"
                                    class="w-full h-full object-contain">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Desktop Slides -->
            @foreach ($desktopSlides as $slide)
                <div class="hidden md:block w-full flex-shrink-0">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach ($slide as $brand)
                            <div class="w-full aspect-video">
                                <img src="{{ asset($brand['image']) }}" alt="{{ $brand['name'] }}"
                                    class="w-full h-full object-contain">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Navigation buttons -->
    <button
        @click="currentSlide = (currentSlide - 1 + (window.innerWidth >= 768 ? {{ count($desktopSlides) }} : {{ count($mobileSlides) }})) % (window.innerWidth >= 768 ? {{ count($desktopSlides) }} : {{ count($mobileSlides) }})"
        class="absolute left-2 md:left-0 top-1/2 transform -translate-y-1/2 bg-primary/50 p-1.5 md:p-2 rounded-full hover:bg-primary/70 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>
    <button @click="currentSlide = (currentSlide + 1) % (window.innerWidth >= 768 ? {{ count($desktopSlides) }} : {{ count($mobileSlides) }})"
        class="absolute right-2 md:right-0 top-1/2 transform -translate-y-1/2 bg-primary/50 p-1.5 md:p-2 rounded-full hover:bg-primary/70 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute -bottom-6 md:-bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-1.5 md:space-x-2">
        <template x-for="(slide, index) in window.innerWidth >= 768 ? Array.from({length: {{ count($desktopSlides) }}}) : Array.from({length: {{ count($mobileSlides) }}})">
            <button @click="currentSlide = index"
                :class="{ 'bg-primary': currentSlide === index, 'bg-primary/50': currentSlide !== index }"
                class="w-2 h-2 md:w-3 md:h-3 rounded-full transition-colors duration-300"></button>
        </template>
    </div>
</div>
    
</x-section-layout>
