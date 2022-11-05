<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:my-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
            <div class="w-full h-100"> 
              <img src="{{asset('img/logo.png')}}" width="" class="mr-3 mt-10 sm:h-9" alt="Flowbite Logo">
                <h1 class="text-4xl mt-3 font-bold">
                  Welcome back
                </h1>
                <p class="font-poppins">Start your website in seconds. Don’t have an account? <span class="text-blue-600">Sign up.</span> </p>
                <form action="" class="mt-6" method="post">
                    <div>
                        <label for="" class="block text-gray-700">Email Adress</label>
                        <input type="email" name="" id="email" placeholder="Enter your email address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-500 focus:bg-white focus:outline-none" autofocus autocomplete required> 
    
                    </div>
    
                    <div class="mt-4">
                      
                        <label for="" class="block text-gray-700">Password</label>
                        <input type="password" name="" id="email" placeholder="Enter your password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-500 focus:bg-white focus:outline-none" autofocus autocomplete required> 
                    </div>
    
                    
    
                    <div class="flex items-start mt-2">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                              <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300    " required>
                          </div>
                          <label for="remember" class="ml-2 text-sm font-medium text-gray-900 ">Remember me</label>
                      </div>
                      <a href="#" class="ml-auto text-sm text-blue-700 hover:underline ">Lost Password?</a>
                  </div>
    
                    <button type="submit" class="w-full block bg-purple-500 hover:bg-purple-400 focus:bg-purple-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                        Log In
                    </button>
                </form>
    
                <hr class="my-6 border-gray-300 w-full">
    
                <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" x="0px" y="0px"
                            viewBox="0 0 48 48"
                            style=" fill:#000000;"><path fill="#f5bc00" d="M43.6,20.1H42V20H24v8h11.3c-1.6,4.7-6.1,8-11.3,8c-6.6,0-12-5.4-12-12s5.4-12,12-12c3.1,0,5.8,1.2,8,3l5.7-5.7	C34,6.1,29.3,4,24,4C13,4,4,13,4,24s9,20,20,20s20-9,20-20C44,22.7,43.9,21.4,43.6,20.1z"></path><path fill="#6c19ff" d="M43.6,20.1L43.6,20.1L42,20H24v8h11.3c-0.8,2.2-2.2,4.2-4.1,5.6c0,0,0,0,0,0l6.2,5.2C37,39.2,44,34,44,24	C44,22.7,43.9,21.4,43.6,20.1z"></path><path fill="#3ddab4" d="M24,44c5.2,0,9.9-2,13.4-5.2l-6.2-5.2c-2,1.5-4.5,2.4-7.2,2.4c-5.2,0-9.6-3.3-11.3-7.9l-6.5,5	C9.5,39.6,16.2,44,24,44z"></path><path fill="#f55376" d="M6.3,14.7l6.6,4.8C14.7,15.1,19,12,24,12c3.1,0,5.8,1.2,8,3l5.7-5.7C34,6.1,29.3,4,24,4	C16.3,4,9.7,8.3,6.3,14.7z"></path><path fill="#2100c4" d="M26.6,35.7l6.8,6c1.5-0.8,2.9-1.8,4.1-2.9l-6.2-5.2C29.9,34.6,28.3,35.3,26.6,35.7z"></path><path fill="#eb0000" d="M9.2,10.6c-1.1,1.2-2.1,2.6-2.9,4.1l3.9,2.9l2.6,1.9c0.6-1.6,1.6-3,2.8-4.1L9.2,10.6z"></path>
                        </svg>
                        <span class="ml-4">Log in with Google</span>
                    </div>
                </button>
            </div>
        </div>
    
        <div class="bg-purple-600 hidden lg:block w-full md:w1/2 xl:w-2/3 h-screen">
            <img src="https://images.unsplash.com/photo-1633536726481-465c3676851d" alt="" class="w-full h-full object-cover object-center">
        </div>
    </section>


  



</body>
</html>