<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-[#FFF5EC]">

    
    <div class="container mx-auto -mt-16 sm:-mt-28   md:text-2xl  lg:text-2xl">
        
        <img class="w-full h-full mt-[20%] sm:mt-0 md:w-[600px] md:mx-auto lg:w-[600px] lg:-mt-20 lg:mx-auto" src="{{asset('img/email-verification.png')}}">

        <h1 class="font-poppins text-3xl px-5 text-center -mt-16 mb-2 font-bold md:text-5xl">Confirm your email </h1>

        <h1 class="font-base font-poppins  text-center px-6 mx-auto -mt-13 text-xl md:text-2xl">We have sent a verification email to <span class="text-gray-600 font-poppins font-bold text">deva@gmail.com</span>, please check your email and complete the verification process to proceed to the next step
        </h1>
{{-- 
        <div class="flex mt-20 w-full justify-center">
          <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#FFF5EC] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Resend Email
            </span>
          </button>

        </div>
         --}}

        

    </div>
    {{-- <div class=" bg-black shadow shadow-pink-700 rounded w-full sm:mx-auto md:w-[300] md:h-[300] md:bg-red-600">
        
        
    </div> --}}
  
</body>
</html>