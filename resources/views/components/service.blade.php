<section class="bg-black text-white py-16 md:py-32">
    <div class="w-11/12 md:w-9/12 mx-auto">
        <!-- Heading -->
        <div class="text-center">
            <h1 class="font-text tracking-widest text-sm md:text-xl font-bold mb-3 md:mb-6 uppercase">
                Our Services
            </h1>
            <h1 class="font-title tracking-wide text-2xl md:text-4xl font-bold md:w-7/12 mx-auto leading-snug">
                Your Vision, Perfectly Executed Through Our Expertise
            </h1>
        </div>

        <!-- Features Grid -->
        <div class="w-full mt-10 md:mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 md:gap-0 items-stretch">
            <!-- Left Column -->
            <div class="relative flex flex-col justify-center p-8 md:p-10 overflow-hidden min-h-[250px] md:h-auto">
                <!-- Background image -->
                <div
                    class="absolute inset-0"
                    style="background-image: url('{{ asset('images/servicebg.webp') }}');
                           background-size: cover;
                           background-position: center;
                           filter: blur(3px);
                           opacity: 0.7;">
                </div>

                <!-- Dark overlay -->
                <div class="absolute inset-0 bg-black/30"></div>

                <!-- Content -->
                <div class="relative z-10 text-white">
                    <h2 class="font-title mb-6 md:mb-10 text-2xl md:text-3xl font-bold leading-tight">
                        Best Of <br class="hidden md:block"> Our Features
                    </h2>
                    <a href="{{ url('/services') }}"
                       class="border border-gray-500 text-white px-4 py-2 md:px-5 md:py-2 mt-4 rounded-md w-fit hover:bg-white hover:text-black transition-all duration-300 text-sm md:text-base">
                        See All Services
                    </a>
                </div>
            </div>

            <!-- Service Cards -->
            @php
                $services = [
                    ['icon' => '🖌️', 'title' => 'Graphic Design', 'desc' => 'We craft stunning visuals and brand identities that leave a lasting impression.'],
                    ['icon' => '📱', 'title' => 'Web & Mobile Design', 'desc' => 'Responsive and modern interfaces designed for seamless user experiences.'],
                    ['icon' => '📈', 'title' => 'Social Media Marketing', 'desc' => 'Boost your brand visibility with tailored digital marketing strategies.'],
                ];
            @endphp

            @foreach($services as $service)
                <div
                    class="bg-[#141619] flex flex-col space-y-4 justify-center items-center text-center p-8 md:p-10 h-full hover:bg-[#1C1F23] transition-all duration-300">
                    <div class="text-green-400 text-3xl md:text-4xl">{{ $service['icon'] }}</div>
                    <h3 class="font-title text-lg md:text-xl font-semibold">{{ $service['title'] }}</h3>
                    <p class="font-text text-gray-400 text-sm md:text-base leading-relaxed">
                        {{ $service['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
