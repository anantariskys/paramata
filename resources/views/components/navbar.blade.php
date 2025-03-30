@props(['categories'])

<nav x-data="{ open: false }" class="bg-white fixed w-full z-50 border-b border-gray-100">
    <div class="container py-4">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <div class="space-x-8 lg:flex items-center">
                    <x-nav-link href="/" :active="request()->is('/')">
                        {{ __('Home') }}
                    </x-nav-link>
                    
                    <div x-data="{ open: false }" class="relative inline-block" @mouseleave="open = false">
                        <x-nav-link href="/about" :active="request()->is('about')" @mouseover="open = true">
                            <div class="flex items-center gap-1">
                                {{ __('About') }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </x-nav-link>
                        
                        <div x-show="open" 
                             x-transition
                             class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                             style="display: none;">
                            <div class="py-1">
                                <a href="/about/our-company" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-between">
                                    Our Company
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="/about/our-customers" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-between">
                                    Our Customers
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="/about/news" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-between">
                                    News
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div x-data="{ open: false }" class="relative inline-block" @mouseleave="open = false">
                        <x-nav-link href="/products" :active="request()->is('products')" @mouseover="open = true">
                            <div class="flex items-center gap-1">
                                {{ __('Products') }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </x-nav-link>
                        
                        <div x-show="open" 
                             x-transition
                             class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                             style="display: none;">
                            <div class="py-1">
                                @foreach ($categories as $category)
                                <a href="/products/category/{{ $category->id }}" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-between">
                                    {{ $category->name }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                @endforeach
                         
                            </div>
                        </div>
                    </div>
                    
                    <x-nav-link href="/special-offers" :active="request()->is('special-offers')">
                        {{ __('Special Offers') }}
                    </x-nav-link>
                    
                    <x-nav-link href="/contacts" :active="request()->is('contacts')">
                        {{ __('Contacts') }}
                    </x-nav-link>
                    
                    <a href="{{ route('login') }}" class="inline-flex items-center px-1 pt-1 border-transparent text-sm font-medium leading-5 text-gray-500 gap-2 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                        <div class="w-10 h-10 bg-red-500 rounded-full"></div>
                        {{ __('Log in') }}  
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="/" :active="request()->is('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            
            <div x-data="{ open: false }" class="relative">
                <x-responsive-nav-link href="#" @click="open = !open" :active="request()->is('about*')">
                    {{ __('About') }}
                </x-responsive-nav-link>
                
                <div x-show="open" 
                     x-transition
                     class="pl-4 space-y-1"
                     style="display: none;">
                    <x-responsive-nav-link href="/about/our-company" :active="request()->is('about/our-company')">
                        {{ __('Our Company') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/about/our-customers" :active="request()->is('about/our-customers')">
                        {{ __('Our Customers') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="/about/news" :active="request()->is('about/news')">
                        {{ __('News') }}
                    </x-responsive-nav-link>
                </div>
            </div>
            
            <div x-data="{ open: false }" class="relative">
                <x-responsive-nav-link href="#" @click="open = !open" :active="request()->is('products*')">
                    {{ __('Products') }}
                </x-responsive-nav-link>
                
                <div x-show="open" 
                     x-transition
                     class="pl-4 space-y-1"
                     style="display: none;">
                    @foreach ($categories as $category)
                    <x-responsive-nav-link href="/products/category/{{ $category->id }}" :active="request()->is('products/category/{{ $category->id }}')">
                        {{ __($category->name) }}
                    </x-responsive-nav-link>
                    @endforeach
                </div>
            </div>
            
            <x-responsive-nav-link href="/special-offers" :active="request()->is('special-offers')">
                {{ __('Special Offers') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/contacts" :active="request()->is('contacts')">
                {{ __('Contacts') }}
            </x-responsive-nav-link>

            <div class="px-4 py-2">
                <a href="{{ route('login') }}" class="inline-flex items-center text-sm font-medium text-gray-500 gap-2 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                    <div class="w-8 h-8 bg-red-500 rounded-full"></div>
                    {{ __('Log in') }}
                </a>
            </div>
        </div>
    </div>
</nav>
