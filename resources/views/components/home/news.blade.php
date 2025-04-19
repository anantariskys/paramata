<x-section-layout title="News" :news="$news" :isCenter=true x-data="{ currentNewsSlide: 0 }">

    <div x-data="{ currentSlide: 0 }" class="relative">
        <div class="overflow-hidden">
            <div class="flex transition-transform py-8 md:py-12 duration-300 ease-in-out"
                :style="{ transform: `translateX(-${currentSlide * 100}%)` }">

                <!-- Mobile Slides -->
                @foreach($news as $item)
                <div class="w-full md:hidden flex-shrink-0">
                    <x-news-card 
                        description="{{ $item['description'] }}" 
                        publishedAt="{{ $item['published_at'] }}" 
                        image="{{ asset($item['image']) }}" 
                        title="{{ $item['title'] }}" 
                        link="{{ route('news.show', $item['id']) }}"
                    />
                </div>
                @endforeach

                <!-- Desktop Slides -->
                @for($i = 0; $i < count($news); $i += 3)
                <div class="hidden md:block w-full flex-shrink-0">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                        @for($j = $i; $j < min($i + 3, count($news)); $j++)
                        <x-news-card 
                            description="{{ $news[$j]['description'] }}" 
                            publishedAt="{{ $news[$j]['published_at'] }}" 
                            image="{{ asset($news[$j]['image']) }}" 
                            title="{{ $news[$j]['title'] }}" 
                        />
                        @endfor
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Navigation buttons -->
        <button @click="currentSlide = (currentSlide - 1 + (window.innerWidth >= 768 ? 3 : 9)) % (window.innerWidth >= 768 ? 3 : 9)"
            class="absolute left-2 md:left-0 top-1/2 transform -translate-y-1/2 bg-primary/50 p-1.5 md:p-2 rounded-full hover:bg-primary/70 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>
        <button @click="currentSlide = (currentSlide + 1) % (window.innerWidth >= 768 ? 3 : 9)"
            class="absolute right-2 md:right-0 top-1/2 transform -translate-y-1/2 bg-primary/50 p-1.5 md:p-2 rounded-full hover:bg-primary/70 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>

        <!-- Indicators -->
        <div class="absolute -bottom-6 md:-bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-1.5 md:space-x-2">
            <template x-for="(slide, index) in window.innerWidth >= 768 ? [0,1,2] : [0,1,2,3,4,5,6,7,8]" :key="index">
                <button @click="currentSlide = index"
                    :class="{ 'bg-primary': currentSlide === index, 'bg-primary/50': currentSlide !== index }"
                    class="w-2 h-2 md:w-3 md:h-3 rounded-full transition-colors duration-300"></button>
            </template>
        </div>
    </div>
</x-section-layout>
