<div>
    <x-header>
        <section class="w-full overflow-hidden h-screen">
            <x-navbar/>
            <div class="w-full h-full bg-[url('/img/bg.jpeg')] bg-no-repeat bg-cover bg-center bg-fixed">
                <div class="bg-black bg-opacity-60 w-full h-full text-white flex justify-center items-center">
                    <div class="">
                        <h1 class="text-7xl my-4">Halftime Car Rental.</h1>
                        <div class="text-center text-2xl">Rent <span class="text-red-400 font-semibold">Twice</span> for <span class="text-red-400 font-semibold">Three Days</span> and get one day <span class="text-red-400 font-semibold">FREE.</span></div>
                        <div class="text-center text-xl">Preferred Members - Limited time offer.</div>
                        <div class="text-center text-xl mt-5">
                           <a href="{{ url('/vehicles') }}"> <button class="bg-red-600 px-3 py-2 rounded-full mx-2 w-3/12 font-semibold hover:bg-red-800">Learn More</button></a>
                           <a href="#explore"> <button class="bg-white px-3 py-2 rounded-full mx-2 text-red-600 hover:bg-gray-200 w-3/12 font-semibold">Explore</button></a>
                        </div>

                    </div>                    
                </div>
            </div>
        </section>

    </x-header>
        <section id="explore" class="text-gray-600 body-font bg-gray-200">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Services We Offer</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
            </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-5 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
                </div>
                <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Car Rental</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a class="mt-3 text-red-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-5 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
                </div>
                <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Island-wide Tour</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a class="mt-3 text-red-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-5 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                </div>
                <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Car Sales</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a class="mt-3 text-red-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>



        <section class="text-gray-600 body-font">
            <div class="container px-5 pb-20 mx-auto">
                <div class="text-center mt-20 mb-9">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Most Rented Vehicles</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
            </div>
            </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="img/car2.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Suzuki Swift Dzire</h2>
                    <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a class="text-red-500 inline-flex items-center mt-3">Reserve Now
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="img/car3.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Suzuki Grand Vitara</h2>
                    <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a class="text-red-500 inline-flex items-center mt-3">Reserve Now
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="img/car1.jpg">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Suzuki Grand Vitara SR</h2>
                    <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                    <a class="text-red-500 inline-flex items-center mt-3">Reserve Now
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                </div>
            </div>
        </section>


        <section class="w-full h-4/6 bg-[url('/img/bg4.jpeg')] bg-no-repeat bg-cover bg-center bg-fixed">
                <div class="bg-black bg-opacity-60 w-full h-full text-white flex justify-center items-center">
                    <div class="">
                        <h1 class="text-5xl my-5">We pledge to keep you safe.</h1>
                        <div class="text-center text-xl">We are taking cleanliness and desinfection to a <br> whole new level.</div>
                    </div>                    
                </div>
            </section>
    

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Testimonial</h1>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
            </div>
            </div>
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
      </svg>
      <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
      <span class="inline-block h-1 w-10 rounded bg-red-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
      <p class="text-gray-500">Senior Product Designer</p>
    </div>
  </div>
</section>

    <x-footer/>
</div>