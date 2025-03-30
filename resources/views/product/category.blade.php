<x-root-layout :categories="$categories">
    <x-hero-layout title="PRODUCT" :bgColor="'bg-secondary/15'" :isCenter=true />

    <section class="py-20">
        <div class="container space-y-8">

            <div class="flex flex-col gap-2 justify-center">
                <h2 class="text-5xl text-center text-primary font-black">{{ $category->name }}</h2>
                <p class="text-center max-w-2xl mx-auto text-gray-500">{{ $category->description }}</p>
              

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div class="relative aspect-square group">
                        <img src="{{ $product->picture }}" alt="Product 1" class="w-full h-full object-cover">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-black/25 flex items-center flex-col gap-4 justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-white text-2xl font-bold line-clamp-3">{{ $product->productname }}</h3>
                            <a href="{{ route('products.show', $product->id) }}"
                                class="text-white bg-primary p-2 rounded-full">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

</x-root-layout>
