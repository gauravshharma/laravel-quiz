<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $user = User::where('email', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Success', 'Login success !');
            return redirect()->intended('/dashboard');
        } else {
            Alert::error('Error', 'Login failed !');
            return redirect('/login');
        }
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'passwordConfirm' => 'required|same:password'
        ]);

        $validated['password'] = Hash::make($request['password']);
        
        

        $user = User::create($validated);

        if (isset($user)){
            if($request->user==$user->email){
                if(Hash::check($request->pass,$user->password)){
                    $request->session()->put('id',$user->id);
                    UserRole::create([
                        'user_id'=>$user->id,
                        'role_name'=>'user'
                    ]);
                }
            }
        }
        Alert::success('Success', 'User created successfully!');
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Success', 'Log out success !');
        return redirect('/login');
    }
}
