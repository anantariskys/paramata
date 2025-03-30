@props(['image', 'title'])

<div class=" p-4">
    <img src="{{ asset($image) }}" class="bg-white w-full aspect-square object-cover rounded" alt="{{ $title }}">
    <h3 class="text-xl font-bold text-center mt-4">{{ $title }}</h3>
</div>