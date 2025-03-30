@props(['products', 'categories'])
<section class="py-20">
    <div class="container space-y-8">

        <div class="flex gap-2 justify-center" x-data="{ activeTab: 0 }">
            <div @click="activeTab = 0" :class="{ 'text-white bg-primary': activeTab === 0 }"
                class=" p-2 rounded border border-primary  text-white min-w-24 text-center cursor-pointer">
                All
            </div>
            @foreach ($categories as $category)
                <div @click="activeTab = {{ $loop->index+1 }}" :class="{ 'text-white bg-primary': activeTab === {{ $loop->index+1 }} }"
                    class=" p-2 rounded border border-primary  text-white min-w-24 text-center cursor-pointer">
                    {{ $category->name }}
                </div>
            @endforeach
          
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="relative aspect-square group">
                    <img src="{{ $product->picture }}" alt="Product 1" class="w-full h-full object-cover">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-black/25 flex items-center flex-col gap-4 justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white text-2xl font-bold line-clamp-3">{{ $product->productname }}</h3>
                        <a href="{{ route('products.show', $product->id) }}" class="text-white bg-primary p-2 rounded-full">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
