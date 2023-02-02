<nav class="flex items-center justify-between px-10 bg-white py-6 border-b">
  
  
  <!-- drawer init and toggle -->
  <div class="text-center md:hidden">
    <button class="text-black  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-body-scrolling" data-drawer-show="drawer-body-scrolling" data-drawer-body-scrolling="true" aria-controls="drawer-body-scrolling">
      <svg aria-hidden="true" class=" text-black w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  
  <!-- drawer component -->
  <div id="drawer-body-scrolling" class="fixed md:hidden z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800 transition-transform left-0 top-0 -translate-x-full" tabindex="-1" aria-labelledby="drawer-body-scrolling-label" aria-hidden="true">
    <h5 id="drawer-body-scrolling-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
    <button type="button" data-drawer-dismiss="drawer-body-scrolling" aria-controls="drawer-body-scrolling" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close menu</span>
    </button>
    <div class="  py-4 overflow-y-auto">
      <ul class="mx-auto">
        <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="font-semibold"> <a href="{{url('/')}}">Home</a> </span>
      </li>
      <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="font-semibold active:text-[#EC5252]"><a href="{{url('/team-list')}}">All Team</a></span>
    </li>
    <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path d="M12 14l9-5-9-5-9 5 9 5z" />
      <path
      d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
    </svg>
    <span class="font-semibold"><a href="{{url('/my-team')}}">My Team</a></span>
    </li>
    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
    <span class="font-semibold"><a href="{{url('/profile')}}">Profile</a></span>
  </li>
  <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
    stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
  </svg>
  <span class="font-semibold"><a href="{{url('/setting')}}">Setting</a></span>
</li>
<form action="{{url('logout')}}" method="POST">
  @csrf
  <button type="submit" class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Logout</button>
</form>
</ul>
</div>
</div>


@if (Request::path() == 'team-list') 
<form class="flex items-center" action="{{url('/team-list')}}">   
  <label for="simple-search" class="sr-only">Search</label>
  <div class="relative w-full">
    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
    </div>
   

 
   <input type="text" id="simple-search" name="searchKeyword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5       " placeholder="Search Team" required>
  </div> 
  <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    <span class="sr-only">Search</span>
  </button>
  
</form>


<div class="flex items-center space-x-4 ">
  
  <button id="btnNotification" onclick="{{$notificationStatus != 0 ? 'updateStatusNotif()' : ''}}" data-dropdown-toggle="dropdownNotification" class="hidden sm:block inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button"> 
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
    @if ($notificationStatus != 0)  
    <div class="relative flex" id="red_dot">
      <div class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900"></div>
    </div>
    @endif
  </button>
  <!-- Dropdown menu -->
  <div id="dropdownNotification"  class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="btnNotification">
    <div class="block px-4 py-2 font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-white">
      Notifications
    </div>
    <div id='notification_area' class="divide-y divide-gray-100 dark:divide-gray-700">
      
      @foreach ($notifications as $notif)
      
      <a href="{{$notif->link}}" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
        
        <div class="w-full pl-3">
          <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">{!! $notif->message !!}</div>
          <div class="text-xs text-blue-600 dark:text-blue-500">{{Carbon\Carbon::create($notif->created_at)->diffForHumans()}}</div>
        </div>
      </a>
      @endforeach
      
    </div>
    <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
      <div class="inline-flex items-center ">
        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
        View all
      </div>
    </a>
  </div>
  
  
  @if (Auth::user()->avatar != null) 
  <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('storage/'.Auth::user()->avatar) }} " alt="User dropdown">
  @else
  <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ Auth::user()->profile_image}} " alt="User dropdown">
  @endif 
  
  
  <!-- Dropdown menu -->
  <div id="userDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
      <div>
        @if (Auth::user()->name != null)
        {{Auth::user()->name}}
        @endif
      </div>
      <div class="font-medium truncate">{{Auth::user()->email}}</div>
      
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
      <li>
        <a href="/profile" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
      </li>
     
    </ul>
    {{-- <div class="py-1">
      <a href="" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
    </div> --}}
  </div>
</div>
@else

<form class="flex items-center" action="{{url('/team-list')}}">   
  
  
</form>

@isset($owner->id)
@if ($owner->id == Auth::user()->id)
<div class="inline-block sm:hidden rounded-t-lg text-sm text-gray-500">
  <label class="inline-flex relative items-center mr-5  cursor-pointer">
      <input type="checkbox" value="{{$tim->status}}" onclick="updateStatusTim()" class="sr-only peer" 
      {{ $tim->status == 'open' ? 'checked' : ''}} >
      <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
      <span id="status-tim" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{$tim->status}}</span>
  </label>
</div>
@endif
@endisset


<div class="flex items-center space-x-4">
  
  
  <button id="btnNotification" onclick="{{$notificationStatus != 0 ? 'updateStatusNotif()' : ''}}" data-dropdown-toggle="dropdownNotification" class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button"> 
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
    @if ($notificationStatus != 0)  
    <div class="relative flex" id="red_dot">
      <div class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900"></div>
    </div>
    @endif
  </button>
  <!-- Dropdown menu -->
  <div id="dropdownNotification"  class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="btnNotification">
    <div class="block px-4 py-2 font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-white">
      Notifications
    </div>
    <div id='notification_area' class="divide-y divide-gray-100 dark:divide-gray-700">
      
      @foreach ($notifications as $notif)
      
      <a href="{{$notif->link}}" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
        
        <div class="w-full pl-3">
          <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">{!! $notif->message !!}</div>
          <div class="text-xs text-blue-600 dark:text-blue-500">{{Carbon\Carbon::create($notif->created_at)->diffForHumans()}}</div>
        </div>
      </a>
      @endforeach
      
    </div>
    <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
      <div class="inline-flex items-center ">
        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
        View all
      </div>
    </a>
  </div>
  
  
  @if (Auth::user()->avatar != null) 
  <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('storage/'.Auth::user()->avatar) }} " alt="User dropdown">
  @else
  <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ Auth::user()->profile_image}} " alt="User dropdown">
  @endif 
  
  
  <!-- Dropdown menu -->
  <div id="userDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
      <div>
        @if (Auth::user()->name != null)
        {{Auth::user()->name}}
        @endif
      </div>
      <div class="font-medium truncate">{{Auth::user()->email}}</div>
      
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
      <li>
        <a href="/profile" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
      </li>
     
    </ul>
    {{-- <div class="py-1">
      <a href="" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
    </div> --}}
  </div>
</div>
@endif


</nav>

@push('notif')
<script>
  function updateStatusNotif(){
    axios.put(`/notification`)
    .then((response)=>{
      
      let dot = document.getElementById('red_dot');
      dot.className = "hidden";
     
    });
  }
</script>

<script type="module">
  
  
 
  let notificationArea = document.getElementById('notification_area');
  
  // let e = document.getElementById('teamID').value;  
  Echo.private('notification.'+{{auth()->user()->id}}).listen('NotificationSend',(data)=>{
    
    let notificationNode = document.createElement('a');
    notificationNode.className = "flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700";
    notificationNode.href = data.notification.link;
    notificationNode.innerHTML  = `
    <div class="w-full pl-3">
      <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">${data.notification.message}</div>
      <div class="text-xs text-blue-600 dark:text-blue-500">${data.dibuat}</div>
    </div>`;
    
    let dot = document.getElementById('btnNotification');
    dot.innerHTML = `<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
    
    <div class="relative flex" id="red_dot">
      <div class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900"></div>
    </div>
    `
    dot.onclick = ()=>{
      updateStatusNotif()
    }
    notificationArea.prepend(notificationNode);
  })
  
  
</script>
@endpush