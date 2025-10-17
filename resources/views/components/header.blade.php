<header id="main-header" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-500">
    <div class="w-10/12 mx-auto flex justify-between items-center py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img class="h-16 md:h-20 w-auto" src="{{ asset('images/novaLogo1.webp') }}" alt="Company Logo">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-10">
            <ul class="flex space-x-16 font-text text-gray-300">
                <li>
                    <a href="{{ url('/') }}" class="relative group">
                        <span class="text-white transition-all duration-300 group-hover:text-gray-300">Home</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="relative group">
                        <span class="text-white transition-all duration-300 group-hover:text-gray-300">About</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/services') }}" class="relative group">
                        <span class="text-white transition-all duration-300 group-hover:text-gray-300">Services</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="relative group">
                        <span class="text-white transition-all duration-300 group-hover:text-gray-300">Contact</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>

            <!-- Login Button -->
            <a href="{{ url('/login') }}"
               class="text-white ml-6 border border-gray-500 px-5 py-2 rounded-md text-sm font-text hover:bg-white hover:text-black transition-all duration-300">
                Login
            </a>
        </nav>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/90">
        <ul class="flex flex-col space-y-4 text-center py-6 font-text text-white">
            <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-gray-300">About</a></li>
            <li><a href="{{ url('/services') }}" class="hover:text-gray-300">Services</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-gray-300">Contact</a></li>
            <li>
                <a href="{{ url('/login') }}"
                   class="inline-block border border-gray-500 px-5 py-2 rounded-md hover:bg-white hover:text-black transition-all duration-300">
                    Login
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- JS for mobile toggle -->
<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
