@php
$teamMembers = [
    [
        'name' => 'Alif Hossain',
        'role' => 'Founder & CEO',
        'img' => 'https://i.ibb.co/wNPtP5L1/2.png',
        'bio' => 'Drives the vision and growth of the company with innovation and leadership.'
    ],
    [
        'name' => 'Jarin Tusnim Roja',
        'role' => 'Head of Operations',
        'img' => 'https://i.ibb.co/VWWXfS44/3.png',
        'bio' => 'Optimizes daily operations to ensure smooth and efficient workflows.'
    ],
    [
        'name' => 'Ashraful Alam',
        'role' => 'Head of Marketing',
        'img' => 'https://i.ibb.co/GvxVSxjM/3.png',
        'bio' => 'Crafts and leads impactful marketing strategies to grow the brand.'
    ],
    [
        'name' => 'Tafhim Ovi',
        'role' => 'Logistics Manager',
        'img' => 'https://i.ibb.co/hxJ9wGcT/4.png',
        'bio' => 'Manages logistics to ensure timely and efficient delivery operations.'
    ],
];
@endphp

<section class="py-16 px-6 lg:px-24 bg-black">
    <div  data-aos="fade-down" class="text-center">
    <h1 class="font-text text-white tracking-widest text-sm md:text-xl font-bold mb-3 md:mb-6 uppercase">
        Our Team
    </h1>
    <h1 class="font-title  text-white tracking-wide text-2xl md:text-3xl font-bold md:w-6/12 mx-auto leading-snug">
        Meet the Creative Minds Behind Our Digital Agency
    </h1>
</div>


    <div data-aos="fade-up" class="flex flex-col md:flex-row  justify-between mt-10 w-10/12 mx-auto gap-5">
        @foreach($teamMembers as $member)
            <div class="bg-gray-950  shadow-lg p-8 w-72  border border-gray-800 hover:scale-105 transition-transform duration-300">
                {{-- Profile Image --}}
                <div class="w-20 h-20  mb-4 rounded-full overflow-hidden border-4 border-gray-700 hover:border-gray-500 transition-all duration-300">
                    <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="object-cover w-full h-full">
                </div>

                {{-- Name --}}
                <h3 class="text-xl font-bold text-white mb-1">{{ $member['name'] }}</h3>

                {{-- Role --}}
                <p class="text-gray-400 font-semibold mb-2">{{ $member['role'] }}</p>

                {{-- Bio --}}
                <p class="text-gray-300 text-sm leading-relaxed">{{ $member['bio'] }}</p>
            </div>
        @endforeach
    </div>
</section>
