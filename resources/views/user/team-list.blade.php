<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  @vite('resources/css/app.css')
</head>
<body>

  <div class="flex bg-white">
    <div class="md:flex w-2/5 md:w-1/4 h-screen bg-white border-r hidden">
      <div class="mx-auto py-10">
        <h1 class="text-2xl font-bold mb-10 cursor-pointer text-orange-500 duration-150">TeamUp</h1>
        <ul>
          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="font-semibold"> <a href="{{url('/')}}">Home</a> </span>
          </li>
          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="font-semibold">All Team</span>
          </li>
          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
            <span class="font-semibold">My Team</span>
          </li>
          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="font-semibold">Profile</span>
          </li>
          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <span class="font-semibold">Setting</span>
          </li>
          <button class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Logout</button>
        </ul>
      </div>
    </div>
    <main class="min-h-screen w-full bg-white border-l">
      <nav class="flex items-center justify-between px-10 bg-white py-6 border-b">
        <form class="flex items-center">   
          <label for="simple-search" class="sr-only">Search</label>
          <div class="relative w-full">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              </div>
              <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5       " placeholder="Search Team" required>
          </div>
          <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              <span class="sr-only">Search</span>
          </button>
      </form>
      <div class="flex items-center space-x-4">
        <img class="w-10 h-10 rounded-full" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
        <div class="font-medium dark:text-white">
            <div>Jese Leos</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
        </div>
    </div>
      </nav>
      <div class="mx-6">
        <h1 class="my-6 text-3xl">Team List</h1>
        <div class="md:flex  space-y-3 md:space-y-0 md:space-x-4 mt-6">
          <div class="h-90 bg-gradient-to-r rounded-md from-indigo-600 to-purple-600 p-10">
            <p class="text-3xl font-thin text-indigo-50 cursor-pointer">How to do Basic Jumping and how to
              landing safely</p>
            <div class="flex items-center mt-4 space-x-4">
              <img class="w-10 h-10 rounded-full cursor-pointer" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
              <div>
                <h3 class="text-indigo-50 font-semibold cursor-pointer">Thomas Hope</h3>
                <p class="text-indigo-50 text-sm font-thin">53K views • 2 weeks ago</p>
              </div>
            </div>
          </div>
          <div class="h-90 bg-gradient-to-r rounded-md from-indigo-600 to-purple-600 p-10">
            <p class="text-3xl font-thin text-indigo-50 cursor-pointer">How to do Basic Jumping and how to
              landing safely</p>
            <div class="flex items-center mt-4 space-x-4">
              <img class="w-10 h-10 rounded-full cursor-pointer" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
              <div>
                <h3 class="text-indigo-50 font-semibold cursor-pointer">Thomas Hope</h3>
                <p class="text-indigo-50 text-sm font-thin">53K views • 2 weeks ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-6 grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4 mt-10">
        <div class="shadow-lg rounded-t-md overflow-hidden ">
          <div class="">
            <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
            <div class="p-2 relative">
              <p class="text-lg mt-6 font-semibold">Web Developer</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, maiores!</p>
              <div class="flex -space-x-4">
                
                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                <a class="flex justify-center  items-center w-10 h-10 text-xs font-medium text-white bg-gray-700 rounded-full border-2 border-white hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>

                <div class="pl-7">
                  <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply</button>
                </div>
            </div>
              
              
              <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
        </div>
            </div>
          </div>
          <div class="shadow-lg rounded-t-md overflow-hidden">
            <div class="">
              <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
              <div class="p-2 relative">
                <p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
                <p>53K views • 2 weeks ago</p>
                <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
        </div>
              </div>
            </div>
            <div class="shadow-lg rounded-t-md overflow-hidden ">
              <div class="">
                <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
                <div class="p-2 relative">
                  <p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
                  <p>53K views • 2 weeks ago</p>
                  <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
        </div>
                </div>
              </div>
              <div class="shadow-lg rounded-t-md overflow-hidden ">
                <div class="">
                  <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
                  <div class="p-2 relative">
                    <p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly
                    </p>
                    <p>53K views • 2 weeks ago</p>
                    <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="text-center py-6 mt-4">
              Copyright &copy; 2022 TeamUp - All Rights Reserved 
            </footer>
            </main>
  </div>


   
  
</body>
</html>