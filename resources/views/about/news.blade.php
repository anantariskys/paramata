<x-root-layout :categories="$categories">
    <x-hero-layout title="NEWS" :bgColor="'bg-secondary/15'" :isCenter=true/>
    <x-about.news.news :newsblogs="$newsblogs" />
</x-root-layout>

