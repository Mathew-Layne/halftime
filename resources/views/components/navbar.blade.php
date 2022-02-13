<div>
    <header class="text-white bg-red-600 body-font fixed w-full">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="{{ url('/') }}" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">                
                <span class="ml-3 text-xl">Half Time Rentals</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Home</a>
                <a href="{{ url('/vehicles') }}" class="mr-5 hover:text-gray-900">Vehicles</a>
                <a href="{{ url('/reservation') }}" class="mr-5 hover:text-gray-900">Reservation</a>
                <a href="{{ url('/about') }}" class="mr-5 hover:text-gray-900">About Us</a>
                <a href="{{ url('/contact') }}" class="mr-5 hover:text-gray-900">Contact Us</a>
            </nav>
            <a href="{{ url('/register') }}"><button
                class="inline-flex items-center border border-white py-1 px-3 focus:outline-none hover:bg-white hover:text-red-600 rounded text-base mt-4 md:mt-0">Register                
            </button></a>
        </div>
    </header>
</div>