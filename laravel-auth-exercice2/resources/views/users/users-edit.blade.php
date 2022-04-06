<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">

                <div class='container d-flex flex-column align-items-center justify-content-center'>
                    <h1>Users</h1>
                    @if ($errors->any())
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action='{{ route('users.update', $user->id) }}' method='post'
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for=''>name</label>
                            <input class='form-control' type='text' name='name' value='{{ $user->name }}'>
                        </div>
                        <div>
                            <label for=''>first_name</label>
                            <input class='form-control' type='text' name='first_name' value='{{ $user->first_name }}'>
                        </div>
                        <div>
                            <label for=''>age</label>
                            <input class='form-control' type='text' name='age' value='{{ $user->age }}'>
                        </div>
                        <div>
                            <label for=''>adress</label>
                            <input class='form-control' type='text' name='adress' value='{{ $user->adress }}'>
                        </div>
                        <div>
                            <label for=''>email</label>
                            <input class='form-control' type='text' name='email' value='{{ $user->email }}'>
                        </div>
                        <div>
                            <label for=''>role_id</label>
                            <input class='form-control' type='text' name='role_id' value='{{ $user->role_id }}'>
                        </div>


                        <div>
                            <label for="exampleFormControlSelect1">rôle</label>
                            <select name='role_id' class="form-control" id="exampleFormControlSelect1">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class='btn btn-warning mt-3' type='submit'>Update</button> {{-- update_blade_anchor --}}
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
