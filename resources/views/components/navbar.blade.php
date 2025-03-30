<nav x-data="{ open: false }" class="bg-white fixed w-full z-50 border-b border-gray-100">
    <div class="container  py-4">
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
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="space-x-8 sm:flex">
                    <x-nav-link href="/" :active="request()->is('/')">
                        {{ __('Home') }}
                    </x-nav-link>
                    
                    <x-nav-link href="/about" :active="request()->is('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    
                    <x-nav-link href="/products" :active="request()->is('products')">
                        {{ __('Products') }}
                    </x-nav-link>
                    
                    <x-nav-link href="/special-offers" :active="request()->is('special-offers')">
                        {{ __('Special Offers') }}
                    </x-nav-link>
                    
                    <x-nav-link href="/contacts" :active="request()->is('contacts')">
                        {{ __('Contacts') }}
                    </x-nav-link>
                    
                    <a href="{{ route('login') }}" class="inline-flex items-center px-1 pt-1  border-transparent text-sm font-medium leading-5 text-gray-500 gap-2 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                        <div class="w-10 h-10 bg-red-500 rounded-full"></div>
                        {{ __('Log in') }}  
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
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
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="/" :active="request()->is('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/about" :active="request()->is('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/products" :active="request()->is('products')">
                {{ __('Products') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/special-offers" :active="request()->is('special-offers')">
                {{ __('Special Offers') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/contacts" :active="request()->is('contacts')">
                {{ __('Contacts') }}
            </x-responsive-nav-link>

            <a href="{{ route('login') }}" class="inline-flex items-center px-1 pt-1  border-transparent text-sm font-medium leading-5 text-gray-500 gap-2 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                <div class="w-10 h-10 bg-red-500 rounded-full"></div>
                {{ __('Log in') }}
            </a>
        </div>
    </div>
</nav>
