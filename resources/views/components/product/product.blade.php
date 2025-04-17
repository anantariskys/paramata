@props(['products', 'categories'])
<x-section-layout title="All Products" :isCenter="true">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @forelse ($products as $product)
            <x-product-card2 :image="$product->picture" :title="$product->productname" :category="$product->category->name" :id="$product->id" />
        @empty
            <div class="col-span-full text-center py-8">
                <p class="text-gray-500 text-lg">No products available</p>
            </div>
        @endforelse
    </div>
</x-section-layout>
