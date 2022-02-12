<div>
    <x-header>
    <x-navbar/>
        <div class="h-screen w-full">
            <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0 ">
                <div class="mt-20 flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-2/3 bg-white sm:mx-0" style="height: 500px">
                    <div class="hidden md:block md:w-1/2 rounded-l-lg"
                        style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;">
                    </div>

                    <div class="flex flex-col w-full md:w-1/2 p-4">
                        <div class="flex flex-col flex-1 justify-center mb-8">
                            <h1 class="text-4xl text-center font-bold">Contact Us</h1>
                            <div class="w-full mt-4">
                                <form class="form-horizontal w-3/4 mx-auto" method="POST" action="#">
                                    <div class="flex gap-2 mt-4">
                                        <input id="email" type="text" class="w-3/6 h-10 px-2 border rounded border-grey-400"
                                            name="email" value="" placeholder="Full Name">
                                        <input id="email" type="text" class="w-3/6 h-10 px-2 border rounded border-grey-400" name="email" value=""
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="flex flex-col mt-4">
                                        <input id="password" type="email"
                                            class="flex-grow h-10 px-2 rounded border border-grey-400" name="password" required
                                            placeholder="Email">
                                    </div>

                                    <div class="flex flex-col mt-4">
                                        <textarea class="appearance-none rounded w-full border border-gray-200 p-2 h-40 focus:outline-none focus:border-gray-500" 
                                        placeholder="Message" name="message"></textarea>                                         
                                    </div>
                                    
                                    <div class="flex flex-col mt-8">
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                            Send
                                        </button>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <x-footer/>
    </x-header>
</div>