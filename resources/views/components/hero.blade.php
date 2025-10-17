<div class="relative"
     style="
        background-image:linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('{{ asset('images/heroImg.webp') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
     ">

    <!-- Semi-transparent overlay -->


    <!-- Content -->
    <div class="relative w-9/12 mx-auto text-white flex flex-col md:flex-row items-center justify-between z-10">
        <div class="space-y-10 py-56 mt-24 text-center md:text-left max-w-xl">
            <h1 class="font-title text-5xl md:text-6xl font-bold leading-tight">
                We Build Brands That Stand Out
            </h1>
            <p class="font-text text-gray-200 text-lg md:text-xl">
                A Creative Digital Agency Delivering Design, Development, and Marketing Solutions.
            </p>
            <a href="{{ url('/services') }}"
               class="inline-block bg-white text-black px-6 py-3 rounded-md text-sm font-semibold font-text hover:bg-gray-200 transition-all duration-300">
                Explore Our Services
            </a>
        </div>
    </div>
</div>
