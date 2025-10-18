@php
$clients = [
    ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg', 'name' => 'Netflix'],
    ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg', 'name' => 'Microsoft'],
    ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg', 'name' => 'Apple'],
    ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg', 'name' => 'Google'],
    ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg', 'name' => 'Amazon'],
];
@endphp

<section class="bg-black py-16 md:py-20">
    <div class="w-10/12 md:w-9/12 mx-auto flex flex-col md:flex-row items-center md:space-x-12">

        <!-- Left: Marquee Logos -->
        <div class="md:w-1/2 overflow-hidden">
            <div class="flex animate-marquee gap-6 md:gap-10">
                @foreach($clients as $client)
                    <div class="flex-shrink-0 w-24 sm:w-28 md:w-32 h-16 sm:h-20 md:h-20 flex items-center justify-center bg-white rounded-lg p-3 shadow-md hover:scale-105 transition-transform duration-300">
                        <img src="{{ $client['logo'] }}" alt="{{ $client['name'] }}" class="object-contain max-h-full max-w-full">
                    </div>
                @endforeach
                {{-- Duplicate logos for seamless scroll --}}
                @foreach($clients as $client)
                    <div class="flex-shrink-0 w-24 sm:w-28 md:w-32 h-16 sm:h-20 md:h-20 flex items-center justify-center bg-white rounded-lg p-3 shadow-md hover:scale-105 transition-transform duration-300">
                        <img src="{{ $client['logo'] }}" alt="{{ $client['name'] }}" class="object-contain max-h-full max-w-full">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Right: Heading & Tagline -->
        <div class="md:w-1/2 flex flex-col justify-center text-center md:text-right mt-8 md:mt-0 space-y-4">
            <h2 class="font-title text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                Our Clients
            </h2>
            <p class="font-text text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed max-w-md md:max-w-full mx-auto md:mx-0">
                Trusted by leading brands across industries, we deliver solutions that drive results and build long-term partnerships.
            </p>
        </div>
    </div>

    <!-- CSS for Marquee -->
    <style>
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 25s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @media (max-width: 768px) {
            .animate-marquee {
                animation: marquee 30s linear infinite;
            }
        }
    </style>
</section>
