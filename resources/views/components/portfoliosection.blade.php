<section class="bg-gray-100 py-10 md:py-20">
    <div class="w-10/12 md:w-9/12 mt-16 mx-auto flex flex-col md:flex-row items-start md:space-x-12">

        <!-- Left Side: Text Content -->
        <div class="md:w-1/2 space-y-6 text-center md:text-left mb-10 md:mb-0">
            <p class="font-bold font-text text-md tracking-widest uppercase text-gray-500">Our Work</p>
            <h2 class="font-title text-2xl md:text-4xl font-bold text-gray-900">
                Explore Our Creative <br> Portfolio
            </h2>
            <p class="font-text text-gray-700 text-base md:text-lg leading-relaxed">
                Take a look at some of our recent projects that showcase our passion for design, technology, and innovation. Each project reflects our dedication to crafting meaningful digital experiences.
            </p>
            <p class="font-text text-gray-700 text-base md:text-lg leading-relaxed">
                From web design to brand strategy, our portfolio highlights diverse work that helps our clients grow and thrive in the digital landscape.
            </p>
            <a href="{{ url('/portfolio') }}"
               class="inline-block bg-gray-900 text-white px-3 py-2 md:px-6 md:py-3 rounded-md text-sm font-semibold font-text hover:bg-gray-700 transition-all duration-300">
                View All Projects
            </a>
        </div>

        <!-- Right Side: Portfolio Cards Grid -->
        <div class="md:w-1/2 w-full">
            @php
                $projects = [
                  ['img' => 'images/beamHero.webp', 'title' => 'BeamLOL', 'desc' => 'An Online Gaming Page', 'url' => 'https://beamlol.club'],
                  ['img' => 'images/trendyHero.webp', 'title' => 'TrendyBoutique', 'desc' => 'A Fullstack E-Commerce Store', 'url' => url('projects/trendy-boutique')],
                  ['img' => 'images/digitalHero.webp', 'title' => 'Digital Insights', 'desc' => 'A Tech Blogging Website', 'url' => url('projects/digital-insights')],
                  ['img' => 'images/starlightHero.webp', 'title' => 'Starlight Artistry', 'desc' => 'Art & Craft Store', 'url' => url('projects/starlight-artistry')],
                ];
                $leftCol  = [$projects[0], $projects[2]];
                $rightCol = [$projects[1], $projects[3]];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Left Column -->
                <div class="space-y-4 md:transform md:-translate-y-6">
                    @foreach ($leftCol as $p)
                        <div class="w-full h-60 md:h-[280px] relative overflow-hidden group cursor-pointer rounded-md grayscale hover:grayscale-0 transition-all duration-700">
                            <!-- Image -->
                            <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">

                            <!-- Gradient overlay -->
                            <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black/85 via-black/40 to-transparent z-10"></div>

                            <!-- Sliding content panel -->
                            <div class="absolute left-0 right-0 bottom-0 z-20 px-4 pb-4 pt-4
                                        translate-y-[50%] group-hover:translate-y-0
                                        transition-transform duration-500 ease-out">
                                <div class="max-w-[85%] text-left">
                                    <h3 class="text-base sm:text-[1.1rem] font-bold text-white">{{ $p['title'] }}</h3>
                                    <p class="mt-2 text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        {{ $p['desc'] }}
                                    </p>
                                    <a href="{{ $p['url'] }}"
                                       class="inline-block mt-3 bg-gray-900 text-white px-4 py-1 rounded-md text-[0.9rem] border border-gray-700
                                              opacity-0 group-hover:opacity-100
                                              hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        View Project
                                    </a>
                                </div>
                            </div>

                            <!-- Hover overlay -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-gradient-to-b from-transparent to-black/40"></div>
                        </div>
                    @endforeach
                </div>

                <!-- Right Column -->
                <div class="space-y-4 md:transform md:translate-y-6">
                    @foreach ($rightCol as $p)
                        <div class="w-full h-60 md:h-[280px] relative overflow-hidden group cursor-pointer rounded-md grayscale hover:grayscale-0 transition-all duration-700">
                            <!-- Image -->
                            <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">

                            <!-- Gradient overlay -->
                            <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black/85 via-black/40 to-transparent z-10"></div>

                            <!-- Sliding content panel -->
                            <div class="absolute left-0 right-0 bottom-0 z-20 px-4 pb-4 pt-4
                                        translate-y-[50%] group-hover:translate-y-0
                                        transition-transform duration-500 ease-out">
                                <div class="max-w-[85%] text-left">
                                    <h3 class="text-base sm:text-[1.1rem] font-bold text-white">{{ $p['title'] }}</h3>
                                    <p class="mt-2 text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        {{ $p['desc'] }}
                                    </p>
                                    <a href="{{ $p['url'] }}"
                                       class="inline-block mt-3 bg-gray-900 text-white px-4 py-1 rounded-md text-[0.9rem] border border-gray-700
                                              opacity-0 group-hover:opacity-100
                                              hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        View Project
                                    </a>
                                </div>
                            </div>

                            <!-- Hover overlay -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-gradient-to-b from-transparent to-black/40"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
