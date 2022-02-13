<x-header>

    <!-- component -->
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Create Your Account</h1>

      <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="mb-2 flex gap-2">
          <div class="w-6/12">
            <label class="block text-gray-700">First Name</label>
            <input type="text" name="fname" id="fname" placeholder="Enter First Name"
              class="w-full px-4 py-3 rounded-lg bg-gray-200  border focus:border-blue-500 focus:bg-white focus:outline-none"
              :value="old('fname')" autofocus autocomplete required>
          </div>
          <div class="5/12">
            <label class="block text-gray-700">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name"
              class="w-full px-4 py-3 rounded-lg bg-gray-200 border focus:border-blue-500 focus:bg-white focus:outline-none"
              :value="old('lname')" autocomplete required>
          </div>
         
        </div>
        <div class="mb-2">
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200  border focus:border-blue-500 focus:bg-white focus:outline-none" :value="old('email')"  autofocus autocomplete required>
        </div>

        <div class="mb-2">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200  border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>
        <div>
          <label class="block text-gray-700">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200  border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-2">
          <input type="checkbox" name="remember" id="remember">
          Remember Me
        </div>

        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-3">Register</button>
      </form>

      

      <p class="mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Login here</a></p>


    </div>
  </div>

</section>

</x-header> 