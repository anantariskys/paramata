<x-root-layout :categories="$categories">
    <x-hero-layout title="CONTACTS" :bgColor="'bg-secondary/15'" :isCenter=true />
    <section>
        <div class="container border-2 shadow-lg gap-4 md:-translate-y-36 bg-white py-8 md:py-20 px-4 md:px-8 flex flex-col md:flex-row justify-between items-center">
            <div class="w-full md:w-1/2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.335816307873!2d106.70574007573134!3d-6.219371660915986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9f46cb8909d%3A0xcc3c7dea1e906364!2sParamata%20Baraya%20International.%20PT!5e0!3m2!1sid!2sid!4v1743325911918!5m2!1sid!2sid" class="w-full h-full aspect-video" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-1/2 space-y-4 mt-8 md:mt-0">
                <h2 class="text-2xl md:text-4xl font-bold text-primary">Get In Touch</h2>
                <p class="text-gray-600 text-sm md:text-base">If you have any questions please fell free to contact with us.</p>
                <form action="" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <input type="text" name="name" id="name" placeholder="Name" class="w-full rounded-md border-2 border-primary p-2 focus:border-primary focus:ring-1 focus:ring-primary text-sm md:text-base">
                    </div>
                    <div>
                        <input type="email" name="email" id="email" placeholder="Email" class="w-full rounded-md border-2 border-primary p-2 focus:border-primary focus:ring-1 focus:ring-primary text-sm md:text-base">
                    </div>
                    <div>
                        <input type="text" name="phone" id="phone" placeholder="Phone" class="w-full rounded-md border-2 border-primary p-2 focus:border-primary focus:ring-1 focus:ring-primary text-sm md:text-base">
                    </div>
                    <div>
                        <input type="text" name="object" id="object" placeholder="Object" class="w-full rounded-md border-2 border-primary p-2 focus:border-primary focus:ring-1 focus:ring-primary text-sm md:text-base">
                    </div>
                    <div class="col-span-1 sm:col-span-2">
                        <textarea name="message" id="message" placeholder="Message" rows="4" class="w-full h-32 rounded-md border-2 border-primary p-2 resize-none focus:border-primary focus:ring-1 focus:ring-primary text-sm md:text-base"></textarea>
                    </div>
                </form>
                <div class="flex justify-center">
                    <button class="bg-primary text-white px-4 py-2 min-w-40 min-h-12 rounded-md">Send</button>

                </div>
            </div>
        </div>
    </section>
    <section class="px-4 md:px-0">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 pb-8 md:pb-20">
                <div class="w-full bg-secondary/15 px-4 py-6 md:py-8 rounded-md flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 md:w-12 md:h-12 text-primary mb-3 md:mb-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <div class="text-center">
                        <h2 class="text-lg md:text-xl font-bold text-primary">Phone</h2>
                        <p class="text-sm md:text-base">021-730624</p>
                    </div>
                </div>
                <div class="w-full bg-secondary/15 px-4 py-6 md:py-8 rounded-md flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 md:w-12 md:h-12 text-primary mb-3 md:mb-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="text-center">
                        <h2 class="text-lg md:text-xl font-bold text-primary">Location</h2>
                        <p class="text-sm md:text-base">Komp. Palem Ganda Asri I
                            Blok A3 No.8 Ciledug, Tangerang</p>
                    </div>
                </div>
                <div class="w-full bg-secondary/15 px-4 py-6 md:py-8 rounded-md flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 md:w-12 md:h-12 text-primary mb-3 md:mb-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <div class="text-center">
                        <h2 class="text-lg md:text-xl font-bold text-primary">Email</h2>
                        <p class="text-sm md:text-base">info@paramata-baraya.com</p>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
</x-root-layout>
