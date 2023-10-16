@extends('user.layout.layout')

@section('content')

<div class="mx-6">
  <div class="flex justify-between  items-center">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <h1 class="my-6 text-3xl ">Team List</h1>
    @role('leader')
    <button class="relative inline-flex justify-center  overflow-hidden text-sm font-medium rounded-lg focus:outline-none text-white bg-[#05FF00] hover:bg-[#47F644] focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 h-1/2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 " type="button" data-modal-toggle="medium-modal-1">
      + Create Team
    </button>
    @endrole

  </div>

  <div id="medium-modal-1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="medium-modal-1">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="py-6 px-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Team</h3>
          <form class="space-y-3" action="{{url('team-list')}}" method="POST">
            @csrf
            <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Team Name</label>
              <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="TeamUp" required>
            </div>
            <div>
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
              <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your team..."></textarea>
            </div>

            <div>
              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
              <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach

              </select>
            </div>

            <div class="" id="requirement">
              <label for="requirement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Requirement</label>
              <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                <div class="basis-[30%] relative">
                  <input type="text" name="requirement[0][role]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>

                </div>
                <div class="basis-[30%] relative">
                  <input type="text" name="requirement[0][salary]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>
                </div>
                <div class="basis-[40%] relative">

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

            <button type="submit"  onclick="sweatAlert()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

          </form>
        </div>
      </div>
    </div>
  </div>

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

    <div class="mx-6 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-6 lg:grid-cols-3 mt-10">

      @foreach ($teams as $team)


      <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
          <img class="w-sm max-h-40 w-full" src="{{$team->image}}" alt="" />
          <div class="p-2 relative">
            <p class="text-lg mt-4 mb-2 font-semibold">{{$team->name}} <span class="text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full" style="background-color: {{$team->category->color}}">{{$team->category->name}}</span></p>
            <p class="max-h-[118px] mb-3 overflow-hidden text-ellipsis">{{$team->description}}</p>

            <div class="flex">
              <p class="w-[15%]">
                Tags :
              </p>
              <div class="w-[85%]">
                @foreach ($team->requirements as $requirement)

                <span class="text-white text-xs font-medium px-2.5 py-0.5 rounded-full" style="background-color: {{$requirement->color}}">{{$requirement->role}}</span>
                @endforeach
              </div>
            </div>

            <div class="flex -space-x-4 justify-between mt-1">
              <div>
              </div>
              <div class="">
                <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{url('/team-detail/'.$team->slug)}}">Detail</a></button>
              </div>
            </div>


            <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="{{$team->owner->avatar != null ? asset('storage/'.$team->owner->avatar) : ($team->owner->google_id == null ? asset($team->owner->profile_image) : $team->owner->profile_image)}}" alt="" />
          </div>
        </div>
      </div>

      @endforeach




    </div>
  </div>


  @endsection

  @push('script')

  <script>

    function removeChild(e){
      e.remove()
    }


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
      child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800';
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


    let count = 0;

    function tambah(){


      let id = ++count;
      let el = document.getElementById('requirement');

      let parent = document.createElement('div');
      parent.className = 'flex justify-between gap-x-2 flex-row items-center mb-3';

      let parentInput1 = document.createElement('div');
      parentInput1.className = 'basis-[30%]';
      let child1 = document.createElement('input');
      child1.name = `requirement[${id}][role]`;
      child1.className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white';
      child1.placeholder = 'role...'
      parentInput1.appendChild(child1)


      let parentInput2 = document.createElement('div');
      parentInput2.className = 'basis-[40%]';

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
      button.type = 'button';
      let icon = document.createElement('i');
      icon.className='bx bxs-minus-circle';
      button.appendChild(icon);
      button.onclick = () => {
        remove(button);
      }
      parentInput3.appendChild(button);

      let parentInput4 = document.createElement('div');
      parentInput4.className = 'basis-[30%]'
      parentInput4.innerHTML = `<input type="text" name="requirement[${id}][salary]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>`

      parent.appendChild(parentInput1)
      parent.appendChild(parentInput4)
      parent.appendChild(parentInput2)
      parent.appendChild(parentInput3)


      el.appendChild(parent)
    }

    function sweatAlert()
    {
      Swal.fire(
      'Create Team Success',
      'You clicked the button!',
      'success'
      )
    }

    function remove(e) {
      let parent1 = e.parentNode;
      parent1.parentNode.remove();
    }


  </script>
  @endpush







