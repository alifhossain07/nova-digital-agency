<div class="relative"
     style="
        background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('{{ asset('images/heroImg.webp') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
        background-attachment: fixed;
     ">

    <!-- Overlay handled by gradient above -->

    <!-- Centered Content -->
    <div class="relative w-11/12 md:w-9/12 mx-auto h-[650px] flex flex-col justify-center items-center text-center text-white">
        <h1 class="font-title text-4xl md:text-6xl font-bold mb-4">
           Talk to Our Creative Team Today
        </h1>
        <p class="text-gray-300 text-sm md:text-base">
            <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a> / Contact
        </p>
    </div>
</div>
