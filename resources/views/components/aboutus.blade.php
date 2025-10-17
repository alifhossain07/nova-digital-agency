<section class="bg-gray-100 py-20">
    <div class="w-9/12 mx-auto flex flex-col md:flex-row items-center md:space-x-12">
        <!-- Image / Illustration -->
        <div class="md:w-1/2 mb-10 md:mb-0">
            <img src="{{ asset('images/aboutImage.webp') }}" alt="About Us" class="rounded-xl shadow-lg w-full">
        </div>

        <!-- Text Content -->
        <div class="md:w-1/2 space-y-6 text-center md:text-left">
            <h2 class="font-title text-4xl font-bold text-gray-900">
                About Our Agency
            </h2>
            <p class="font-text text-gray-700 text-lg leading-relaxed">
                We are a creative digital agency dedicated to helping brands stand out. Our team specializes in web design, development, and marketing strategies that drive results.
            </p>
            <p class="font-text text-gray-700 text-lg leading-relaxed">
                Our mission is to deliver innovative solutions tailored to our clients’ goals, combining creativity, technology, and strategy for maximum impact.
            </p>
            <a href="{{ url('/contact') }}"
               class="inline-block bg-gray-900 text-white px-6 py-3 rounded-md text-sm font-semibold font-text hover:bg-gray-700 transition-all duration-300">
                Get in Touch
            </a>
        </div>
    </div>
</section>
