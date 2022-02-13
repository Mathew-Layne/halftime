<div>
    <x-header>
        <section class="w-full overflow-hidden h-4/6">
            <x-navbar/>
            <div class="w-full h-full bg-[url('/img/car6.jpeg')] bg-no-repeat bg-cover bg-bottom bg-fixed">
                <div class="bg-black bg-opacity-60 w-full h-full text-white flex justify-center items-center">
                    <div class="">
                        <h1 class="text-7xl my-4">Reservation</h1>
                    </div>                    
                </div>
            </div>
        </section>

        <div class="w-full h-screen">
            <div class="text-center mt-20 mb-9">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Reserve Your Vehicle Today.</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic
                    four dollar toast vegan taxidermy.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
                </div>
            </div>

            <div class="m-auto flex justify-center items-center w-8/12 h-3/6 mt-12 bg-black bg-opacity-10">
                <form class="mt-3" action="">
                    @csrf

                    <div class="">
                        <label class="block text-lg font-semibold" for="vehicle">Vehicles</label>
                        <input class="w-full" type="text" name="vehicle" placeholder="Select Vehicle">
                    </div>
                    <div class="flex my-3">
                        <div>
                            <label class="block font-semibold text-lg" for="pickup">Pickup Location</label>
                            <input type="text" name="pickup" id="pickup" placeholder="Select Pickup Lacation">
                        </div>
                        <div>
                            <label class="block font-semibold text-lg" for="pickup">Pickup Date</label>
                            <input type="date" name="pickup_date" id="pickup_date" placeholder="Select Pickup Lacation">
                        </div>
                        <div>
                            <label class="block font-semibold text-lg" for="pickup">Pickup Time</label>
                            <input type="time" name="pickup_time" id="pickup_time" placeholder="Select Pickup Lacation">
                        </div>                        
                    </div>
                    <div class="flex my-3">
                        <div>
                            <label class="block font-semibold text-lg" for="pickup">Dropoff Location</label>
                            <input type="text" name="dropoff" id="dropoff" placeholder="Select Dropoff Lacation">
                        </div>
                        <div>
                            <label class="block font-semibold text-lg" for="dropoff">Dropoff Date</label>
                            <input type="date" name="dropoff_date" id="dropoff_date" placeholder="Select dropoff Lacation">
                        </div>
                        <div>
                            <label class="block font-semibold text-lg" for="dropoff">Dropoff Time</label>
                            <input type="time" name="dropoff_time" id="dropoff_time" placeholder="Select dropoff Lacation">
                        </div>
                    </div>
                    <input class="bg-red-600 text-white px-5 py-2" type="submit" value="Reserve">
                </form>
            </div>

        </div>
            
        <x-footer/>
    </x-header>
</div>