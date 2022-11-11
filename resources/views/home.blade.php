<!doctype html >
<html  class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  {{-- swiper --}}
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    {{-- boxicon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Teamup</title>
</head>
<body>
  
{{-- navbar --}}
<nav class="bg-[#FFF5EC] font-poppins px-3 sm:px-4  py-2.5  fixed w-full z-20 top-0 left-0 border-gray-200 ">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-[#F2994A] hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 "><a href="{{url('/login')}}">Login</a></button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 md:bg-[#FFF5EC]  rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  ">
      <li>
        <a href="#home" class="block  py-2 pr-4 pl-3 lg:text-base text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 " aria-current="page">Home</a>
      </li>
      <li>
        <a href="#kategori" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Categori</a>
      </li>
      <li>
        <a href="#create-profile" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Fitur</a>
      </li>
      <li>
        <a href="#service" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Service</a>
      </li>
      <li>
        <a href="{{url('/login')}}" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Team List</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

{{-- Home --}}
<section id="home" class=""> 
  <div class="bg-[#FFF5EC]  overflow-x-hidden sm:flex sm:relative sm:overflow-y-hidden">
    <div class="sm:container sm:mx-auto">
      <h1 class="px-3 sm:px-4   pt-24 sm:pt-28 xl:pt-32 sm:w-[60%]   text-4xl md:text-5xl lg:text-6xl xl:text-7xl sm:text-[40px] font-bold font-poppins text-center sm:text-left">Be a Leader or <span class="text-orange-400">Member</span> </h1>
        <p class="px-14  sm:px-4  sm:pt-2 pt-1 text-sm font-poppins text-center sm:text-left w-full sm:w-80 md:w-96 md:text-base ">Join your dream team and gain experience or invent your dream team</p>
        
        
        <h5 class="px-14 text-center sm:text-left sm:px-4  pt-4 text-xl md:text-2xl xl:text-3xl font-poppins font-bold">Trending Jobs keyword </h5>
  
        <h5 class="text-[#F2994A] font-poppins font-bold sm:text-base md:text-lg xl:text-2xl px-3 sm:px-4  pt-1 text-center sm:text-left"> <span class="pr-2">Web Designer UI/UX</span>   <span class="pr-2" >Designer </span> <span class=""> Frontend</span> </h5>
        <div class="mt-5 flex justify-center sm:justify-start sm:px-4 lg:pb-20 xl:pb-28">
          <button type="button" class="text-white  bg-orange-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center sm:text-left mr-2 mb-2 ">Getting Started</button>
        </div>
  
        <img src="{{asset('img/test.png')}}" width="350px" class="mx-auto mt-5  sm:hidden" alt="">
    </div>

    <div class="">
      <img src="{{asset('img/heroimg.png')}}" width="330px" class="hidden sm:block md:hidden absolute -right-2 top-9 " alt="">
    </div>

    <div class="">
      <img src="{{asset('img/heroimg.png')}}" width="350px" class="hidden md:block lg:hidden absolute -right-2 top-9 " alt="">
    </div>

    <div class="">
      <img src="{{asset('img/heroimg.png')}}" width="450px" class="hidden lg:block xl:hidden absolute -right-2 top-9 " alt="">
    </div>


    <div class="">
      <img src="{{asset('img/heroimg.png')}}" width="530px" class="hidden xl:block absolute -right-2 top-9 " alt="">
    </div>
      
  </div>

  
</section>


{{-- carousel companies --}}
<section id="" class="z-0">
  <div class="pt-10  ">
    <h5 class=" px-20  text-center font-light font-poppins lg:text-xl text-bold">Join Most Well Known <span class="text-[#F2994A] ">Companies</span>  Around The World</h5>
  </div>
<div id="animation-carousel " class="relative" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-20  mb-10 bg-white overflow-hidden rounded-lg ">
       <!-- Item 1 -->
       <div class="hidden duration-200 sm:mt-5  ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <div class="sm:flex sm:mx-auto">
          <div class=" ">
            <img src="{{asset('img/slack.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:hidden" alt="...">
          </div>
          <div class=" sm:mx-auto">
            <img src="{{asset('img/slack.png')}}" class="hidden sm:block   " alt="...">
          </div>
          <div class="mx-auto">
            <img src="{{asset('img/microsoft.png')}}" class="hidden sm:block" alt="...">
          </div>
          <div class="mx-auto sm:mx-0 md:mx-auto">
            <img src="{{asset('img/airbnb.png')}}" class=" hidden sm:hidden md:block" alt="...">
          </div>
        </div>
        
        
        
    </div>
      <!-- Item 2 -->
      <div class="hidden duration-200 sm:mt-5  ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <div class="sm:flex sm:mx-auto">
          <div class=" ">
            <img src="{{asset('img/slack.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:hidden" alt="...">
          </div>
          <div class=" sm:mx-auto">
            <img src="{{asset('img/slack.png')}}" class="hidden sm:block   " alt="...">
          </div>
          <div class="mx-auto">
            <img src="{{asset('img/microsoft.png')}}" class="hidden sm:block" alt="...">
          </div>
          <div class="mx-auto sm:mx-0 md:mx-auto">
            <img src="{{asset('img/google.png')}}" class=" hidden sm:hidden md:block" alt="...">
          </div>
        </div>
        
        
        
    </div>
      <!-- Item 3 -->
      <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <img src="{{asset('img/google.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
      <!-- Item 4 -->
      <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <img src="{{asset('img/airbnb.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
      <!-- Item 5 -->
      <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
          <img src="{{asset('img/logo.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 6 -->
      
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
        
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>
</section>


{{-- categori --}}
<section id="kategori" >
  <div class="bg-[#FFF5EC] pb-9">
    <h5 class="text-center font-poppins pt-10 ">Choose Categories</h5>
    <h3 class="text-center font-bold font-poppins pb-4 text-3xl text-[#F2994A]">Choose Categories</h3>

    {{-- swiper mobile --}}
    <div class="swiper mySwiper md:hidden lg:hidden">
      <div class="swiper-wrapper sm:mb-5">
        <div class="swiper-slide sm:flex  sm:justify-items-center sm:mx-[15%]">
          <div class=" text-[#F2994A] sm:mt-3  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-12 sm:pt-8">
              <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
            <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
              Communication
            </h3>
              
            </div>
          </div>
          <div class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-6 ">
              <div>
                <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                  Design
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
              </div>
            </div>
          </div>
          
        </div>

        <div class="swiper-slide sm:flex  sm:justify-items-center ">
          <div class=" text-[#F2994A] sm:mt-3  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-12 sm:pt-8">
              <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
            <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
              Communication
            </h3>
              
            </div>
          </div>
          <div class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-6 ">
              <div>
                <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                  Design
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
              </div>
            </div>
          </div>
          
        </div>

        <div class="swiper-slide sm:flex  sm:justify-items-center sm:mx-[15%]">
          <div class=" text-[#F2994A] sm:mt-3  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-12 sm:pt-8">
              <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
            <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
              Communication
            </h3>
              
            </div>
          </div>
          <div class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-6 ">
              <div>
                <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                  Design
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
              </div>
            </div>
          </div>
          
        </div>
        
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                  Design
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
              </div>
            </div>
          </div>
          
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/finance.png')}}" width="120px" class="pl-4 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Finance 
                  Management
                </h3>
                <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">230 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/web.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Web <br>
                  Development
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">100 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/pm.png')}}" width="85px" class="pl-6 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Project 
                  Management
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">87 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/bisnis.png')}}" width="100px" class="pl-4 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Business &
                  Consulting
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">23 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/grapik.png')}}" width="90px" class="pl-6 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Graphic <br>
                  Designer
                </h3>
                <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">65 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center  pt-10 sm:pt-8 ">
              <div>
                <img src="{{asset('img/video.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Video <br>
                  Editor
                </h3>
                <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination "></div>
    </div>


{{-- versi SM-MD-LG --}}
<div class=" sm:hidden md:flex sm:flex-wrap sm:justify-center hidden sm:mx-3  ">
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
      <div>
        <img src="{{asset('img/pm.png')}}" width="85px" class="pl-6 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Project 
          Management
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">87 Jobs Available</p>
      </div>
    </div>
  </div>

  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center  pt-10 sm:pt-8 md:pt-6  xl:pt-5">
      <div>
        <img src="{{asset('img/video.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Video <br>
          Editor
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
      </div>
    </div>
  </div>


  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
      <div>
        <img src="{{asset('img/finance.png')}}" width="120px" class="pl-4 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Finance 
          Management
        </h3>
        <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">230 Jobs Available</p>
      </div>
    </div>
  </div>
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
      <div>
        <img src="{{asset('img/web.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Web <br>
          Development
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">100 Jobs Available</p>
      </div>
    </div>
  </div>
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
      <div>
        <img src="{{asset('img/grapik.png')}}" width="90px" class="pl-6 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Graphic <br>
          Designer
        </h3>
        <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">65 Jobs Available</p>
      </div>
    </div>
  </div>
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
      <div>
        <img src="{{asset('img/bisnis.png')}}" width="100px" class="pl-4 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Business &
          Consulting
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">23 Jobs Available</p>
      </div>
    </div>
  </div>
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
      <div>
        <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
          Design
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
      </div>
    </div>
  </div>
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
      <div>
        <img src="{{asset('img/marketing.png')}}" width="120px" class="pl-12 sm:pl-4 " alt="">
      </div>
      <div>
        <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Marketing &
          Communication
        </h3>
        <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
      </div>
    </div>
  </div>
</div>
  </div>
</section>





{{-- fiture 1 --}}
<section id="create-profile" class="bg-[#FFF5EC] pb-10 overflow-hidden" >
  <div class=" bg-[#fcfcfc] sm:bg-[#FFF5EC] w-[360px] sm:w-full  mx-auto rounded-3xl sm:rounded-none shadow-2xl sm:shadow-none mb-10 ">
    <div class="sm:flex ">
      <div class="">
        <img src="{{asset('img/profile.png')}}"  class="mx-auto sm:hidden " alt="">
        <img src="{{asset('img/profile.png')}}" width="450px"  class="hidden sm:block lg:hidden md:ml-6 " alt="">
        <img src="{{asset('img/profile.png')}}" width="900px"  class="hidden   lg:block xl:hidden  md:ml-6 lg:ml-20 " alt="">
        <img src="{{asset('img/profile.png')}}" width="900px"  class="hidden   lg:hidden xl:block  md:ml-6 lg:ml-20 xl:ml-32 " alt="">
      </div>
      <div class="sm:w-96   sm:-ml-20 md:-ml-10 lg:pl-32 lg:w-full   sm:mt-10 xl:mt-36 ">
        <h5 class="px-4 font-poppins text-[#F2994A] text-xl sm:text-lg xl:ml-20">Create Profile</h5>
        <h3 class="px-4 text-2xl sm:text-xl md:text-3xl lg:text-4xl font-poppins font-bold lg:w-full xl:ml-20">Join Your Dream Team</h3>
        <p class="px-4 text-center lg:w-[490px] lg:text-[21] sm:text-left text-base font-poppins xl:ml-20">create your account as a member and choose your favorite team, get a project with your team, and grow with the team</p>
        <p class="px-auto hidden sm:block sm:px-4 md:px-5 font-poppins  font-light xl:ml-20"> <i class='bx bxs-badge-check' ></i>  Join team</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5 font-poppins  font-light xl:ml-20"> <i class='bx bxs-badge-check' ></i>  Find a job</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5 font-poppins  font-light xl:ml-20"> <i class='bx bxs-badge-check' ></i>  Send a message to team members via group chat</p>
        
        <button type="button" class="text-white xl:ml-20 mx-[30%] sm:mx-4  mt-2  bg-[#F2994A] hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-6 ">Create Account</button>
      </div>
    </div>
  </div>
</section>

{{-- fitur 2 --}}

<section id="uploadcv" class="bg-[#FFF5EC] pb-10 ">
  <div class="bg-[#fcfcfc] sm:sm:bg-[#FFF5EC] w-[360px] sm:w-[100%] mx-auto rounded-3xl sm:rounded-none shadow-2xl sm:shadow-none mb-10 ">
    <div class="flex sm:relative sm:container sm:mx-auto sm:overflow-hidden">
      <div class="sm:w-96 lg:w-full sm:h-auto  ">
        <img src="{{asset('img/uploadcv.png')}}" class="sm:hidden lg:hidden" alt="">

        <h5 class="px-4 sm:px-4 md:px-2 lg:px-4 xl:px-28 font-poppins text-[#F2994A] text-xl sm:text-lg ">Leader Team</h5>
        <h3 class="px-4 sm:px-4 md:px-2 lg:px-4  xl:px-28 text-2xl sm:text-xl  md:text-3xl lg:text-4xl font-poppins  font-bold md:w-full">Invent Your Dream Team</h3>
        <p class="px-4 sm:px-4 md:px-2 lg:px-4  xl:px-28 sm:w-[329px] lg:w-[500px] xl:w-[700px] text-center sm:text-left text-base font-poppins">create your account as leader and create your dream team, manage team, get project with your team and grow with team:</p>
        <p class="px-auto hidden sm:block sm:px-4 md:px-5  xl:px-28 font-poppins  font-light xl:text-lg"> <i class='bx bxs-badge-check' ></i>  Build your team</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5  xl:px-28 font-poppins  font-light xl:text-lg"> <i class='bx bxs-badge-check' ></i>  Manage team</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5  xl:px-28 font-poppins  font-light xl:text-lg"> <i class='bx bxs-badge-check' ></i>  Hire members</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5  xl:px-28 font-poppins  font-light xl:text-lg"> <i class='bx bxs-badge-check' ></i>  Find a job</p>
        <p class="px-auto  hidden sm:block sm:px-4 md:px-5  xl:px-28 font-poppins  font-light xl:text-lg"> <i class='bx bxs-badge-check' ></i>  Send a message to team members via group chat
        </p>

        
        <button type="button" class="text-white mx-[30%] sm:mx-4 md:px-2 mt-2 lg:mb-32  bg-[#F2994A] hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-6 xl:ml-28 ">Create Account</button>
      </div>
      <div class="">
        <img src="{{asset('img/uploadcv.png')}}" width="430px" class="hidden sm:block lg:hidden sm:absolute sm:-right-9  sm:-top-12" alt="">
      </div>

      <div class="">
        <img src="{{asset('img/uploadcv.png')}}" width="500px" class="hidden  lg:block xl:hidden sm:absolute sm:-right-9  sm:-top-12" alt="">
      </div>

      <div class="">
        <img src="{{asset('img/uploadcv.png')}}" width="500px" class="hidden  lg:hidden xl:block sm:absolute sm:-right-9 xl:right-24  sm:-top-12 " alt="">
      </div>
    </div>
  </div>
</section>







<div id="service" class="w-full bg-white rounded-lg border shadow-md ">
  <div class="sm:hidden">
      <label for="tabs" class="sr-only">Select tab</label>
      <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
          <option>Statistics</option>
          <option>Services</option>
          <option>FAQ</option>
      </select>
  </div>
  <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg divide-x divide-gray-200 sm:flex " id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
      <li class="w-full">
          <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block p-4 w-full bg-gray-50 rounded-tl-lg hover:bg-gray-100 focus:outline-none  text-blue-600 hover:text-blue-600  border-blue-600 ">Statistics</button>
      </li>
      <li class="w-full">
          <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block p-4 w-full bg-gray-50 hover:bg-gray-100 focus:outline-none  text-gray-500 hover:text-gray-600  border-gray-100 hover:border-gray-300 ">Services</button>
      </li>
      <li class="w-full">
          <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block p-4 w-full bg-gray-50 rounded-tr-lg hover:bg-gray-100 focus:outline-none   text-gray-500 hover:text-gray-600  border-gray-100 hover:border-gray-300 ">FAQ</button>
      </li>
  </ul>
  <div id="fullWidthTabContent" class="border-t border-gray-200 ">
      <div class="p-4 bg-white rounded-lg md:p-8 " id="stats" role="tabpanel" aria-labelledby="stats-tab">
          <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl text-gray-900 sm:grid-cols-3 xl:grid-cols-6  sm:p-8">
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                  <dd class="font-light text-gray-500 ">Developers</dd>
              </div>
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                  <dd class="font-light text-gray-500 ">Public repositories</dd>
              </div>
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                  <dd class="font-light text-gray-500 ">Open source projects</dd>
              </div>
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                  <dd class="font-light text-gray-500 ">Contributors</dd>
              </div>
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                  <dd class="font-light text-gray-500 ">Top Forbes companies</dd>
              </div>
              <div class="flex flex-col justify-center items-center">
                  <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                  <dd class="font-light text-gray-500 ">Organizations</dd>
              </div>
          </dl>
      </div>
      <div class="hidden p-4 bg-white rounded-lg md:p-8 " id="about" role="tabpanel" aria-labelledby="about-tab">
          <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 ">We invest in the world’s potential</h2>
          <!-- List -->
          <ul role="list" class="space-y-4 text-gray-500 ">
              <li class="flex space-x-2">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-4 h-4 text-blue-600 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="font-light leading-tight">Dynamic reports and dashboards</span>
              </li>
              <li class="flex space-x-2">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-4 h-4 text-blue-600 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="font-light leading-tight">Templates for everyone</span>
              </li>
              <li class="flex space-x-2">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-4 h-4 text-blue-600 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="font-light leading-tight">Development workflow</span>
              </li>
              <li class="flex space-x-2">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-4 h-4 text-blue-600 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="font-light leading-tight">Limitless business automation</span>
              </li>
          </ul>
      </div>
      <div class="hidden p-4 bg-white rounded-lg md:p-8 " id="faq" role="tabpanel" aria-labelledby="faq-tab">
          <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white  text-gray-900 " data-inactive-classes="text-gray-500 ">
              <h2 id="accordion-flush-heading-1">
                  <button type="button" class="flex justify-between items-center py-5 w-full font-medium text-left border-b border-gray-200  bg-white text-gray-900 " data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                  <span>Apa itu TeamUp</span>
                  <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
              </h2>
              <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                  <div class="py-5 font-light border-b border-gray-200 ">
                  <p class="mb-2 text-gray-500 ">
                    TeamUp adalah sebuah website yang dipergunakan untuk membentuk timfreelance, 
                    secara garis besar website ini nantinya dipergunakan untuk mencari tim freelance bagi seorang mahasiswa 
                    seseorang yang memutuhkan tim dan digunakan untuk membuat tim bagi seseorang freelance yang sedang kebanjiran job (teamleader) dan dia ingin merekrut tim, 
                    maka dia dapat membuka rekrutmen dengan berbagai ketentuan sesuai kebutuhan teamleader di website TeamUp</p>
                  <p class="text-gray-500 ">dan nantinya di website TeamUp juga akan menyediakan list pekerjaan freelance yang diambil dari API website <a href="/docs/getting-started/introduction/" class="text-blue-600  hover:underline"> freelance.com</a> </p>
                  </div>
              </div>
              <h2 id="accordion-flush-heading-2">
                  <button type="button" class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200  " data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                  <span>Is there a Figma file available?</span>
                  <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
              </h2>
              <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                  <div class="py-5 font-light border-b border-gray-200 ">
                  <p class="mb-2 text-gray-500 ">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                  <p class="text-gray-500 ">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600  hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                  </div>
              </div>
              <h2 id="accordion-flush-heading-3">
                  <button type="button" class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200  " data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
              </h2>
              <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                  <div class="py-5 font-light border-b border-gray-200 ">
                  <p class="mb-2 text-gray-500 ">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                  <p class="mb-2 text-gray-500 ">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                  <p class="mb-2 text-gray-500 ">Learn more about these technologies:</p>
                  <ul class="pl-5 list-disc text-gray-500 ">
                      <li><a href="https://flowbite.com/pro/" class="text-blue-600  hover:underline">Flowbite Pro</a></li>
                      <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600  hover:underline">Tailwind UI</a></li>
                  </ul>
                  </div>
              </div>
              </div>
      </div>
  </div>
</div>



{{-- footer --}}

<footer class="p-4 bg-white sm:p-6 ">
  <div class="md:flex md:justify-between">
      <div class="mb-6 md:mb-0">
          <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
              <span class="self-center text-2xl font-semibold whitespace-nowrap "></span>
          </a>
      </div>
      <div class="grid grid-cols-2 gap-8  sm:grid-cols-3">
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Resources</h2>
              <ul class="text-gray-600 ">
                  <li class="mb-4">
                      <a href="https://flowbite.com/" class="hover:underline">Laravel</a>
                  </li>
                  <li>
                      <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Follow us</h2>
              <ul class="text-gray-600 ">
                  <li class="mb-4">
                      <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                  </li>
                  <li>
                      <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Legal</h2>
              <ul class="text-gray-600 ">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Privacy Policy</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8">
  <div class="sm:flex sm:items-center sm:justify-between">
      <span class="text-sm text-gray-500 sm:text-center ">© 2022 <a href="https://flowbite.com/" class="hover:underline">TeamUp™</a>. All Rights Reserved.
      </span>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 ">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Instagram page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
              <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">GitHub account</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Dribbbel account</span>
          </a>
      </div>
  </div>
</footer>









  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</body>
</html>