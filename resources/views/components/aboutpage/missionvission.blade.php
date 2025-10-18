<section>
    {{-- First Div: Mission --}}
    <div class="bg-black text-white">
        <div class="w-11/12 md:w-full mx-auto flex flex-col md:flex-row min-h-[400px] md:min-h-[350px]">
            {{-- Left: Text --}}
            <div class="md:w-1/2 flex flex-col justify-center px-4 md:px-12 py-8 md:py-0 space-y-6 text-center md:text-left z-10 relative">
                <div class="w-full md:w-8/12 mx-auto ">
                    <h2 class="font-title text-2xl md:text-3xl tracking-wider font-bold">Our Mission</h2>
                    <p class="text-gray-300 text-lg md:text-xl font-text mt-4 leading-relaxed">
                        Our mission is to empower businesses through innovative digital solutions. We combine creativity, strategy, and technology to deliver impactful experiences.
                    </p>
                </div>
            </div>

            {{-- Right: Full-height Image --}}
            <div class="md:w-1/2 relative h-64 md:h-auto mt-6 md:mt-0">
                <img src="{{ asset('images/about3.webp') }}" alt="Our Mission"
                     class="absolute inset-0 w-full h-full object-cover rounded-lg md:rounded-none">
            </div>
        </div>
    </div>

    {{-- Second Div: Vision --}}
    <div class="bg-white text-gray-900">
        <div class="w-11/12 md:w-full mx-auto flex flex-col md:flex-row min-h-[400px] md:min-h-[350px]">
            {{-- Left: Full-height Image --}}
            <div class="md:w-1/2 relative h-64 md:h-auto order-1 md:order-1 mb-6 md:mb-0">
                <img src="{{ asset('images/about2.webp') }}" alt="Our Vision"
                     class="absolute inset-0 w-full h-full object-cover rounded-lg md:rounded-none">
            </div>

            {{-- Right: Text --}}
            <div class="md:w-1/2 flex flex-col justify-center px-4 md:px-12 py-8 md:py-0 space-y-6 text-center md:text-right order-2 md:order-2 z-10 relative">
                <div class="w-full md:w-10/12 mx-auto md:mx-0">
                    <h2 class="font-title text-2xl md:text-3xl font-bold">Our Vision</h2>
                    <p class="text-gray-700 font-text text-lg md:text-xl leading-relaxed mt-4">
                        Our vision is to be a leading digital agency known for creating meaningful and innovative solutions. We aim to help brands connect with their audience and thrive in a rapidly evolving digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
