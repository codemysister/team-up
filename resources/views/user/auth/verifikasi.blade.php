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

        <h1 class="font-poppins text-lg text-center -mt-16 mb-2 font-bold">Confirm your email address</h1>

        <h1 class="text-gray-500 font-bold font-poppins text-center w-full px-4 mx-auto -mt-13 text-lg">We have sent a verification email to <span class="text-gray-600 font-poppins font-bold text">deva@gmail.com</span>, please check your email and complete the verification process to proceed to the next step
        </h1>

        

    </div>
    {{-- <div class=" bg-black shadow shadow-pink-700 rounded w-full sm:mx-auto md:w-[300] md:h-[300] md:bg-red-600">
        
        
    </div> --}}
  
</body>
</html>