<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as {{ Auth::user()->first_name }}!
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-2xl uppercase font-bold my-5">Administrateurs</h1>
                    <div class="flex items-center justify-around">
                        @foreach ($users->where('role_id', 1) as $user)
                            <div class="max-w-sm bg-gray-200 rounded overflow-hidden shadow-lg p-5">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">User #{{ $user->id }}</div>
                                    <ul class='list-disc'>
                                        <li><span class="font-bold">Nom</span> : {{ $user->name }}</li>
                                        <li><span class="font-bold">Prénom</span> : {{ $user->first_name }}</li>
                                        <li><span class="font-bold">Age</span> : {{ $user->age }}</li>
                                        <li><span class="font-bold">Adress</span> : {{ $user->adress }}</li>
                                        <li><span class="font-bold">Email</span> : {{ $user->email }}</li>
                                        <li><span class="font-bold">Rôle</span> : {{ $user->role->name }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-2xl uppercase font-bold my-5">Non Administrateurs</h1>
                    <div class="flex justify-around w-full">
                        @foreach ($users->where('role_id',"!=", 1) as $user)
                            <div class="max-w-sm bg-gray-200 rounded overflow-hidden shadow-lg p-5">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">User #{{ $user->id }}</div>
                                    <ul class='list-disc'>
                                        <li><span class="font-bold">Nom</span> : {{ $user->name }}</li>
                                        <li><span class="font-bold">Prénom</span> : {{ $user->first_name }}</li>
                                        <li><span class="font-bold">Age</span> : {{ $user->age }}</li>
                                        <li><span class="font-bold">Adress</span> : {{ $user->adress }}</li>
                                        <li><span class="font-bold">Email</span> : {{ $user->email }}</li>
                                        <li><span class="font-bold">Rôle</span> : {{ $user->role->name }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
