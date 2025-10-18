<section class="bg-white py-20 md:py-32">
    <div class="w-11/12 md:w-9/12 mx-auto">
        <!-- Heading -->
        <div class="">
            <h1 class="font-text tracking-widest text-sm md:text-xl font-bold mb-3 md:mb-6 uppercase">
                Our Services
            </h1>
            <h1 class="font-title tracking-wide text-2xl md:text-4xl font-bold   leading-snug">
                Expert Digital Solutions to Elevate Your Brand
            </h1>
        </div>

        <!-- Features Grid -->
        <div class="w-full mt-10 md:mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    ['icon' => '🖌️', 'title' => 'Graphic Design', 'desc' => 'We craft stunning visuals and brand identities that leave a lasting impression.'],
                    ['icon' => '📱', 'title' => 'Web & Mobile Design', 'desc' => 'Responsive and modern interfaces designed for seamless user experiences.'],
                    ['icon' => '📈', 'title' => 'Social Media Marketing', 'desc' => 'Boost your brand visibility with tailored digital marketing strategies and gain experiences.'],
                    ['icon' => '💻', 'title' => 'Web Development', 'desc' => 'Custom websites built with clean code, modern tech, and responsive design for your business.'],
                    ['icon' => '📊', 'title' => 'SEO & Analytics', 'desc' => 'Enhance your online presence and track results with our advanced SEO and analytics services.'],
                    ['icon' => '🎨', 'title' => 'Brand Strategy', 'desc' => 'We develop brand strategies that define your identity, voice, and audience connection.'],
                ];
            @endphp

            @foreach($services as $service)
            <div class="bg-gray-950 text-white rounded-xl shadow-lg p-8 flex flex-col justify-between transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:bg-gray-800">
                <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                <h3 class="font-title text-xl font-bold mb-2">{{ $service['title'] }}</h3>
                <p class="text-gray-300 text-sm md:text-base mb-4">{{ $service['desc'] }}</p>
                <div>
 <a href="{{ url('/services') }}" class="inline-block bg-white text-gray-900 px-4 py-2 rounded-md font-semibold hover:bg-gray-200 transition-all duration-300">
                    View Details
                </a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
