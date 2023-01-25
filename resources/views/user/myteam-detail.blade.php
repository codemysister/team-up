@extends('user.layout.layout')

@section('content')



<div class="md:flex font-poppins">
    
    <div class=" bg-[#FFF5EC] p-4 rounded-2xl w-full sm:w-[600px] md:w-[600px]  mx-10 mt-5 shadow-xl">
        
        <div class="mb-4 border-b border-gray-200  text-lg">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-sm dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile Team</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Requirement</button>
                </li>
                
                <li class="mr-2 " role="presentation">
                    <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Member</button>
                </li>
                
                @if ($isMember != null || $owner->id == Auth::user()->id)
                <li role="presentation" >
                    <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Task</button>
                </li>
                @endif
                
                
                @if ($tim->status == 'open' && Auth::user()->hasRole('member') && $isMember == null && $isApplicant == null)
                <li role="presentation" class="ml-auto">
                    <button data-modal-toggle="modalApply" type="submit" class="inline-block p-4 w-full float-right bg-[#26ff12] rounded-full text-white shadow">Apply</button>
                </li>
                @endif
                
                @if ($owner->id == Auth::user()->id)
                <li role="presentation" class="ml-auto ">
                    <div class="inline-block py-4 mt-1 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab">
                        <label class="inline-flex relative items-center mr-5  cursor-pointer">
                            <input type="checkbox" value="{{$tim->status}}" onclick="updateStatusTim()" class="sr-only peer" 
                            {{ $tim->status == 'open' ? 'checked' : ''}} >
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                            <span id="status-tim" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{$tim->status}}</span>
                        </label>
                    </div>
                    {{-- <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false"> --}}
                        
                        {{-- </button> --}}
                        
                    </li>
                    @endif
                </ul>
            </div>
            <div id="myTabContent">
                <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                    <div class="flex gap-x-2">
                        <h1 class="text-[#313131] text-lg font-semibold" id="team_name">{{$tim->name}}</h1>
                        @if ($owner->id == Auth::user()->id && $tim->status == 'closed')
                        <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  " type="button" data-modal-toggle="modalTitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                            
                        </button>
                        @endif
                        
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
                        @if ($owner->id == Auth::user()->id && $tim->status == 'closed')
                        <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg" type="button" data-modal-toggle="modalDescription">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                            
                        </button>
                        @endif
                        
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
                        @if ($owner->id == Auth::user()->id && $tim->status == 'closed')
                        <button class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalAddRequirement">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        </button>
                        
                        
                        @endif
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
                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][role]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                                            </div>
                                            
                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][salary]" id="requirement-salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>
                                            </div>
                                            
                                            <div class="basis-[40%] relative" id="qualification-area">
                                                
                                                <div class="relative">
                                                    
                                                    <input name="requirement[0][qualification][]" id="qualification" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="qualification" required>
                                                    <button type="button" onclick="tambahChild(this,0)" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                                    {{-- <button type="button" onclick="tambah()">
                                                        <i class='bx bxs-plus-circle'></i>
                                                    </button> --}}
                                                </div>
                                                
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
                                            <div class="basis-[30] relative">
                                                <input type="text" name="requirement[0][role]" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                                            </div>
                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][salary]" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>
                                            </div>
                                            <div class="basis-[40%] relative" id="parent-qualification">
                                                
                                                <div class="relative mt-8">
                                                    
                                                    <button type="button" onclick="tambahChild(this,0, 'edit')" class="text-white  absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                                    {{-- <button type="button" onclick="tambah()">
                                                        <i class='bx bxs-plus-circle'></i>
                                                    </button> --}}
                                                </div>
                                                
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
                            
                            @if ($owner->id == Auth::user()->id && $tim->status == 'closed')
                            <button class="relative inline-flex items-center justify-center pt-3 ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement({{$r->id}})" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                            </button>
                            
                            <button class="relative inline-flex items-center justify-center pt-3 ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement({{$r->id}})" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                            </button>
                            @endif
                            
                        </div>
                        <p class="text-xs text-[#7D7777]">Salary : {{$r->salary}}</p>
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
                            
                        </div>
                        <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                
                                
                                @foreach ($member as $m)
                                
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                           
                                            
                                            <button id="dropdownHoverButton{{$loop->index}}" data-dropdown-toggle="dropdownHover{{$loop->index}}" data-dropdown-trigger="hover" class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">
                                                <img class="w-8 h-8 rounded-full" src="{{$m->profile_image}}" alt="Neil image">
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownHover{{$loop->index}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Phone Number : {{$m->phone_number != null ? $m->phone_number : '-'}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Address : {{$m->address != null ? $m->address : '-'}}</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="flex-1 ">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                {{$m->name}}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {{$m->email}}
                                            </p>
                                            
                                            
                                        </div>
                                        
                                        
                                        <div>
                                            <p>
                                                <span class=" text-xs text-white font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color: {{$m->color}}">{{$m->role}}</span>
                                            </p>
                                            
                                            @if ($owner->user_id == Auth::user()->id)
                                            @if ( $m->user_id != $owner->user_id )
                                            <button onclick="kick({{$m->user_id}})">
                                                <span class="text-white bg-red-600 text-xs font-medium px-2.5 py-0.5 rounded" >Kick</span>
                                            </button>
                                            @endif
                                            @endif
                                            
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </li>
                                @endforeach
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg max-w-[589px] dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <div class="flex gap-x-2 mb-5">
                        <h1 class="text-[#313131] text-lg font-semibold">Task :</h1>
                        @if ($owner->id == Auth::user()->id)
                        <button onclick="fetchTask()" class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalTask">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        </button>
                        @endif
                    </div>
                    
                    <div id="modalTask" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button id="close-btn-task" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalTask">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Task</h3>
                                    
                                    <div class="mb-3">
                                        <label for="task_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Task Title</label>
                                        <input type="text" name="task_title" id="task_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Task title..." required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="task_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                                        <textarea id="task_description" name="task_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your task..."></textarea>
                                    </div>
                                    
                                    <div>
                                        <div class="flex gap-x-2">
                                            <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Select Members</label>
                                            
                                            <button onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true'); document.getElementById('members').innerHTML = ''" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalAddMember">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                                            </button>
                                        </div>
                                        
                                        <div id="modalAddMember" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                <!-- Modal content -->
                                                <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                                    <button id="btn-close-member" onclick="document.getElementById('close-btn-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalAddMember">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="py-6 px-6 lg:px-8">
                                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Member</h3>
                                                        
                                                        <div>
                                                            <input  oninput="searchMember()" type="search" id="inputMember" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Member Name..." required>
                                                        </div>
                                                        
                                                        <div id="members" class="py-3 my-3 hidden rounded-lg bg-white">
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id='member-task'>
                                        <p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>
                                    </div>
                                    
                                    <div class="mb-3">
                                        {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                                        <input id="input-files" name="files[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple> --}}
                                        <div class="flex gap-x-2">
                                            <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Files</label>
                                            
                                            <button onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true')" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalFile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                                            </button>
                                        </div>
                                        
                                        
                                        <div id="modalFile" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                <!-- Modal content -->
                                                <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                                    <button id="btn-close-file" onclick="document.getElementById('close-btn-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalFile">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="py-6 px-6 lg:px-8">
                                                        
                                                        <input type="hidden" name="task_id">
                                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                                                        <input id="input-files" name="files[]" class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                                                        <button type="button" onclick="addFile()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <div id='file-task' class="mb-3">
                                        <p class="text-sm p-2.5  text-gray-500 text-center">No Task Added</p>
                                    </div>
                                    
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Due date :</label>
                                        
                                        <div class="flex items-center">
                                            <div class="relative">
                                                
                                                <input name="task_start" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                            </div>
                                            <span class="mx-4 text-gray-500">to</span>
                                            <div class="relative">
                                                
                                                <input name="task_end" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <button type="button" onclick="addTask()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol id="task-list" class="relative border-l border-gray-200 dark:border-gray-700">  
                        
                        @if (count($task) != 0)
                        @foreach ($task as $t)
                        
                        <li class="mb-10 ml-6">            
                            <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <div class="flex">
                                
                                <h3 class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{$t->title}} 
                                </h3>
                                
                                @if ($owner->id == Auth::user()->id)
                                <button onclick="fetchTaskData({{$t->id}})" class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"  type="button" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                                    
                                </button>
                                
                                <button class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg " type="button" onclick="deleteTask({{$t->id}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(248, 36, 36);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
                                </button>
                                @endif
                                
                                
                            </div>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">Role : @foreach ($t->roles as $role)
                                <span class="text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3 -mr-2" style="background-color: {{$role->role->color}}">{{$role->role->role}}</span>
                                @endforeach
                            </p>
                            <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">start {{$t->start}}</time>
                            <time class="block mb-4 break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">end {{$t->end}}</time>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">{{$t->description}}</p>
                            <p class="mb-4 break-words text-base font-normal text-gray-500 dark:text-gray-400">Member : </p>
                            
                            <div class="flex mb-4">
                                @foreach ($t->members as $m)
                                
                                @if ($m->member->users->google_id == null)
                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset($m->member->users->profile_image) }} " alt="User dropdown">
                                </div>
                                @else
                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ $m->member->users->profile_image}} " alt="User dropdown">
                                </div>
                                @endif 
                                
                                @endforeach
                            </div> 
                            <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Files : </p>
                            @foreach ($t->files as $file)
                            
                            <a href="{{asset('storage/'.$file->file)}}" download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> {{$file->name}}</a>
                            @endforeach
                            
                            
                            
                        </li>
                        @endforeach
                        
                        @else
                        <p class="text-sm text-center pb-4">No Task Added</p>
                        @endif
                        
                        
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
                        
                        
                        @if (Auth::user()->id == $tim->user_id )
                        
                        
                        <button onclick="apply(this)" data-id="{{$p->user_id}}" data-team="{{$p->team_id}}">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M0.41,13.41L6,19L7.41,17.58L1.83,12M22.24,5.58L11.66,16.17L7.5,12L6.07,13.41L11.66,19L23.66,7M18,7L16.59,5.58L10.24,11.93L11.66,13.34L18,7Z" />
                            </svg>
                        </button>
                        
                        <button onclick="reject(this)" data-id="{{$p->user_id}}" data-team="{{$p->team_id}}">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18.54 9.88L17.12 8.47L15 10.59L12.88 8.47L11.47 9.88L13.59 12L11.47 14.12L12.88 15.54L15 13.41L17.12 15.54L18.54 14.12L16.41 12M2 12C2 9.21 3.64 6.8 6 5.68V3.5C2.5 4.76 0 8.09 0 12S2.5 19.24 6 20.5V18.32C3.64 17.2 2 14.79 2 12M15 3C10.04 3 6 7.04 6 12S10.04 21 15 21 24 16.96 24 12 19.96 3 15 3M15 19C11.14 19 8 15.86 8 12S11.14 5 15 5 22 8.14 22 12 18.86 19 15 19Z" />
                            </svg>
                        </button>
                        
                        
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
            
            
            
            @if ($tim->status == 'closed' || $isMember != null || $tim->user_id == Auth::user()->id)
            <h1 class="py-5 mt-4 text-lg">Chat Group</h1>
            <form action="{{url('/message')}}" method="POST">
                @csrf
                <input type="hidden" id="teamID" name="slug" value="{{$tim->id}}">
                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center py-2 px-3 bg-gray-50 rounded-t-lg dark:bg-gray-700">
                    <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                    <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Add emoji</span>
                    </button>
                    <textarea id="chat"  name="message" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                    <button type="button" onclick="sendMessage()" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
                
                
            </form>
            <div id="chat-group" class="bg-slate-200 mr-6 rounded-xl h-[300px] overflow-y-auto scroll-smooth">
                
                <div id='chat-field' class="">
                    @foreach ($conversations as $c)
                    
                    @if ($c->user_id != Auth::user()->id)
                    <div class="flex mt-3 ml-3 w-[90%]">
                        <img class="w-8 h-8 rounded-full shadow-lg" src="{{asset($c->profile_image)}}" >
                        <div class="ml-3 text-sm font-normal w-5/6">
                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">{{$c->name}}</span>
                            <p class=" break-all">{{$c->message}}</p>
                        </div>
                        <p class="text-xs self-end">{{\Carbon\Carbon::create($c->created_at)->isoFormat('HH:mm')}}</p>
                    </div>
                    @else
                    
                    
                    <div class="flex p-2 mx-auto my-2 rounded bg-white break-words w-[90%]">
                        <div class="ml-3 text-sm font-normal  w-5/6">
                            <p class=" break-all">{{$c->message}}</p>
                        </div>
                        
                        <p class="text-xs ml-3 self-end">{{\Carbon\Carbon::create($c->created_at)->isoFormat('HH:mm')}}</p>
                    </div>
                    @endif
                    
                    
                    
                    @endforeach
                </div>
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


{{-- MODAL --}}
<div id="modalEditTask" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full max-h-[500px]  md:h-auto ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button id="close-btn-edit-task" onclick="closeModalEditTask()" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Task</h3>
                
                <div class="mb-3">
                    <label for="task_edit_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Task Title</label>
                    <input type="text" name="task_edit_title" id="task_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Task title..." required>
                </div>
                <div class="mb-3">
                    <label for="task_edit_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                    <textarea id="task_edit_description" name="task_edit_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your task..."></textarea>
                </div>
                
                <div>
                    <div class="flex gap-x-2">
                        <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Members</label>
                        
                        <button onclick="document.getElementById('close-btn-edit-task').setAttribute('disabled', 'true'); document.getElementById('members-edit').innerHTML = ''; document.getElementById('inputEditMember').value = '';" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalEditMember">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        </button>
                    </div>
                    
                    <div id="modalEditMember" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                <button id="btn-close-edit-member" onclick="document.getElementById('close-btn-edit-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalEditMember">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Member</h3>
                                    <input type="hidden" name="task_id">
                                    <div>
                                        <input oninput="searchMember('edit')" type="search" id="inputEditMember" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Member Name..." required>
                                    </div>
                                    
                                    <div id="members-edit" class="py-3 my-3 hidden rounded-lg bg-white">
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id='member-edit-task' class="mb-3">
                    <p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>
                </div>
                
                <div class="mb-3">
                    <div class="flex gap-x-2">
                        <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Files</label>
                        
                        <button onclick="document.getElementById('close-btn-edit-task').setAttribute('disabled', 'true'); document.getElementById('members-edit').innerHTML = ''; document.getElementById('inputEditMember').value = '';" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalEditFile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        </button>
                    </div>
                    
                    <div id="modalEditFile" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                <button id="btn-close-edit-file" onclick="document.getElementById('close-btn-edit-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalEditFile">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    
                                    <input type="hidden" name="task_id">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                                    <input id="input-edit-files" name="files_edit[]" class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                                    <button type="button" onclick="addFile('edit')" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id='file-edit-task'>
                        <p class="text-sm p-2.5  text-gray-500 text-center">No Task Added</p>
                    </div>
                </div>
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Due date :</label>
                    
                    <div class="flex items-center">
                        <div class="relative">
                            
                            <input name="task_edit_start" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            
                            <input name="task_edit_end" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                        </div>
                    </div>
                    
                </div>
                
                <button type="button" onclick="updateTask()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                
                
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

<script type="module">
    
    let isMember = '<?php echo json_encode($isMember); ?>';
    
    if(isMember != null){
        
        let uuidTeam = "{{$tim->uuid}}";
        
        
        // Chat group
        let chatGroup = document.getElementById('chat-group');
        chatGroup.scrollTo(0, document.getElementById('chat-group').scrollHeight);
        // let e = document.getElementById('teamID').value;  
        Echo.private('team.'+uuidTeam).listen('MessageSent',(data)=>{
            
            
            
            let parent = document.createElement('div');
            parent.className = 'flex mt-3 ml-3 w-[90%]';
            
            let img = document.createElement('img');
            img.className = 'w-8 h-8 rounded-full shadow-lg';
            img.src = data.chat[0].profile_image;
            
            let divChild = document.createElement('div');
            divChild.className = 'ml-3 text-sm font-normal w-5/6';
            
            divChild.innerHTML = `<span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">${data.chat[0].name}</span>
            <p>${data.chat[0].message}</p>`;

            let clockNode = document.createElement('p');
            clockNode.className = 'text-xs self-end';
            clockNode.innerText = data.dibuat;

            parent.appendChild(img);
            parent.appendChild(divChild);
            parent.appendChild(clockNode)
            
          

            document.getElementById('chat-field').appendChild( parent);
            let chatGroup = document.getElementById('chat-group');
            chatGroup.scrollTo(0, document.getElementById('chat-group').scrollHeight);
        })
    }  
    
    
    
    
</script>

<script>
    
    
    
    let modalEditRequirement = new Modal(document.getElementById('modalEditRequirement'));
    let modalEditTask = new Modal(document.getElementById('modalEditTask'));
    let currentTeam = "{{$tim->slug}}";
    let listNameRequirement = ['0'];
    let resetStateModalRequirement = [];
    let members = [];
    let memberSelected = [];
    let taskFiles = [];
    let fileSelected = [];
    
    // if (window.performance) {
        //     window.location = '/team-detail/'+currentTeam;
        // }
        
        // dom modal requirement
        function removeChild(e){
            e.remove()
        }
        
        // dom modal requirement
        function tambahChild(e, id, mode)
        {
            if(mode == 'edit'){
                let parent = e.parentNode;
                let buyut = parent.parentNode;
                
                let relativeChild = document.createElement('div');
                relativeChild.className = "relative";
                
                let child1Relative = document.createElement('input');
                child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
                child1Relative.placeholder = 'qualification';
                child1Relative.name = `edit_requirement[${id}][qualification][]`;
                
                
                let child2Relative = document.createElement('button');
                child2Relative.type = 'button';
                child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 button-qualification-close';
                let childIconRelative = document.createElement('i')
                childIconRelative.className = 'bx bxs-minus-circle'
                child2Relative.appendChild(childIconRelative);
                child2Relative.onclick = () =>{
                    removeChild(relativeChild);
                }
                
                relativeChild.appendChild(child1Relative)
                relativeChild.appendChild(child2Relative)
                
                buyut.appendChild(relativeChild);
            }else{
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
                let childIconRelative = document.createElement('i')
                childIconRelative.className = 'bx bxs-minus-circle'
                child2Relative.appendChild(childIconRelative);
                child2Relative.onclick = () =>{
                    removeChild(relativeChild);
                }
                
                relativeChild.appendChild(child1Relative)
                relativeChild.appendChild(child2Relative)
                
                buyut.appendChild(relativeChild);
            }
            
            
        }
        
        function kick(id)
        {
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
                    axios.delete(`/team-detail/${currentTeam}/member?id=${id}`)
                    .then((response)=>{
                        if(response.data.status == 'success'){
                            Swal.fire(
                            'Deleted!',
                            'Member has been kicked.',
                            'success'
                            )
                            window.location.href = `/team-detail/${currentTeam}`;
                        }
                    });
                }
            })
        }
        
        
        function closeModalEditRequirement(){
            
            modalEditRequirement.hide();
        }
        
        function closeModalEditTask(){
            
            modalEditTask.hide();
        }
        
        function refreshRequirement()
        {
            
            axios.get(`/team-detail/${currentTeam}/requirement/fetch`)
            .then((response)=>{
                
                document.getElementById('requirement-section').innerHTML = "";
                let parentNode = document.getElementById('requirement-section');
                
                response.data.requirements.forEach((requirement)=>{
                    
                    let headerRequirement = document.createElement('div');
                    headerRequirement.className = 'flex';
                    headerRequirement.innerHTML = 
                    `
                    <h2 class="text-lg pt-3 text-[#313131] font-semibold">${requirement.role}</h2>
                    <button class="relative inline-flex items-center justify-center pt-3 ml-2  overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(${requirement.id})" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                    </button>
                    <button class="relative inline-flex items-center justify-center pt-3 overflow-hidden text-sm font-medium rounded-lg " type="button" onclick="deleteRequirement(${requirement.id})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(248, 36, 36);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
                    </button>
                    `
                    
                    
                    
                    let ulNode = document.createElement('ul');
                    ulNode.className = 'list-disc ml-10';
                    
                    let salaryNode = document.createElement('p');
                    salaryNode.className = 'text-[#7D7777] text-xs';
                    salaryNode.innerText = `Salary : ${requirement.salary}`;
                    
                    if(requirement.qualification != undefined){
                        
                        requirement.qualification.forEach((qualification)=>{
                            let listNode = document.createElement('li');
                            listNode.className = 'text-[#7D7777]';
                            listNode.innerText = qualification.value;
                            ulNode.appendChild(listNode);
                        })
                    }
                    
                    parentNode.appendChild(headerRequirement);
                    parentNode.appendChild(salaryNode);
                    parentNode.appendChild(ulNode);
                })
                
                
            })
        }
        
        
        
        
        
        function fetchTask(mode)
        {
            members = [];
            memberSelected = [];
            fileSelected = [];
            taskFiles = [];
            let membersArea = document.getElementById('member-task');
            membersArea.innerHTML = `<p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>`;
            axios.get(`/team-detail/${currentTeam}/members/fetch`)
            .then((response)=>{
                
                response.data.members.forEach((member)=>{
                    
                    members.push({
                        'id' : member.member_id,
                        'name' : member.name,
                        'role': member.role,
                        'role_id': member.role_id,
                        'color': member.color,
                        'profil': member.profile_image
                    })
                    
                });
                
                
            })
            
            
            
        }
        
        function deleteTask(id)
        {
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
                    
                    axios.delete(`/team-detail/${currentTeam}/task?id=${id}`)
                    .then((response)=>{
                        if(response.data.status == 'success'){
                            Swal.fire(
                            'Deleted!',
                            'Task has been deleted.',
                            'success'
                            )
                            
                            refreshTask();
                            
                        }
                    })
                    
                }
            })
        }
        
        function refreshTask()
        {
            
            axios.get(`/team-detail/${currentTeam}/task/fetch`)
            .then((response)=>{
                
                let listTaskArea = document.getElementById('task-list');
                listTaskArea.innerHTML = '';
                
                response.data.task.forEach((task)=>{
                    
                    let roles = '';
                    task.roles.forEach((role)=>{
                        
                        roles += `<span class="text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3 -mr-2" style="background-color: ${role.role.color}">${role.role.role}</span>
                        `;
                    });
                    
                    let members = '';
                    task.members.forEach((member)=>{
                        
                        if(member.member.users.google_id == null){
                            members+= `<div>
                                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="${member.member.users.profile_image}" alt="User dropdown">
                            </div>`;
                        }else{
                            members+= `<div>
                                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="${member.member.users.profile_image}" alt="User dropdown">
                            </div>`;
                        }
                    })
                    
                    let files = '';
                    task.files.forEach((file)=>{
                        files+= `<a href="http://127.0.0.1:8000/storage/${file.file}" download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" download clip-rule="evenodd"></path></svg> ${file.name}</a>`
                    })
                    
                    let taskNode = document.createElement('li');
                    taskNode.className = 'mb-10 ml-6';
                    taskNode.innerHTML = `<span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </span>
                    <div class="flex">
                        
                        <h3 class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">${task.title} 
                        </h3>
                        
                        @if ($owner->id == Auth::user()->id)
                        <button onclick="fetchTaskData(${task.id})" class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"  type="button" data-modal-toggle="modalEditTask">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                            
                        </button>
                        <button class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg " type="button" onclick="deleteTask(${task.id})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(248, 36, 36);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
                        </button>
                        @endif
                        
                        
                    </div>
                    
                    <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">Role : ${roles}
                    </p>
                    <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">start ${task.start}</time>
                    <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">end ${task.end}</time>
                    <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">${task.description}</p>
                    <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Member : </p>
                    
                    <div class="flex mb-4">
                        ${members}
                    </div> 
                    <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Files : </p>
                    ${files}`
                    
                    
                    listTaskArea.appendChild(taskNode);
                })
                
            });
        }
        
        
        
        function addFile(mode)
        {
            
            if(mode == 'edit'){
                let files = document.getElementById('input-edit-files').files;
                let task_id = document.querySelector('input[name=task_id]').value;
                let closeButton = document.getElementById('btn-close-edit-file');
                for (var i = 0; i < files.length; i++)
                {
                    
                    if(taskFiles.some((e)=>e.name == files[i].name)){            
                        
                        continue;
                    }else{    
                        
                        taskFiles.push(files[i]);
                        axios.post(`/team-detail/${currentTeam}/task/file`, 
                        {
                            task_id : task_id,
                            files : files[i]
                        },{
                            headers: {
                                "Content-Type": "multipart/form-data"
                            }
                        }
                        ).then((response)=>{
                            if(response.data.status == 'success'){
                                refreshTask();
                                
                                let inputFile = document.getElementById('input-edit-files');
                                inputFile.value = '';
                                
                            }
                        })
                    }
                    
                    
                } 
                
                
                
                closeButton.click();
                
                displayFiles(taskFiles, 'edit');
                
            }else{
                taskFiles = [];
                let files = document.getElementById('input-files').files;
                let task_id = document.querySelector('input[name=task_id]').value;
                let closeButton = document.getElementById('btn-close-file');
                for (var i = 0; i < files.length; i++)
                {
                    
                    if(taskFiles.some((e)=>e.name == files[i].name)){            
                        continue;
                    }else{    
                        
                        taskFiles.push(files[i]);
                        
                    }
                    
                    
                } 
                
                
                
                closeButton.click();
                
                displayFiles(taskFiles);
            }
            
        }
        
        function removeFile(index, id, mode)
        {
            if(mode == 'edit')
            {
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
                        
                        axios.delete(`/team-detail/${currentTeam}/task/file?id=${id}`)
                        .then((response)=>{
                            if(response.data.status == 'success'){
                                taskFiles.splice(index, 1);
                                displayFiles(taskFiles, 'edit');
                                
                                Swal.fire(
                                'Deleted!',
                                'Member has been deleted.',
                                'success'
                                )
                                
                                refreshTask();
                                document.getElementById('close-btn-edit-task').removeAttribute('disabled');
                            }
                        });
                        
                        
                        
                        
                    }
                })
                
            }else{
                taskFiles.splice(index, 1);
                displayFiles(taskFiles);
            }
            
            
            
        }
        
        function displayFiles(arr, mode)
        {
            
            if(mode == 'edit'){
                let fileArea = document.getElementById('file-edit-task');
                fileArea.innerHTML = '';
                let fileNode = '';
                arr.forEach((file,index)=>{
                    fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                        <div class="flex items-center  space-x-2">
                            <div class="flex-1 ">
                                <p class="text-sm truncate dark:text-white">
                                    ${file.name}
                                </p>                      
                            </div>             
                            
                            
                            <button onclick="removeFile(${index}, ${file.id}, 'edit')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                            </button>
                            
                        </div>
                    </div>`
                })
                
                fileArea.innerHTML = fileNode;
                
            }else{
                
                
                let fileArea = document.getElementById('file-task');
                fileArea.innerHTML = '';
                let fileNode = '';
                arr.forEach((file,index)=>{
                    fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                        <div class="flex items-center  space-x-2">
                            <div class="flex-1 ">
                                <p class="text-sm truncate dark:text-white">
                                    ${file.name}
                                </p>                      
                            </div>             
                            
                            
                            <button onclick="removeFile(${index})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                            </button>
                            
                        </div>
                    </div>`
                })
                
                fileArea.innerHTML = fileNode;
            }
            
        }
        
        
        function fetchTaskData(id)
        {
            
            modalEditTask.show();
            fetchTask();
            memberSelected = [];
            fileSelected = [];
            taskFiles = [];
            axios.get(`/team-detail/${currentTeam}/task/fetch?id=${id}`)
            .then((response)=>{
                
                response.data.task[0].members.forEach((member)=>{
                    memberSelected.push({
                        'id' : member.id,
                        'member_id' : member.member.id,
                        'name' : member.member.users.name,
                        'task_id' : member.task_id,
                        'role': member.member.role.role,
                        'role_id': member.member.role_id,
                        'color': member.member.role.color,
                        'profil': member.member.users.profile_image
                    }
                    )
                })
                
                response.data.task[0].files.forEach((file)=>{
                    
                    taskFiles.push({
                        'id' : file.id,
                        'task_id' : file.task_id,
                        'file' : file.file,
                        'name' : file.name
                    })
                })
                
                
                let title = document.querySelector('input[name=task_edit_title]').value = response.data.task[0].title;
                let start = document.querySelector('input[name=task_edit_start]').value = response.data.task[0].start;
                let end = document.querySelector('input[name=task_edit_end]').value = response.data.task[0].end;
                let task_id = document.querySelector('input[name=task_id]').value = response.data.task[0].id;
                let description = document.querySelector('textarea[name=task_edit_description]').value = response.data.task[0].description;
                
                displayMembers('edit');
                
                displayFiles(response.data.task[0].files, 'edit');
            })
        }
        
        function addTask()
        {
            let title = document.querySelector('input[name=task_title]').value;
            let start = document.querySelector('input[name=task_start]').value;
            let end = document.querySelector('input[name=task_end]').value;
            let description = document.querySelector('textarea[name=task_description]').value;
            let files = document.getElementById('input-files').files;
            let fileList = [];
            for (var i = 0; i < files.length; i++)
            {
                fileList.push(files[i]);
            }
            
            console.log(memberSelected);
            axios.post(`/team-detail/${currentTeam}/task/store`, 
            {
                title : title,
                description : description,
                start : start,
                end : end,
                files : taskFiles,
                memberSelected : JSON.stringify(memberSelected)
            },{
                headers: {
                    "Content-Type": "multipart/form-data"
                }}
                ).then((response)=>{
                    
                    
                    if(response.data.status == 'success')
                    {
                        Swal.fire(
                        'Success!',
                        'Task has been added.',
                        'success'
                        )
                        
                        let listTaskArea = document.getElementById('task-list');
                        let roles = '';
                        response.data.roles.forEach((role)=>{
                            roles += `<span class="text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3 -mr-2" style="background-color: ${role.color}">${role.role}</span>`;
                        });
                        
                        let members = '';
                        response.data.members.forEach((member)=>{
                            if(member.google_id == null){
                                members+= `<div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="http://127.0.0.1:8000/storage/${member.profile_image}" alt="User dropdown">
                                </div>`;
                            }else{
                                members+= `<div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="${member.profile_image}" alt="User dropdown">
                                </div>`;
                            }
                        })
                        
                        let files = '';
                        response.data.files.forEach((file)=>{
                            files+= `<a href="http://127.0.0.1:8000/storage/${file.file}" class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> ${file.name}</a>`
                        })
                        
                        let taskNode = document.createElement('li');
                        taskNode.className = 'mb-10 ml-6';
                        taskNode.innerHTML = `<span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <h3 class="flex break-words items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">${response.data.task.title} 
                            ${roles}
                        </h3>
                        <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">start ${response.data.task.start}</time>
                        <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">end ${response.data.task.end}</time>
                        <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">${response.data.task.description}</p>
                        <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Member : </p>
                        
                        <div class="flex mb-4">
                            ${members}
                        </div> 
                        <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Files : </p>
                        ${files}`
                        
                        
                        listTaskArea.prepend(taskNode);
                        memberSelected = [];
                        let title = document.querySelector('input[name=task_title]').value = '';
                        let start = document.querySelector('input[name=task_start]').value = '';
                        let end = document.querySelector('input[name=task_end]').value = '';
                        let description = document.querySelector('textarea[name=task_description]').value = '';
                        let btnClose = document.getElementById('close-btn-task');
                        refreshTask();
                        btnClose.click();
                    }
                })
            }
            
            
            function searchMember(mode)
            {
                // console.log(input.value);
                document.getElementById('close-btn-edit-task').setAttribute('disabled', 'true');
                if(mode == 'edit'){
                    
                    let membersArea = document.getElementById('members-edit');
                    
                    let input = document.getElementById('inputEditMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)}, "${mode}")'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }else{
                    
                    let membersArea = document.getElementById('members');
                    membersArea.innerHTML = '';
                    let input = document.getElementById('inputMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)})'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }
                
                
                
            }
            
            function removeMember(index, mode, id)
            {
                if(mode == 'edit'){
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
                            
                            axios.delete(`/team-detail/${currentTeam}/task/member?id=${id}`)
                            .then((response)=>{
                                if(response.data.status == 'success'){
                                    memberSelected.splice(index, 1);
                                    displayMembers('edit');
                                    
                                    Swal.fire(
                                    'Deleted!',
                                    'Member has been deleted.',
                                    'success'
                                    )
                                    
                                    refreshTask();
                                    
                                }
                            });
                            
                            
                            
                            
                        }
                    })
                    
                }else{
                    memberSelected.splice(index, 1);
                    displayMembers();
                }
            }
            
            function displayMembers(mode)
            {
                
                if(mode == 'edit'){
                    let displayMemberArea = document.getElementById('member-edit-task');
                    let nodeMember = "";
                    if(memberSelected.length == 0){
                        let displayMemberArea = document.getElementById('member-edit-task');
                        displayMemberArea.innerHTML = `<p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>`;
                        
                    }else{
                        memberSelected.forEach((member, index)=>{
                            nodeMember += `
                            <div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate dark:text-white">
                                            ${member.name}
                                        </p>                      
                                    </div>             
                                    <span class=" text-white  text-xs font-semibold px-1 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color:${member.color}">${member.role}</span>
                                    
                                    <button onclick="removeMember(${index}, 'edit', ${member.id})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>
                            `
                        })
                        
                        displayMemberArea.innerHTML = nodeMember;
                    }
                }else{  
                    let displayMemberArea = document.getElementById('member-task');
                    let nodeMember = "";
                    if(memberSelected.length == 0){
                        let displayMemberArea = document.getElementById('member-task');
                        displayMemberArea.innerHTML = `<p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>`;
                        
                    }else{
                        memberSelected.forEach((member, index)=>{
                            nodeMember += `
                            <div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate dark:text-white">
                                            ${member.name}
                                        </p>                      
                                    </div>             
                                    <span class=" text-white  text-xs font-semibold px-1 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color:${member.color}">${member.role}</span>
                                    
                                    <button onclick="removeMember(${index})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>
                            `
                        })
                        
                        displayMemberArea.innerHTML = nodeMember;
                    }
                }
                
                
            }
            
            function addMember(member, mode)
            {
                if(mode == 'edit'){
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let membersArea = document.getElementById('members-edit');
                    
                    if(memberSelected.some((e)=>e.member_id == member.id)){
                        
                        document.getElementById('btn-close-edit-member').click();
                        
                        return;
                    }
                    axios.post(`/team-detail/${currentTeam}/task/member`, {member, task_id : task_id})
                    .then((response)=>{
                        
                        
                        member.id = response.data.id;
                        memberSelected.push(member);
                        let input = document.getElementById('inputEditMember').value = '';
                        membersArea.innerHTML= "";
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                        document.getElementById('btn-close-edit-member').click();
                        displayMembers('edit');
                        refreshTask();
                    });
                    
                }else{
                    let membersArea = document.getElementById('members');
                    if(memberSelected.some((e)=>e.id == member.id)){
                        document.getElementById('btn-close-member').click();
                        
                        return;
                    }
                    memberSelected.push(member);
                    let input = document.getElementById('inputMember').value = '';
                    membersArea.innerHTML= "";
                    membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    document.getElementById('btn-close-member').click();
                    displayMembers();
                }
                
            }
            
            function updateTask()
            {
                let task_id = document.querySelector('input[name=task_id]').value;
                let title = document.querySelector('input[name=task_edit_title]').value;
                let description = document.getElementById('task_edit_description').value;
                let start = document.querySelector('input[name=task_edit_start]').value;
                let end = document.querySelector('input[name=task_edit_end]').value;
                
                axios.put(`/team-detail/${currentTeam}/task?id=${task_id}`, {
                    title : title,
                    description : description,
                    start : start,
                    end : end
                }).then((response)=>{
                    if(response.data.status == 'success'){
                        Swal.fire(
                        'Updated!',
                        'Task has been updated.',
                        'success'
                        )
                        
                        refreshTask();
                        let btnClose = document.getElementById('close-btn-edit-task');
                        btnClose.click();
                    }
                });
            }
            
            
            function sendMessage()
            {
                let chat = document.getElementById('chat').value;
                axios.post(`/message`, {chat, currentTeam})
                .then(function (response) {
                    
                    
                    let parent = document.createElement('div');
                    parent.className = 'flex p-2 mx-auto my-3 rounded bg-white break-words w-[90%]';
                    
                    
                    let divChild = document.createElement('div');
                    divChild.className = 'ml-3 text-sm font-normal  w-5/6';
                    
                    divChild.innerHTML = `
                    <p>${response.data.chat[0].message}</p>`;
                    
                    let hours = document.createElement('p');
                    hours.className = 'text-xs self-end';
                    hours.innerText = response.data.chat[0].hours;
                    
                    
                    parent.appendChild(divChild);
                    parent.appendChild(hours);
                    
                    document.getElementById('chat-field').appendChild( parent);
                    
                    let chatGroup = document.getElementById('chat-group');
                    chatGroup.scrollTo(0, document.getElementById('chat-group').scrollHeight);
                    
                    document.getElementById('chat').value = '';
                    
                })
            }
            
            function deleteRequirement(id)
            {
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
                        
                        axios.delete(`/team-detail/${currentTeam}/requirement?id=${id}`)
                        .then((response)=>{
                            if(response.data.status == 'success'){
                                Swal.fire(
                                'Deleted!',
                                'Requirement has been deleted.',
                                'success'
                                )
                                
                                refreshRequirement();
                                
                            }
                        })
                        
                        
                        
                        
                        
                    }
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
                        'salary': response.data.requirement.salary,
                        'qualification': [
                        
                        ]
                    }
                    
                    
                    document.getElementById('role').value = response.data.requirement.role;
                    document.getElementById('salary').value = response.data.requirement.salary;
                    let parentQualification = document.getElementById('parent-qualification');
                    parentQualification.innerHTML = "";
                    
                    let relativeChild = document.createElement('div');
                    relativeChild.className = "relative";
                    
                    let child1Relative = document.createElement('button');
                    child1Relative.type = 'button';
                    child1Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
                    let childIconRelative = document.createElement('i')
                    childIconRelative.className = 'bx bxs-plus-circle'
                    child1Relative.appendChild(childIconRelative);
                    child1Relative.onclick = (id) =>{
                        tambahChild(child1Relative, count, 'edit');
                    }
                    
                    relativeChild.appendChild(child1Relative);
                    parentQualification.appendChild(relativeChild);
                    
                    Object.values(response.data.qualifications).forEach(val => {
                        
                        
                        
                        let relativeChild = document.createElement('div');
                        relativeChild.className = "relative";
                        
                        let child1Relative = document.createElement('input');
                        child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
                        child1Relative.placeholder = 'qualification';
                        child1Relative.name = `edit_requirement[0][qualification][]`;
                        child1Relative.value = val.description;
                        child1Relative.setAttribute('data-id', val.id);
                        
                        let child2Relative = document.createElement('button');
                        child2Relative.type = 'button';
                        child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 button-qualification-close';
                        let childIconRelative = document.createElement('i')
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
                                    
                                    axios.delete(`/team-detail/${currentTeam}/qualification?id=${val.id}`);
                                    
                                    removeChild(relativeChild);
                                    
                                    Swal.fire(
                                    'Deleted!',
                                    'Qualification has been deleted.',
                                    'success'
                                    )
                                    
                                    refreshRequirement();
                                    let targetEl = document.getElementById('btn-close-modalEditRequirement');
                                    targetEl.click();
                                    
                                }
                            })
                            
                        }
                        
                        relativeChild.appendChild(child1Relative)
                        relativeChild.appendChild(child2Relative)
                        
                        parentQualification.appendChild(relativeChild);
                    });
                    
                    
                    
                    document.getElementById('button-update-requirement').onclick = () =>{
                        
                        let nodeListQualification = document.querySelectorAll(`input[name="edit_requirement[0][qualification][]`);
                        console.log(nodeListQualification);
                        let requirementName = document.getElementById('role');
                        let requirementSalary = document.getElementById('salary');
                        requirements.role = requirementName.value;
                        requirements.salary = requirementSalary.value;
                        nodeListQualification = Array.prototype.slice.call(
                        nodeListQualification
                        );
                        
                        nodeListQualification.forEach((e)=>{
                            console.log(e);
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
                        
                        console.log(requirements);
                        axios.put(`/team-detail/${currentTeam}/requirement/fetch?id=${requirement}`, {requirements});
                        
                        Swal.fire(
                        'Updated!',
                        'Requirement has been updated.',
                        'success'
                        )
                        // document.querySelector('input[name="requirement[0][role]"]').value = '';
                        // let resetNodeListQualification = document.querySelectorAll(`input[name="requirement[0][qualification][]`);
                        // resetNodeListQualification.forEach((qualification)=>{
                            //     qualification.remove();
                            // })
                            refreshRequirement();
                            let targetEl = document.getElementById('btn-close-modalEditRequirement');
                            targetEl.click();
                        }
                        
                        
                    })
                }
                
                function updateStatusTim()
                {
                    let status = document.querySelector('input[type=checkbox]').value;
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, Update it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                            'Updated!',
                            'Your team status has been updated.',
                            'success'
                            )
                            
                            axios.post(`/team-detail/${currentTeam}/status`, {status})
                            
                            window.location.href = `/team-detail/${currentTeam}/`;
                        }else{
                            
                            if(document.querySelector('input[type=checkbox]').checked == true){
                                
                                document.querySelector('input[type=checkbox]').checked = false;
                            }else{
                                document.querySelector('input[type=checkbox]').checked = true;
                            }
                            
                            
                        }
                        
                    })
                    
                }
                
                function updateRequirement()
                {
                    axios.put(`/team-detail/${currentTeam}/requirement/fetch?id=${requirement}`);
                    refreshRequirement();
                }
                
                // tambah requirement
                function addRequirement()
                {
                    let requirements = [];
                    let requirement_role = document.querySelector(`input[name="requirement[0][role]"]`);
                    requirement_role.innerHTML = '';
                    let requirement_salary = document.getElementById(`requirement-salary`);
                    requirement_salary.innerHTML = '';
                    let nodeListQualification = document.querySelectorAll(`input[name="requirement[0][qualification][]`);
                    nodeListQualification.innerHTML = '';
                    
                    
                    listNameRequirement.forEach((role)=>{
                        let requirement = {
                            'role': null,
                            'salary': null,
                            'qualification': []
                        }
                        
                        let requirement_role = document.querySelector(`input[name="requirement[${role}][role]"]`).value;
                        requirement.role = requirement_role;
                        
                        let requirement_salary = document.querySelector(`input[name="requirement[${role}][salary]"]`).value;
                        requirement.salary = requirement_salary;
                        
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
                    document.querySelectorAll(`input[name="requirement[0][qualification][]`).value = '';
                    
                    if(document.querySelector('.button-qualification-close')){
                        document.querySelector('.button-qualification-close').click()
                    }
                    if(document.querySelector('.button-requirement-close')){
                        document.querySelector('.button-requirement-close').click();
                    }
                    listNameRequirement = [];
                    listNameRequirement.push('0');
                    
                    // console.log(requirements);
                    axios.post(`/team-detail/${currentTeam}/requirement`,{requirements,currentTeam})
                    .then(function (response) {
                        
                        let targetEl = document.getElementById('btn-modal-requirement');
                        targetEl.click();
                        refreshRequirement(targetEl);
                        let requirement_salary = document.getElementById(`requirement-salary`);
                        requirement_salary.value = '';
                        let qualificationArea = document.getElementById('qualification-area');
                        qualificationArea.innerHTML = '';
                        qualificationArea.innerHTML = ` <div class="relative"><input name="requirement[0][qualification][]" id="qualification" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="qualification" required>
                            <button type="button" onclick="tambahChild(this,0)" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button></div>`
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
                        let childIconRelative = document.createElement('i')
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
                    function reject(pelamar)
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
                                axios.post(`/team-detail/reject`, {
                                    user_id: pelamar.dataset.id,
                                    team_id: pelamar.dataset.team
                                })
                                .then(function (response) {
                                    window.location.href = response.data.link;
                                })
                                
                                Swal.fire(
                                'Rejected!',
                                'Applicant has been rejected.',
                                'success'
                                )
                            }
                        })
                        
                    }
                    
                    
                    
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
                            
                            let description = document.getElementById('description_team').innerText = response.data.new_desc;
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
                            currentTeam = response.data.slug;
                            console.log(currentTeam);
                            axios.get(`/team-detail/${currentTeam}/fetch`);
                            
                            let name = document.getElementById('team_name').innerText = response.data.new_name;
                            // window.history.replaceState( "/team-detail/"+currentTeam);
                            
                            let stateObj = { id: "100" };
                            window.history.replaceState(stateObj,
                            currentTeam, "/team-detail/"+currentTeam);
                            
                            let targetEl = document.getElementById('btn-modal-name');
                            targetEl.click();
                            
                            
                        })
                    }
                </script>
                
                
                @endpush