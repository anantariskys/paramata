@props(['newsblogs'])
<x-section-layout title="News" :isCenter=true>
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @if($newsblogs->count() > 0)
            @foreach($newsblogs as $newsblog)
                <x-news-card 
                    :description="$newsblog->content"
                    :publishedAt="$newsblog->published_at"
                    :penulis="$newsblog->author"
                    :image="$newsblog->image ? asset('storage/news_images/' . $newsblog->image) : asset('images/default.png')"
                    :title="$newsblog->title"
                    :id="$newsblog->id"
                />
            @endforeach
        @else
            <div class="col-span-full text-center py-8">
                No news articles found.
            </div>
        @endif
    </div>
</x-section-layout>
