<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-100" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="d-block mt-1 w-100" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="w-100 mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="d-block mt-1 w-100" type="email" name="email" :value="old('email')" required />
            </div>

            {{-- <!-- Role -->
            <div class="mt-4">
                <x-label for="role" :value="__('Role')" />

                <select name="role_id" id="role">
                    @foreach($roles as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="d-block mt-1 w-100"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="d-block mt-1 w-100"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="d-flex flex-column align-items-center justify-content-center mt-4">
                <a class="text-decoration-underline text-black" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="mt-2">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>



{{-- 

<div class="col-12 mx-auto monImage">

</div>
<div class='container p-5'>
    <h1><strong><u>Register</u></h1>
    @if (session()->has('message'))
        <div class='alert alert-success'>
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('message2'))
        <div class='alert alert-danger'>
            {{ session()->get('message2') }}
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
    <form action="{{ route('register') }}"' method=' post'>
        @csrf
        <div class="col-3">
            <div>
                <label class="mt-2 mx-5" for='name'>Name</label>
                <input type='text' name='name'>
            </div>
            <div>
                <label class="mt-2 mx-5" for='surname'>Surname</label>
                <input type='text' name='surname'>
            </div>
            <div>
                <label class="mt-2 mx-5" for='age'>Age</label>
                <input type='number' name='age'>
            </div>
            <div>
                <label class="mt-2 mx-5" for='address'>Address</label>
                <input type='address' name='address'>
            </div>
            <div>
                <label class="mt-2 mx-5" for='email'>Email</label>
                <input type='email' name='email'>
            </div>
            <div class="d-flex flex-column">
                <label class="mt-2 mx-5" for='role'>Role</label>
                <select name="role" id="role">
                    <option value="Membre">Membre</option>
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>
            <div>
                <label class="mt-2 mx-5" for='password'>Password</label>
                <input type='password' name='password'>
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" :value="__('Confirm Password')">Confirm your password</label>

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <button class="bg-primary text-white" type='submit'>Register</button>
        </div>
    </form>
</div>  --}}
