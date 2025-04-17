@props(['image', 'title', 'category', 'id'])

<div class="border-2 group border-gray-200 rounded relative">
    <div class="absolute group-hover:opacity-100 opacity-0 transition-opacity duration-300 bg-black/50 flex items-center justify-center h-full w-full z-10 top-0 right-0">
        <a href="{{ route('products.show', $id) }}" class="bg-primary text-white px-4 py-2 rounded-full flex items-center gap-2">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
    <img src="{{ asset($image) }}" class="bg-white w-full aspect-square object-cover rounded" alt="{{ $title }}">
    <div class="p-4 border-t-2 border-gray-200">
        <h3 class="text-xl font-bold text-center">{{ $title }}</h3>
        <p class="text-center text-gray-500">{{ $category }}</p>
    </div>
</div>