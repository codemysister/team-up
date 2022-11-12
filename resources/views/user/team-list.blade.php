@extends('user.layout.layout')

@section('content')
<div class="mx-6">
  <h1 class="my-6 text-3xl ">Team List</h1>
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

    <div class="mx-6 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-4 mt-10">
      <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
          <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
          <div class="p-2 relative">
            <p class="text-lg mt-6 font-semibold">Web Developer</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, maiores!</p>
            <div class="flex -space-x-4 justify-between mt-1">
              <div>
              </div>
              <div class="">
                <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{url('/team-detail')}}">Detail</a></button>
              </div>
            </div>
            
            
            <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
          </div>
        </div>
      </div>
      <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
          <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
          <div class="p-2 relative">
            <p class="text-lg mt-6 font-semibold">Web Developer</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, maiores!</p>
            <div class="flex -space-x-4 justify-between mt-1">
              <div>
              </div>
              <div class="">
                <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{url('/team-detail')}}">Detail</a></button>
              </div>
            </div>
            
            
            <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
          </div>
        </div>
      </div>
      <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
          <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
          <div class="p-2 relative">
            <p class="text-lg mt-6 font-semibold">Web Developer</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, maiores!</p>
            <div class="flex -space-x-4 justify-between mt-1">
              <div>
              </div>
              <div class="">
                <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{url('/team-detail')}}">Detail</a></button>
              </div>
            </div>
            
            
            <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
          </div>
        </div>
      </div>
      <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
          <img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
          <div class="p-2 relative">
            <p class="text-lg mt-6 font-semibold">Web Developer</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, maiores!</p>
            <div class="flex -space-x-4 justify-between mt-1">
              <div>
              </div>
              <div class="">
                <a href=""></a>
                <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{url('/team-detail')}}">Detail</a></button>
              </div>
            </div>
            
            
            <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
          </div>
        </div>
      </div>




     
      
      
     
    </div>
  </div>


  @endsection
  
  
  
  
  
  
  
  