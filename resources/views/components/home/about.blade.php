@props(['onHome' => true])
<x-section-layout title="About Company">
    <div class="flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-1/2 space-y-4">
            <h2 class="text-4xl font-bold">Finding A Permanent Solution Is Our Ultimate Goal!</h2>
            <div class="flex flex-col gap-4">
                <p>PT. Paramata Baraya International is a private founded company which specialize in gas detection,
                    enviromental monitoring, industrial hygiene and safety.

                </p>
                <p> Founded in 1999 the company has gained trust from many industries, oil and gas company and
                    goverment institute due to high quality product and services.

                </p>
                <p> Paramata Baraya International has great concern to the enviromental condition, therefore our
                    porduct are freindly to nature beside describe as reliable, cost effective and high quality. We
                    will do our best to provide solutions to the customer’s needs.</p>
            </div>
            @if ($onHome == true)
                <button
                    class="bg-primary text-white px-4 w-fit py-2 rounded-xl flex items-center gap-2 hover:bg-primary/90 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>Read More
                </button>
            @endif

        </div>
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/about-img.png') }}" alt="" class="w-full h-full object-cover">
        </div>

    </div>
</x-section-layout>
