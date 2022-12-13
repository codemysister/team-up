@extends('user.layout.layout')

@section('content')




<div class="md:flex font-poppins">
    
    <div class=" bg-[#FFF5EC] p-4 rounded-2xl w-[700px] mx-10 mt-5 shadow-xl">
        
        <div class="mb-4 border-b border-gray-200  text-lg">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-lg dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile Team</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Requirement</button>
                </li>
                
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Member</button>
                </li>
                
                @if ($tim->status == 'closed')
                <li role="presentation" class="">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Schedule</button>
                </li>
                @endif
                
                
                @if (Auth::user()->hasRole('member') && $isMember == null)
                <li role="presentation" class="ml-auto">
                    <button data-modal-toggle="modalApply" type="submit" class="inline-block p-4 w-full float-right bg-[#26ff12] rounded-full text-white shadow">Apply</button>
                </li>
                @endif
            </ul>
        </div>
        <div id="myTabContent">
            <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
                <div class="flex gap-x-2">
                    <h1 class="text-[#313131] text-lg font-semibold" id="team_name">{{$tim->name}}</h1>
                    <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  " type="button" data-modal-toggle="modalTitle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        
                    </button>
                    
                    <div id="modalTitle"  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                
                                
                                <div class="">
                                    <div class="flex justify-end px-1 pt-4">
                                        
                                        <!-- Dropdown menu -->
                                        <button id="btn-modal-name" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="modalTitle">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span> 
                                        </button>
                                    </div>
                                    <div class="flex flex-col items-center pb-10">
                                        
                                        
                                        <div class="w-full px-5">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Name</label>
                                            <input type="text" id="name" name="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required value="{{$tim->name}}">
                                        </div>
                                        <button type="butotn" onclick="updateName()" class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                        
                                    </div>
                                </div>              
                            </div>
                        </div>
                    </div>
                </div>
                
                <p class="text-[#7D7777] text-sm font-normal mb-8">Created by  : {{$owner->name}}</p>
                
                <div class="flex gap-x-2">
                    <h1 class="text-[#313131] text-lg font-semibold ">Description :</h1>
                    <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg" type="button" data-modal-toggle="modalDescription">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        
                    </button>
                    
                    <div id="modalDescription"  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <div class="">
                                    <div class="flex justify-end px-1 pt-4">
                                        
                                        <!-- Dropdown menu -->
                                        <button type="button" id='btn-modal-desc' class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="modalDescription">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span> 
                                        </button>
                                    </div>
                                    <div class="flex flex-col items-center pb-10">
                                        
                                        
                                        
                                        
                                        <div class="w-full px-4">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your team here...">{{$tim->description}}</textarea>
                                            
                                        </div>
                                        <button type="submit" class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="updateDesc()">Update</button>
                                        
                                    </div>
                                </div>              
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-sm leading-7 font-poppins text-[#7D7777] dark:text-gray-400" id="description_team"> {{$tim->description}}</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="flex gap-x-2">
                    <h1 class="text-[#313131] text-lg font-semibold">Requirement :</h1>
                    <button class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalAddRequirement">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                    </button>
                </div>
                
                {{-- Modal Add Requirement --}}
                <div id="modalAddRequirement" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" id="btn-modal-requirement" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalAddRequirement">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Requirement</h3>
                                
                                
                                <div class="" id="requirement">
                                    <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                                        <div class="basis-1/4 relative">
                                            <input type="text" name="requirement[0][role]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                                        </div>
                                        <div class="basis-[75%] relative">
                                            
                                            <div class="relative">
                                                
                                                <input name="requirement[0][qualification][]" id="qualification" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="qualification" required>
                                                <button type="button" onclick="tambahChild(this,0)" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                                {{-- <button type="button" onclick="tambah()">
                                                    <i class='bx bxs-plus-circle'></i>
                                                </button> --}}
                                            </div>
                                            
                                        </div>
                                        <div class="basis-1/8" >
                                            <button type="button" onclick="tambah(1)">
                                                <i class='bx bxs-plus-circle'></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <button type="buttton" onclick="addRequirement()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Modal Edit Requirement --}}
                <div id="modalEditRequirement" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" id="btn-close-modalEditRequirement" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" onclick="closeModalEditRequirement()">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only" >Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Requirement</h3>
                                
                                
                                <div class="" id="requirement">
                                    <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                                        <div class="basis-1/4 relative">
                                            <input type="text" name="requirement[0][role]" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                                        </div>
                                        <div class="basis-[75%] relative" id="parent-qualification">
                                            
                                            <div class="relative mt-8">
                                                
                                                <button type="button" onclick="tambahChild(this,0)" class="text-white  absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                                {{-- <button type="button" onclick="tambah()">
                                                    <i class='bx bxs-plus-circle'></i>
                                                </button> --}}
                                            </div>
                                            
                                        </div>
                                        <div class="basis-1/8" >
                                            <button type="button" onclick="tambah(1)">
                                                <i class='bx bxs-plus-circle'></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <button type="buttton" id="button-update-requirement" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div id="requirement-section">
                    @foreach ($requirement as $r)  
                    <div class="flex" id="qualification-header">
                        <h2 class="text-lg pt-3 text-[#313131] font-semibold">{{$r->role}}</h2>
                        <button class="relative inline-flex items-center justify-center pt-3 pr-2 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement({{$r->id}})" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                    </div>
                    
                    <ul class="list-disc ml-10">
                        @foreach($r->qualification as $q)    
                        <li class="text-[#7D7777]">{{$q->description}}</li>
                        @endforeach
                    </ul>
                    {{-- <p class="list-disc px-10">
                        
                    </p> --}}
                    @endforeach
                </div>
                
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                
                
                <div class="p-10 w-full  ">
                    <div class="flex justify-between items-center mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Member Team</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                            View all
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            
                            
                            @foreach ($member as $m)
                            
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{$m->profile_image}}" alt="Neil image">
                                    </div>
                                    <div class="flex-1 ">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{$m->name}}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            {{$m->email}}
                                        </p>
                                        
                                        
                                    </div>
                                    
                                    
                                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$m->role}}</span>
                                    
                                    
                                </div>
                            </li>
                            @endforeach
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                
                <ol class="relative border-l border-gray-200 dark:border-gray-700">                  
                    <li class="mb-10 ml-6">            
                        <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Flowbite Application UI v2.0.0 <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">Latest</span></h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 13th, 2022</time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &amp; Marketing pages.</p>
                        <a href="#" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> Download ZIP</a>
                    </li>
                    <li class="mb-10 ml-6">
                        <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Flowbite Figma v1.3.0</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 7th, 2021</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                    </li>
                    <li class="ml-6">
                        <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.2</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2nd, 2021</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
                
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    <div class="ml-6">
        
        @if ($tim->status == 'open')
        {{-- Pelamar --}}
        <h1 class="py-5 text-lg">Applicant</h1>
        
        <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
            
            @if ($pelamar->count() == 0)
            <p>You don't have any applicant</p>
            @else
            @foreach ($pelamar as $p)  
            
            <li class="pb-3 sm:pb-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="{{asset($p->profile_image)}}" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{$p->name}}
                        </p>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$p->role}} </span>
                    </div>
                    
                    
                    @if (Auth::user()->id == $tim->user_id)
                    
                    
                    <button onclick="apply(this)" data-id="{{$p->user_id}}" data-team="{{$p->team_id}}">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M0.41,13.41L6,19L7.41,17.58L1.83,12M22.24,5.58L11.66,16.17L7.5,12L6.07,13.41L11.66,19L23.66,7M18,7L16.59,5.58L10.24,11.93L11.66,13.34L18,7Z" />
                        </svg>
                    </button>
                    
                    
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M18.54 9.88L17.12 8.47L15 10.59L12.88 8.47L11.47 9.88L13.59 12L11.47 14.12L12.88 15.54L15 13.41L17.12 15.54L18.54 14.12L16.41 12M2 12C2 9.21 3.64 6.8 6 5.68V3.5C2.5 4.76 0 8.09 0 12S2.5 19.24 6 20.5V18.32C3.64 17.2 2 14.79 2 12M15 3C10.04 3 6 7.04 6 12S10.04 21 15 21 24 16.96 24 12 19.96 3 15 3M15 19C11.14 19 8 15.86 8 12S11.14 5 15 5 22 8.14 22 12 18.86 19 15 19Z" />
                    </svg>
                    
                    <div>
                        <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  " type="button" data-modal-toggle="{{$p->id}}">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                            </svg>
                            
                        </button>
                        
                        <div id="{{$p->id}}"  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow ">
                                    
                                    
                                    <div class="">
                                        <div class="flex justify-end px-1 pt-4">
                                            
                                            <!-- Dropdown menu -->
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="{{$p->id}}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span> 
                                            </button>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{$p->profile_image}}" alt="Bonnie image">
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$p->name}}</h5>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">{{$p->role}}</span>
                                            <p class="px-20 text-center pt-1">{{$p->message}}</p>
                                            <div class="flex mt-2 space-x-3 md:mt-6">
                                                <a href="{{asset('/storage/'.$p->cv)}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 active:bg-slate-100 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> Download CV</a>
                                                
                                            </div>
                                        </div>
                                    </div>              
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    @endif
                </div>
            </li>
            @endforeach
            @endif
            
            
        </ul>
        {{-- End Pelamar --}}
        @endif
        
        
        
        @if ($tim->status == 'closed')
        <h1 class="py-5 text-lg">Chat Group</h1>
        <div class="bg-slate-200  rounded-xl h-[400px]">
            
            <form action="{{url('/message')}}" method="POST">
                @csrf
                <input type="hidden" id="teamID" name="slug" value="{{$tim->id}}">
                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center py-2 px-3 bg-gray-50 rounded-lg dark:bg-gray-700">
                    <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                    <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Add emoji</span>
                    </button>
                    <textarea id="chat" name="message" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                    <button type="button" onclick="sendMessage()" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
            </form>
            
            
            
            
            
            @foreach ($conversations as $c)
            
            @if ($c->user_id != Auth::user()->id)
            <div class="flex mt-3 ml-3">
                <img class="w-8 h-8 rounded-full shadow-lg" src="{{asset($c->profile_image)}}" >
                <div class="ml-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">{{$c->name}}</span>
                    <p>{{$c->message}}</p>
                </div>
            </div>
            @else
            
            
            <div class="flex mt-3 mr-3 justify-end">
                <img class="w-8 h-8 rounded-full shadow-lg" src="{{asset($c->profile_image)}}" >
                <div class="ml-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">{{$c->name}}</span>
                    <p>{{$c->message}}</p>
                </div>
            </div>
            @endif
            
            
            
            @endforeach
        </div>
        @endif
        
        
        
        
        
    </div>
    
    
    <div id="modalApply" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalApply">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Join Team</h3>
                    <form class="space-y-3" action="{{url("/team-detail/{$tim->slug}/apply")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input type="hidden" id="teamID" name="slug" value="{{$tim->id}}">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="message" placeholder="Write your thoughts here..."></textarea>
                            
                        </div>
                        <div>
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Choose Roles</label>
                            <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                {{-- <option selected>Choose Roles</option> --}}
                                
                                @foreach ($requirement as $r)
                                <option value="{{$r->id}}">{{$r->role}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        
                        <div>
                            
                            <div class="max-w-xl">
                                <label
                                class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                <span class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <span class="font-medium text-gray-600">
                                    Drop files to Attach, or
                                    <span class="text-blue-600 underline">browse</span>
                                </span>
                            </span>
                            <input type="file" name="cv" class="hidden">
                        </label>
                    </div>
                    
                </div>
                
                
                
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply</button>
                
            </form>
        </div>
    </div>
</div>
</div>




</div>
</div>







</div>

</div>


@endsection

@push('script')

<script type="module">
    
    let e = document.getElementById('teamID').value;  
    
    Echo.channel(`team.${e}`)
    .listen('.kirim', (e) => {
        console.log(e);
    });
    
</script>

<script>
    let modalEditRequirement = new Modal(document.getElementById('modalEditRequirement'));
    let currentTeam = "{{$tim->slug}}";
    let listNameRequirement = ['0'];
    let resetStateModalRequirement = [];
    
    
    // dom modal requirement
    function removeChild(e){
        e.remove()
    }
    
    // dom modal requirement
    function tambahChild(e, id)
    {
        
        let parent = e.parentNode;
        let buyut = parent.parentNode;
        
        let relativeChild = document.createElement('div');
        relativeChild.className = "relative";
        
        let child1Relative = document.createElement('input');
        child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
        child1Relative.placeholder = 'qualification';
        child1Relative.name = `requirement[${id}][qualification][]`;
        
        
        let child2Relative = document.createElement('button');
        child2Relative.type = 'button';
        child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 button-qualification-close';
        childIconRelative = document.createElement('i')
        childIconRelative.className = 'bx bxs-minus-circle'
        child2Relative.appendChild(childIconRelative);
        child2Relative.onclick = () =>{
            removeChild(relativeChild);
        }
        
        relativeChild.appendChild(child1Relative)
        relativeChild.appendChild(child2Relative)
        
        buyut.appendChild(relativeChild);
        
    }
    
  
    function closeModalEditRequirement(){
        modalEditRequirement.hide();
    }

    function refreshRequirement()
    {
        
        axios.get(`/team-detail/${currentTeam}/requirement/fetch`)
            .then((response)=>{
                console.log(response.data.requirements);
                document.getElementById('requirement-section').innerHTML = "";
                let parentNode = document.getElementById('requirement-section');

                response.data.requirements.forEach((requirement)=>{
                    let headerRequirement = document.createElement('div');
                    headerRequirement.className = 'flex';
                    headerRequirement.innerHTML = 
                    `
                    <h2 class="text-lg pt-3 text-[#313131] font-semibold">${requirement.role}</h2>
                        <button class="relative inline-flex items-center justify-center pt-3 pr-2 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(${requirement.id})" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                    `


                    
                    let ulNode = document.createElement('ul');
                    ulNode.className = 'list-disc ml-10';
                    
                    requirement.qualification.forEach((qualification)=>{
                        let listNode = document.createElement('li');
                        listNode.className = 'text-[#7D7777]';
                        listNode.innerText = qualification.value;
                        ulNode.appendChild(listNode);
                    })
                    parentNode.appendChild(headerRequirement);
                    parentNode.appendChild(ulNode);
                })
                
                
            })
        }
        
        
    
  
    // fetch data requirement ke modal edit
    function fetchRequirement(requirement)
    {
    
      
        modalEditRequirement.show();
        
        
        axios.get(`/team-detail/${currentTeam}/requirement/fetch?id=${requirement}`)
        .then((response)=>{
            
            
            let requirements = {
                'role': response.data.requirement.role,
                'qualification': [
                
                ]
            }
            
            
            document.getElementById('role').value = response.data.requirement.role;
            let parentQualification = document.getElementById('parent-qualification');
            parentQualification.innerHTML = "";
            
            let relativeChild = document.createElement('div');
            relativeChild.className = "relative";
            
            let child1Relative = document.createElement('button');
            child1Relative.type = 'button';
            child1Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
            childIconRelative = document.createElement('i')
            childIconRelative.className = 'bx bxs-plus-circle'
            child1Relative.appendChild(childIconRelative);
            child1Relative.onclick = (id) =>{
                tambahChild(child1Relative, count);
            }
            
            relativeChild.appendChild(child1Relative);
            parentQualification.appendChild(relativeChild);
            
            Object.values(response.data.qualifications).forEach(val => {
                
              
                
                let relativeChild = document.createElement('div');
                relativeChild.className = "relative";
                
                let child1Relative = document.createElement('input');
                child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
                child1Relative.placeholder = 'qualification';
                child1Relative.name = `requirement[0][qualification][]`;
                child1Relative.value = val.description;
                child1Relative.setAttribute('data-id', val.id);
                
                let child2Relative = document.createElement('button');
                child2Relative.type = 'button';
                child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 button-qualification-close';
                childIconRelative = document.createElement('i')
                childIconRelative.className = 'bx bxs-minus-circle'
                child2Relative.appendChild(childIconRelative);
                child2Relative.onclick = () =>{
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, Delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            
                            // axios.delete(`/team-detail/${currentTeam}/qualification?id=${val.id}`);
                            
                            removeChild(relativeChild);
                            
                            Swal.fire(
                            'Deleted!',
                            'Qualification has been deleted.',
                            'success'
                            )
                            
                            
                            
                        }
                    })
                    
                }
                
                relativeChild.appendChild(child1Relative)
                relativeChild.appendChild(child2Relative)
                
                parentQualification.appendChild(relativeChild);
            });
            
          
            
            document.getElementById('button-update-requirement').onclick = () =>{
                
                let nodeListQualification = document.querySelectorAll(`input[name="requirement[0][qualification][]`);
                nodeListQualification = Array.prototype.slice.call(
                nodeListQualification
                );
                nodeListQualification.shift();
                nodeListQualification.forEach((e)=>{
                    
                    if(e.dataset.id == null){
                        let objQualification = {
                            id:null,
                            value:e.value
                        }

                        requirements.qualification.push(objQualification);
                    }else{
                        let objQualification = {
                            id: e.dataset.id,
                            value:e.value
                        }

                        requirements.qualification.push(objQualification);
                        
                    }

                })

                
                axios.put(`/team-detail/${currentTeam}/requirement/fetch?id=${requirement}`, {requirements});

                Swal.fire(
                            'Updated!',
                            'Qualification has been updated.',
                            'success'
                            )
                refreshRequirement();
                targetEl = document.getElementById('btn-close-modalEditRequirement');
                targetEl.click();
            }
            
            
        })
    }
    
    function updateRequirement()
    {
        axios.put(`/team-detail/${currentTeam}/requirement/fetch?id=${requirement}`);
    }
    
    // tambah requirement
    function addRequirement()
    {
        let requirements = [] 
        listNameRequirement.forEach((role)=>{
            let requirement = {
                'role': null,
                'qualification': []
            }
            
            let requirement_role = document.querySelector(`input[name="requirement[${role}][role]"]`).value;
            requirement.role = requirement_role;
            
            let nodeListQualification = document.querySelectorAll(`input[name="requirement[${role}][qualification][]`);
            
            nodeListQualification.forEach((qualification)=>{
                requirement.qualification.push(qualification.value);
            })
            
            requirements.push(requirement);
            
        })
        
        Swal.fire(
        'Success',
        'Requirement has been created.',
        'success'
        )
        document.querySelector('input[name="requirement[0][role]"]').value = '';
        document.querySelector('input[name="requirement[0][qualification][]"]').value = '';
        if(document.querySelector('.button-qualification-close')){
            document.querySelector('.button-qualification-close').click()
        }
        if(document.querySelector('.button-requirement-close')){
            document.querySelector('.button-requirement-close').click();
        }
        listNameRequirement = [];
        listNameRequirement.push('0');
        axios.post(`/team-detail/${currentTeam}/requirement`,{requirements,currentTeam})
        .then(function (response) {
            
        let targetEl = document.getElementById('btn-modal-requirement');
        refreshRequirement(targetEl)
        })
        
    }
    
    
    let count = 0;
    
    function tambah(){
        
        
        let id = ++count;
        let el = document.getElementById('requirement');
        listNameRequirement.push(id);
        
        let parent = document.createElement('div');
        parent.className = 'flex justify-between gap-x-2 flex-row items-center mb-3';
        parent.id = 'requirement-'+id;
        
        let parentInput1 = document.createElement('div');
        parentInput1.className = 'basis-1/4';
        let child1 = document.createElement('input');
        child1.name = `requirement[${id}][role]`;
        child1.className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white';
        child1.placeholder = 'role...'
        parentInput1.appendChild(child1)
        
        
        let parentInput2 = document.createElement('div');
        parentInput2.className = 'basis-[75%]';
        
        let relativeChild = document.createElement('div');
        relativeChild.className = "relative";
        
        let child1Relative = document.createElement('input');
        child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
        child1Relative.placeholder = 'qualification';
        child1Relative.name = `requirement[${id}][qualification][]`;
        
        let child2Relative = document.createElement('button');
        child2Relative.type = 'button';
        child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
        childIconRelative = document.createElement('i')
        childIconRelative.className = 'bx bxs-plus-circle'
        child2Relative.appendChild(childIconRelative);
        child2Relative.onclick = (id) =>{
            tambahChild(child2Relative, count);
        }
        
        relativeChild.appendChild(child1Relative)
        relativeChild.appendChild(child2Relative)
        
        
        
        parentInput2.appendChild(relativeChild);
        
        let parentInput3 = document.createElement('div');
        parentInput3.className = 'basis-1/8';
        let button = document.createElement('button');
        button.className = 'button-requirement-close';
        button.type = 'button';
        let icon = document.createElement('i');
        icon.className='bx bxs-minus-circle';
        button.appendChild(icon);
        button.onclick = () => {
            remove(button);
        }
        parentInput3.appendChild(button);
        
        parent.appendChild(parentInput1)
        parent.appendChild(parentInput2)
        parent.appendChild(parentInput3)
        
        
        el.appendChild(parent)
    }
    
    
    
    function remove(e) {
        let parent1 = e.parentNode;
        parent1.parentNode.remove();
    }
    
    function apply(pelamar)
    {
        // console.log(pelamar.dataset.id);
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.post(`/team-detail/acc`, {
                    user_id: pelamar.dataset.id,
                    team_id: pelamar.dataset.team
                })
                .then(function (response) {
                    window.location.href = response.data.link;
                })
                
                Swal.fire(
                'Accepted!',
                'Applicant has been accepted.',
                'success'
                )
            }
        })
        
    }
    //  axios.post(`/team-list/${tim}`)
    //     .then((res)=>{
        //         console.log(res.data);
        //     })
        
        
        
        function updateDesc()
        {
            Swal.fire(
            'Success!',
            'Description has been updated.',
            'success'
            )
            axios.put(`/team-detail/${currentTeam}/profile/change-description`, {
                description: document.getElementById('description').value,
                // _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }).then(function (response) {
                axios.get(`/team-detail/${currentTeam}/fetch`)
                .then((response)=>{
                    let description = document.getElementById('description_team').innerText = response.data.tim.description;
                })
                let targetEl = document.getElementById('btn-modal-desc');
                targetEl.click();
                
                
            })
        }
        
        function updateName()
        {
            Swal.fire(
            'Success!',
            'Team Name has been updated.',
            'success'
            )
            axios.put(`/team-detail/${currentTeam}/profile/change-name`, {
                team_name: document.getElementById('name').value,
                // _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }).then(function (response) {
                axios.get(`/team-detail/${currentTeam}/fetch`)
                .then((response)=>{
                    let name = document.getElementById('team_name').innerText = response.data.tim.name;
                })
                let targetEl = document.getElementById('btn-modal-name');
                targetEl.click();
                
                
            })
        }
    </script>
    
    
    @endpush