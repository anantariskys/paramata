@props(['image', 'title', 'description', 'publishedAt', 'id'=>'1', 'class' => '', 'penulis' => ''])
<div class="w-full bg-white border shadow-md rounded-lg {{ $class }}">
    <div>
        <img class="bg-secondary/15 w-full aspect-[12/13] object-cover rounded" src="{{ asset($image) }}"
            alt="{{ $title }}">
    </div>
    <div class="p-4 space-y-2 ">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-bold line-clamp-2">{{ $title }}</h3>
            @if (!$penulis)
                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($publishedAt)->format('d M Y') }}</p>
            @endif
        </div>
        @if ($penulis)
            <p class="text-sm text-gray-500">{{ $publishedAt }} | {{ $penulis }}</p>
        @else
            <p class="line-clamp-3 h-24 text-gray-500">{{ $description }}</p>
        @endif


        <div class="mt-auto">
            <hr class="my-2">
            <a href="{{ route('news.show', $id) }}">
                <div class="flex cursor-pointer items-center justify-between py-2">
                    <p>Read More</p>
                    <div class="h-fit w-fit bg-primary p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
