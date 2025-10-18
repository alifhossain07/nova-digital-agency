@php
$testimonials = [
    [
        'name' => 'Alex Carter',
        'position' => 'CEO, Startup Hub',
        'testimony' => "The team delivered a sleek website that perfectly represents our brand. Their digital strategy truly boosted our visibility.",
        'image' => 'https://i.pravatar.cc/100?img=10',
    ],
    [
        'name' => 'Mia Roberts',
        'position' => 'Marketing Manager, TrendyTech',
        'testimony' => "Their UI/UX design transformed our app into a user-friendly platform. We saw engagement increase immediately.",
        'image' => 'https://i.pravatar.cc/100?img=11',
    ],
    [
        'name' => 'Liam Hughes',
        'position' => 'Founder, Creative Co.',
        'testimony' => "We were impressed by the branding work. The digital presence they built for us is consistent and modern.",
        'image' => 'https://i.pravatar.cc/100?img=12',
    ],
    [
        'name' => 'Olivia Bennett',
        'position' => 'Product Lead, Innovate Labs',
        'testimony' => "Their marketing campaigns helped us reach the right audience. Results exceeded our expectations in every metric.",
        'image' => 'https://i.pravatar.cc/100?img=13',
    ],
];
@endphp

<section class="w-full bg-black mx-auto py-20 ">
    <div data-aos="fade-down" class="text-center">
    <h1 class="font-text tracking-widest text-sm md:text-xl font-bold mb-3 md:mb-6 uppercase text-gray-400">
        Success Stories
    </h1>
    <h1 class="font-title  tracking-wide text-xl md:text-4xl font-bold md:w-6/12 mx-auto leading-snug text-gray-100">
        Driving Client Success Through Innovative Digital Solutions
    </h1>
</div>



    <!-- Marquee Container -->
    <div class="overflow-hidden relative mt-20 w-10/12 mx-auto">
        <div class="flex animate-marquee space-x-6">
            @foreach($testimonials as $testimonial)
                <div class="flex-shrink-0 w-80 md:w-96">
                    <div class="bg-gray-950 border border-gray-700 shadow-lg rounded-lg p-8 h-80 flex flex-col justify-between">
                        <div class="flex flex-col flex-grow items-center text-center">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="rounded-full w-20 h-20 mb-4 shadow-md border border-gray-700">
                            <p class="text-gray-300 mb-4 flex-grow">{{ $testimonial['testimony'] }}</p>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-gray-100">{{ $testimonial['name'] }}</h3>
                            <span class="text-gray-400">{{ $testimonial['position'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Duplicate slides for seamless marquee --}}
            @foreach($testimonials as $testimonial)
                <div class="flex-shrink-0 w-96">
                    <div class="bg-gray-950 border border-gray-700 shadow-lg rounded-lg p-8 h-80 flex flex-col justify-between">
                        <div class="flex flex-col flex-grow items-center text-center">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="rounded-full w-20 h-20 mb-4 shadow-md border border-gray-700">
                            <p class="text-gray-300 mb-4 flex-grow">{{ $testimonial['testimony'] }}</p>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-gray-100">{{ $testimonial['name'] }}</h3>
                            <span class="text-gray-400">{{ $testimonial['position'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
