<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  
{{-- navbar --}}
<nav class="bg-[#FFF5EC] font-poppins px-3 sm:px-4  py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-[#F2994A] hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 md:bg-[#FFF5EC]  rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block  py-2 pr-4 pl-3 lg:text-base text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

{{-- Home --}}
<section id="home" class="">
  <div class="bg-[#FFF5EC] sm:bg-stone-700  md:bg-slate-200 lg:bg-orange-300 overflow-x-hidden sm:flex sm:relative sm:overflow-y-hidden">
    <div>
      <h1 class="px-3 sm:px-6  pt-24 sm:pt-28 w-80 sm:w-[60%]   text-4xl sm:text-[40px] font-bold font-poppins">Find the job of 
        your <span class="text-orange-400">Dreams</span> </h1>
        <p class="px-3 sm:px-6 sm:pt-2 pt-1 text-sm font-poppins text-justify w-full sm:w-80 ">Find You New Job Today! New Job Postings Everyday just for you, browse the job you want and apply wherever you want</p>
  
        <h5 class="px-3 sm:px-6 pt-4 text-xl font-poppins font-bold">Trending Jobs keyword :</h5>
  
        <h5 class="text-[#F2994A] font-poppins font-bold px-3 sm:px-6 pt-1 "> <span class="pr-2">Web Designer UI/UX</span>   <span class="pr-2" >Designer </span> <span class=""> Frontend</span> </h5>
  
        <img src="{{asset('img/test.png')}}" width="350px" class="mx-auto sm:hidden" alt="">
  
        <form class="pt-1 mx-2 sm:px4 mb-2 sm:mb-4 sm:z-10">   
          <div class="relative ">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5  dark:text-gray-400 text-[#F2994A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>  
              </div>
              {{-- <div class="flex absolute inset-y-0 left-0 items-center pl-[220px] pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5  dark:text-gray-400 text-[#F2994A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div> --}}
              <div class="flex">
                <input type="search" id="search" class="rounded-full rounded-tr-none rounded-br-none font-poppins  block p-4 pl-10 w-full text-sm font-light text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Job title or keyword" required="">
  
                <input type="search" id="search" class="sm:z-10 rounded-full rounded-tl-none rounded-bl-none  font-poppins  block p-4 pl-4 w-full text-sm font-light text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Indonesia" required="">
        
              
              <button type="submit" class="text-white sm:z-10 absolute right-2.5  bottom-2.5 bg-[#F2994A] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
              </div>  
          </div>
        </form>

    </div>

    <div class="">
      <img src="{{asset('img/heroimg.png')}}" width="300px" class="hidden sm:block absolute -right-2 top-9 " alt="">
    </div>
      
  </div>

  
</section>


{{-- carousel companies --}}
<section>
  <div class="pt-10  ">
    <h5 class=" px-20 text-center font-light font-poppins">Join Most Well Known <span class="text-[#F2994A] ">Companies</span>  Around The World</h5>
  </div>
  

  
<div id="animation-carousel " class="relative" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-20 mb-10 bg-white overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
       <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <img src="{{asset('img/slack.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
      <!-- Item 2 -->
      <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <img src="{{asset('img/microsoft.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
      <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
        <img src="{{asset('img/amz1.png')}}" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <i class='bx bx-chevrons-left'></i>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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

<div class="sm:flex sm:flex-wrap sm:justify-center  sm:mx-3  ">
  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[260px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-12 sm:pt-8">
      <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
      Communication
    </h3>
      
    </div>
  </div>

  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[260px] h-[160px] sm:h-[120px] mx-auto sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-12 sm:pt-8">
      <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
    <h3 class="text-[21px] font-bold font-poppins pl-5  sm:text-[18px]   ">Marketing &
      Communication
    </h3>
      
    </div>
  </div>


  <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[260px] h-[160px] sm:h-[120px] mx-auto sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-12 sm:pt-8">
      <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
    <h3 class="text-[21px] font-bold font-poppins pl-5  sm:text-[18px]   ">Marketing &
      Communication
    </h3>
      
    </div>
  </div>

  


  

  

  {{-- <div class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] h-[160px] mx-auto sm:mx-4 mb-9 ">
    <div class="flex justify-items-center pt-12">
      <img src="{{asset('img/marketing.png')}}" class="pl-8 " alt="">
    <h3 class="text-[21px] font-bold font-poppins pl-5    ">Marketing &
      Communication
    </h3>
      
    </div>
  </div> --}}

</div>
  </div>
</section>


{{-- fiture 1 --}}
<section id="create-profile">
  <div class=" bg-[#FFF5EC]">
    <div class="sm:flex ">
      <div class="">
        <img src="{{asset('img/profile.png')}}"  class="mx-auto sm:hidden " alt="">

        <img src="{{asset('img/profile.png')}}" width="450px"  class="hidden sm:block " alt="">
      </div>

      <div class="sm:w-96 sm:-ml-20 sm:mt-10">
        <h5 class="px-4 font-poppins text-[#F2994A] text-xl sm:text-lg">Create Profile</h5>
    <h3 class="px-4 text-2xl sm:text-xl font-poppins font-bold">Build Your Personal  
      Account Profile</h3>
      <p class="px-4 text-justify sm:text-left text-base font-poppins">Create an account for the job information you want, get daily notifications and you can easily apply directly to the company you want and create an account now for free</p>

      <button type="button" class="text-white mx-4 mt-2 bg-[#F2994A] hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Account</button>
      </div>
    </div>
  </div>
</section>

{{-- fitur 2 --}}

<section id="uploadcv">
  <div class="bg-[#FFF5EC] ">
    <div class="flex">
      <div>
        

        <img src="{{asset('img/uploadcv.png')}}" class="sm:hidden" alt="">

        <h5 class="px-4 sm:px-6 font-poppins text-[#F2994A] text-xl sm:text-lg">How It Works</h5>
    <h3 class="px-4 sm:px-6 text-2xl sm:text-xl font-poppins  font-bold">Easy Step To Find and
      Apply Your Dream Job</h3>
      <p class="px-4 sm:px-6 text-justify sm:text-left text-base font-poppins">We will help you to find your dream job easily, let us
        help you manage everything you need</p>

      <div class="mx-4 sm:hidden sm:pt-40 max-width-[320px] max-h-96 bg-white shadow-xl  rounded-xl">
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">Easy to uload Your Best CV and Portofolio</h5>
        <p class="px-4 pb-3">You can upload your resume, CV, and portofolio directly to Jobbb</p>
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">You Will Be Notified With All Updates</h5>
        <p class="px-4 pb-3">Get notified about new job vacancies. scheduled
          interview and job application</p>
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">Apply for your dream job from the best company</h5>
        <p class="px-4 pb-3">We will provide recommendations for your choice companies from all over the world</p>
      </div>

      {{-- <div class="mx-4  max-width-[320px] mt-4 max-h-96 bg-white shadow-xl  rounded-xl">
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">Easy to uload Your Best CV and Portofolio</h5>
        <p class="px-4 pb-3">You can upload your resume, CV, and portofolio directly to Jobbb</p>

      </div>

      <div class="mx-4  max-width-[320px] mt-4 max-h-96 bg-white shadow-xl  rounded-xl">
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">Easy to uload Your Best CV and Portofolio</h5>
        <p class="px-4 pb-3">You can upload your resume, CV, and portofolio directly to Jobbb</p>

      </div>

      <div class="mx-4  max-width-[320px] mt-4 max-h-96 bg-white shadow-xl  rounded-xl">
        <h5 class="text-lg px-4 pt-3 text-[#F2994A] font-semibold font-poppins">Easy to uload Your Best CV and Portofolio</h5>
        <p class="px-4 pb-3">You can upload your resume, CV, and portofolio directly to Jobbb</p>

      </div> --}}

      </div>

      <div>
        <img src="{{asset('img/uploadcv.png')}}" class="hidden sm:block" alt="">
      </div>
      
    

    </div>

    
  </div>

</section>


{{-- <section>

  <div class="bg-[#F2994A] max-width-[320px] h-32 mt-20 mx-4 mb-60 rounded-xl relative">
    <img src="{{asset('img/entypo_bell.png')}}" width="300px" class="absolute" alt="">
    <h1 class="text-white text-center font-poppins font-semibold text-xl">Never Want to Miss
      Any Job News?</h1>
      <form>   
        <label for="search" class="mx-auto text-sm font-medium  text-gray-900 sr-only ">Your Email</label>
        <div class="relative ">
            <input type="search" id="search" class="block p-4 ml-20 w-60 pl-5  text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            <button type="submit" class="text-white absolute right-24 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
  </div>

</section> --}}


{{-- footer --}}
<footer class="footer p-10 bg-base-200 text-base-content">
  <div>
    
  </div>
  <div>
    <span class="footer-title">Services</span> 
    <a class="link link-hover">Branding</a> 
    <a class="link link-hover">Design</a> 
    <a class="link link-hover">Marketing</a> 
    <a class="link link-hover">Advertisement</a>
  </div> 
  <div class="hidden">
    <span class="footer-title">Company</span> 
    <a class="link link-hover">About us</a> 
    <a class="link link-hover">Contact</a> 
    <a class="link link-hover">Jobs</a> 
    <a class="link link-hover">Press kit</a>
  </div> 
  <div class="hidden">
    <span class="footer-title">Legal</span> 
    <a class="link link-hover">Terms of use</a> 
    <a class="link link-hover">Privacy policy</a> 
    <a class="link link-hover">Cookie policy</a>
  </div> 
  <div>
    <span class="footer-title">Newsletter</span> 
    <div class="form-control w-80">
      <label class="label">
        <span class="label-text">Enter your email address</span>
      </label> 
      <div class="relative">
        <input type="text" placeholder="username@site.com" class="input input-bordered w-full pr-16" /> 
        <button class="btn btn-primary absolute top-0 right-0 rounded-l-none">Subscribe</button>
      </div>
    </div>
  </div>
</footer>








  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>