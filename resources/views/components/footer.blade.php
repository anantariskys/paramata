<footer class="bg-secondary/15 border-t border-gray-100">
    <div class="container py-8 md:py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 text-sm">
            <!-- Logo and Quick Links Section -->
            <div class="col-span-1 lg:col-span-3">
                <x-application-logo class="block h-16 md:h-24 w-auto mb-6 md:mb-8" />
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-4">
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-base md:text-lg font-extrabold text-primary mb-4">QUICK LINKS</h3>
                        <div class="flex flex-col gap-3 md:gap-4">
                            <a href="" class="hover:text-primary transition-colors">Products</a>
                            <a href="" class="hover:text-primary transition-colors">Special Offers</a>
                            <a href="" class="hover:text-primary transition-colors">Contacts</a>
                        </div>
                    </div>

                    <!-- Products -->
                    <div>
                        <h3 class="text-base md:text-lg font-extrabold text-primary mb-4">PRODUCTS</h3>
                        <div class="flex flex-col gap-3 md:gap-4">
                            <a href="" class="hover:text-primary transition-colors">Gas Detector</a>
                            <a href="" class="hover:text-primary transition-colors">Noise Measurement</a>
                            <a href="" class="hover:text-primary transition-colors">Mercury Analyzer</a>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-base md:text-lg font-extrabold text-primary mb-4">CONTACT INFO</h3>
                        <div class="flex flex-col gap-3 md:gap-4">
                            <a href="tel:021-730624" class="hover:text-primary transition-colors">
                                <span class="font-medium">Phone:</span> 021-730624
                            </a>
                            <a href="mailto:info@paramata-baraya.com" class="hover:text-primary transition-colors">
                                <span class="font-medium">Email:</span> info@paramata-baraya.com
                            </a>
                            <p class="hover:text-primary transition-colors">
                                <span class="font-medium">Location:</span> Komp. Palem Ganda Asri I Blok A3 No.8 Ciledug, Tangerang
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-span-1 lg:col-span-2 min-h-[300px] bg-gray-100 rounded-lg">
                {{-- Google Maps integration goes here --}}
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-[#484848] mt-8 pt-6 md:pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm font-semibold text-gray-600">
                    Copyright © 2025 Paramata Baraya Int'l
                </p>
                <p class="text-sm font-semibold text-gray-600">
                    Powered by Paramata Baraya Int'l
                </p>
            </div>
        </div>
    </div>
</footer>
