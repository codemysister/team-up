@extends('admin.layout.layout')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    
    
    
    <!-- Modal toggle -->
    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal" onclick="add()">
        Add User
    </button>
    
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center bg-gray-50">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button onclick="closeModal()" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white" id="judul-modal" >Tambah Data</h3>
                    <form class="space-y-6" action="{{url('/admin/user')}}" method="POST" id="form-modal">
                        @csrf
                        
                        @method('PATCH')
                        <input type="hidden" name="id" value="" id="id">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Name..." required="">
                            @error('name')
                            <small class="text-sm text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@gmail.com" required="">
                            @error('email')
                            <small class="text-sm text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="password">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                            @error('password')
                            <small class="text-sm text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="password_confirmation">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                            @error('password_confirmation')
                            <small class="text-sm text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <button id="btn-submit-add" type="button" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="store()">Add</button>
                        
                        <button id="btn-submit-edit" type="button" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="update()">Edit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    
    
    <div js-hook-url="{{ route('user.fetch') }}" js-hook-table-client></div>
</div>
@endsection

@push('script')

<script>    
    
    function store(){
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let password_confirmation = document.getElementById('password_confirmation').value;
        axios.post(`/admin/user/`, {name:name, email:email, password: password, password_confirmation:password_confirmation})
        .then((res)=>{
            if(res.data.status == 'success'){
                Swal.fire({
                    icon: 'success',
                    title: "Success!",
                    text: `Add User Complete`,
                    type: "success",
                    showConfirmButton: false,
                    timer: 1000
                })
                window.location.href = "/admin/user";
            }
            
        })
    }
    
    function add(){
        let password = document.querySelector('.password').style.display = 'block';
        let password_confirmation = document.querySelector('.password_confirmation').style.display = 'block';
        let btnSubmitModal = document.getElementById('btn-submit-edit').style.display = 'none';
    }
    
    function edit(id){
        let targetEl = document.getElementById('authentication-modal');
        const modal = new Modal(targetEl);
        axios.get(`/admin/user/${id}/edit`)
        .then((res)=>{
            console.log(res.data);
            let id = document.getElementById('id').value = res.data.user.id;
            let name = document.getElementById('name').value = res.data.user.name;
            let email = document.getElementById('email').value = res.data.user.email;
            // let btnSubmitModal = document.getElementById('btn-submit-modal').setAttribute('onclick',update(id, name, email));
        })
        let password = document.querySelector('.password').style.display = 'none';
        let password_confirmation = document.querySelector('.password_confirmation').style.display = 'none';
        let btnSubmitAdd = document.getElementById('btn-submit-add').style.display = 'none';
        let btnSubmitEdit = document.getElementById('btn-submit-edit').style.display = 'block';
        modal.show();
        
    }
    
    function update(){
        let id = document.getElementById('id').value;
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        axios.patch(`/admin/user/${id}/edit`, {id:id, name:name, email:email})
        .then((res)=>{
            if(res.data.status == 'success'){
                Swal.fire({
                    icon: 'success',
                    title: "Success!",
                    text: `Edit User Complete`,
                    type: "success",
                    showConfirmButton: false,
                    timer: 1000
                })
                window.location.href = "/admin/user";
            }
        })
    }
    
    function destroy(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/admin/user/${id}/delete`).then((res)=>{
                    console.log(res.data.status)
                    if(res.data.status == 'success'){
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )

                        window.location.href = "/admin/user";
                    }
                   
                })
                
            }
        })
    }
    
    
    
    function openModal(){
        console.log('oke')
        let targetEl = document.getElementById('authentication-modal');
        const modal = new Modal(targetEl);
        modal.toggle();
        
        let el = document.querySelectorAll('[modal-backdrop]');
        el.forEach((e)=>{
            e.style.display = 'none'
        })
        
    }
    
    function closeModal(){
        console.log('oke')
        let targetEl = document.getElementById('authentication-modal');
        const modal = new Modal(targetEl);
        modal.toggle();
        
        let el = document.querySelectorAll('[modal-backdrop]');
        el.forEach((e)=>{
            e.style.display = 'none'
        })
        
    }
    
    window.onload = function(){
        
        let Grid = window.Grid;
        const TABLE_CLIENTS = '[js-hook-table-client]'
        
        // Get the table element
        const table_clients_wrapper = document.querySelector(TABLE_CLIENTS);
        
        // Get the url attribute
        const table_clients_url = table_clients_wrapper.getAttribute('js-hook-url');
        
        if (table_clients_wrapper) {
            const table_clients = new Grid({
                columns: [
                {
                    name: 'Id',
                },
                {
                    name: 'Name',
                    width: '30%'
                },
                {
                    name: 'Email',
                    width: '30%'
                },
                {
                    name: 'Actions',
                    width: '100%',
                    // Here we inject our route edit
                    // formatter: (_, row) => 
                    formatter: (cell, row) => html(`<button class='py-2 mb-4 px-4 border rounded-md text-white bg-blue-600' onclick='edit(${row.cells[0].data})'>Edit</button>  <button onclick="destroy(${row.cells[0].data})" class='py-2 mb-4 px-4 border rounded-md text-white bg-red-600'>Delete</button>`)
                    //   h('button', {
                        //         className: 'py-2 mb-4 px-4 border rounded-md text-white bg-blue-600',
                        //         onClick: () => alert(`Editing "${row.cells[0].data}" "${row.cells[1].data}"`)
                        //     }, 'Edit', )
                        //   h('button', {
                            //         className: 'py-2 mb-4 px-4 border rounded-md text-white bg-blue-600',
                            //         onClick: () => alert(`Editing "${row.cells[0].data}" "${row.cells[1].data}"`)
                            //     }, 'Edit', )
                            
                            
                        }
                        ],
                        search: {
                            enabled: true
                        },
                        server: {
                            // Here we give the URL we passed in the hook
                            url: table_clients_url,
                            then: data => data.map(table => [table.id, table.name, table.email, table.edit_url]),
                            handle: (res) => {
                                // no matching records found
                                if (res.status === 404) return {data: []};
                                if (res.ok) return res.json();
                                
                                throw Error('oh no :(');
                            },
                        },
                        pagination: {
                            enabled: true,
                            limit: 10,
                            summary: false
                        },
                        autoWidth: false,
                        resizable: true,
                    }).render(table_clients_wrapper);
                    
                    
                }
            }
            
            
            
            
            
            
        </script>
        @endpush
        
        