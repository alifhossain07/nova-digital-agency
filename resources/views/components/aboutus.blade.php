<section class="bg-gray-100 py-20">
    <div class="w-9/12 mx-auto flex flex-col md:flex-row items-center md:space-x-12">

        <!-- Image Collage -->
        <div class="md:w-1/2 mb-10 md:mb-0 flex justify-center">
            <div class="flex space-x-4">
                <!-- Left single centered image -->
                <div class="flex items-center">
                    <img src="{{ asset('images/about2.webp') }}" alt="About Image 1"
                         class="rounded-xl shadow-lg w-40 md:w-96 h-auto object-cover">
                </div>

                <!-- Right two stacked images -->
                <div class="flex flex-col space-y-4">
                    <img src="{{ asset('images/about1.webp') }}" alt="About Image 2"
                         class="rounded-xl shadow-lg w-40 md:w-60 h-72 object-cover">
                    <img src="{{ asset('images/about3.webp') }}" alt="About Image 3"
                         class="rounded-xl shadow-lg w-40 md:w-60 h-60 object-cover">
                </div>
            </div>
        </div>

        <!-- Text Content -->
        <div class="md:w-1/2 space-y-6 text-center md:text-left">
            <p class="font-bold font-text text-md tracking-widest uppercase">About Us</p>
            <h2 class="font-title text-4xl font-bold text-gray-900">
                We Are More Than Just a <br> Digital Agency
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
