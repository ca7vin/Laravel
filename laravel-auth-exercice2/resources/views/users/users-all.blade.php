<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">

                <div class='container flex flex-col items-center justify-center'>
                    @if (session()->has('message'))
                        <div class='alert alert-success'>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class='text-uppercase text-center'>nom</th>
                                <th class='text-uppercase text-center'>prenom</th>
                                <th class='text-uppercase text-center'>age</th>
                                <th class='text-uppercase text-center'>adress</th>
                                <th class='text-uppercase text-center'>email</th>
                                <th class='text-uppercase text-center'>role</th>
                            </tr> {{-- all_tr_anchor --}}
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope='row'>{{ $user->id }}</th>>
                                    <td class='text-center'>{{ $user->name }}</td>
                                    <td class='text-center'>{{ $user->first_name }}</td>
                                    <td class='text-center'>{{ $user->age }}</td>
                                    <td class='text-center'>{{ $user->adress }}</td>
                                    <td class='text-center'>{{ $user->email }}</td>
                                    <td class='text-center'>{{ $user->role->name }}</td>
                                    <td> {{-- all_td_anchor --}}
                                        <div class='flex justify-around items-center'>
                                            <form action='{{ route('users.destroy', $user->id) }}' method='post'>
                                                @csrf
                                                <button class="btn btn-danger" type=submit>Delete</button>
                                            </form>
                                            <a class='btn btn-warning mx-3'
                                                href='{{ route('users.edit', $user->id) }}' role='button'>Edit</a>
                                            {{-- <a class='btn btn-primary' href='{{ route('users.show', $user->id) }}' role='button'>Read</a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
