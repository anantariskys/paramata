@props(['title'])
<div class="min-h-[50vh] md:min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero.png') }}');">
    <div class="min-h-[50vh] md:min-h-screen container flex flex-col md:flex-row items-center justify-center md:justify-between py-8 md:py-16 px-4 md:px-6">
        <div class="flex flex-col h-full gap-3 md:gap-4 w-full md:w-1/2 text-center md:text-left mb-6 md:mb-0">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-primary">{{ $title }}</h1>
            <nav class="flex justify-center md:justify-start" aria-label="Breadcrumb">
                <ol class="inline-flex flex-wrap items-center space-x-1 sm:space-x-2 md:space-x-4">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm sm:text-base font-medium text-primary hover:text-primary/80">
                            Home
                        </a>
                    </li>
                    @foreach(request()->segments() as $segment)
                        <li>
                            <div class="flex items-center relative">
                                <svg class="w-2 h-2 sm:w-3 sm:h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="{{ url(implode('/', array_slice(request()->segments(), 0, $loop->iteration))) }}" 
                                   class="ml-1 text-sm sm:text-base font-medium text-primary relative hover:text-primary/80 md:ml-2">
                                    {{ ucfirst($segment) }}
                                    @if($loop->last)
                                        <hr class="absolute bottom-0 h-0.5 sm:h-1 w-2/5 bg-primary rounded-full left-0">
                                    @endif
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</div>