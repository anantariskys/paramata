

<x-root-layout  :categories="$categories">
    <x-hero-layout title="PRODUCT" :bgColor="'bg-secondary/15'" :isCenter=true/>
    <x-product.product :products="$products" :categories="$categories"/>
</x-root-layout>

