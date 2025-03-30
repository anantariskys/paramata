@props(['isCenter' => false, 'title', 'bgColor' => 'bg-white'])

<section class=" py-20 {{ $bgColor }}">
    <div class="container space-y-8">
        <div class="flex items-center {{ $isCenter  ? 'justify-center' : 'justify-between' }}">
            <div class="flex flex-col gap-4 w-fit">
                <h1 class="text-4xl font-bold">{{$title}}</h1>
                        <hr class="w-2/5 h-1.5 rounded-full bg-primary">
            </div>
        </div>
      {{$slot}}
    </div>
</section>
