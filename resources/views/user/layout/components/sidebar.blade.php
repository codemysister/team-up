
    <div class="md:flex hidden md:w-1/4 h-screen bg-white border-r ">
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
        <div id="navbar-default" class="mx-auto py-10 hidden md:block">
          <h1 class="text-2xl font-bold mb-10 cursor-pointer text-orange-500 duration-150">TeamUp</h1>
          <ul>
            <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              <span class="font-semibold"> <a href="{{url('/')}}">Home</a> </span>
            </li>
            <li class="flex {{ Request::path() == 'team-list' ? 'text-[#EC5252]' : '' }} space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span class="font-semibold active:text-[#EC5252]"><a href="{{url('/team-list')}}">All Team</a></span>
            </li>
            <li class="flex {{ Request::path() == 'my-team' ? 'text-[#EC5252]' : '' }} space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
              </svg>
              <span class="font-semibold"><a href="{{url('/my-team')}}">My  Team</span>
            </li>
      
            <li class="flex {{ Request::path() == 'profile' ? 'text-[#EC5252]' : '' }} space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <span class="font-semibold"><a href="{{url('/profile')}}">Profile</a></span>
            </li>
            <li class="flex {{ Request::path() == 'job-list' ? 'text-[#EC5252]' : '' }} space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
              <span class="font-semibold"><a href="{{url('/job-list')}}">Job List</a></span>
            </li>
            <form action="{{url('logout')}}" method="POST">
              @csrf
              <button type="submit" class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Logout</button>
          </form>
          </ul>
        </div>
      </div>

     

<!-- drawer init and toggle -->
