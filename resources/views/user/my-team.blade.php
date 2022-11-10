@extends('user.layout.layout')

@section('content')


<div class="mx-6">
    <h1 class="my-6 text-3xl  ">My Team</h1>
    
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
                <div class="flex -space-x-4">
                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                    <a class="flex justify-center items-center w-10 h-10 text-xs font-medium text-white bg-gray-700 rounded-full border-2 border-white hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>
                </div>
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
                  <div class="flex -space-x-4">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <a class="flex justify-center items-center w-10 h-10 text-xs font-medium text-white bg-gray-700 rounded-full border-2 border-white hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>
                  </div>
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
                  <div class="flex -space-x-4">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="">
                      <a class="flex justify-center items-center w-10 h-10 text-xs font-medium text-white bg-gray-700 rounded-full border-2 border-white hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>
                  </div>
                 </div>
    
                      
                  <div class="">
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