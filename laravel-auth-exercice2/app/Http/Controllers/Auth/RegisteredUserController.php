<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'adress' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'age' => $request->age,
            'adress' => $request->adress,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $userEdit = User::find($id);
        $roles = Role::all();
        return view('users/users-edit', compact('userEdit', 'roles'));
    }

    public function update($id,Request $request ) {
        $userEdit= User::find($id);
        $userEdit->name = $request->name;
        $userEdit->first_name = $request->first_name;
        $userEdit->age = $request->age;
        $userEdit->adress = $request->adress;
        $userEdit->email = $request->email;
        $userEdit->role_id = $request->role_id;
        $userEdit->updated_at = now();
        $userEdit->save();
        return redirect()->action([TitreController::class, 'index']);
    }
    
}
