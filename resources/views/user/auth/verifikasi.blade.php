<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-[#FFF5EC]">

    
    <div class="container mx-auto -mt-16 sm:-mt-28   md:text-2xl  lg:text-2xl">
        
        <img class="w-full h-full md:w-[600px] md:mx-auto lg:w-[600px] lg:-mt-20 lg:mx-auto" src="{{asset('img/email-verification.png')}}">

        <h1 class="font-bold font-poppins text-center text-[#F2994A] p-3 -mt-10">We have sent a verification email to <span class="text-slate-900 font-poppins font-bold text">deva@gmail.com</span>, please check your email and complete the verification process to proceed to the next step
        </h1>
    </div>
    {{-- <div class=" bg-black shadow shadow-pink-700 rounded w-full sm:mx-auto md:w-[300] md:h-[300] md:bg-red-600">
        
        
    </div> --}}
  
</body>
</html>