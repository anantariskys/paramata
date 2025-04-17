<x-root-layout :categories="$categories">
    <x-hero-layout title="PRODUCT" :bgColor="'bg-secondary/15'" :isCenter=true />

    <section class="py-20">
        <div class="container space-y-8">

            <div class="flex flex-col gap-2 justify-center">
                <h2 class="text-5xl text-center text-primary font-black">{{ $category->name }}</h2>
                <p class="text-center max-w-2xl mx-auto text-gray-500">{{ $category->description }}</p>
            </div>

            @if($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($products as $product)
                       <x-product-card2 :image="$product->picture" :title="$product->productname" :category="$product->category->name" :id="$product->id" />
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500 text-lg">Tidak ada data produk yang tersedia untuk kategori ini.</p>
                </div>
            @endif
        </div>
    </section>

</x-root-layout>
