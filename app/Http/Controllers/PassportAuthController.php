<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

class PassportAuthController extends Controller
{
    /**
     * User Detail
    */
    public function details(Request $request){
        $users = User::with('addresses')->get();
        
        return response()->json([
            'success' => true,
            'users' => $users
        ]);
    }
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json(['user' => $user, 'access_token' => $token], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['user' => $data, 'access_token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   
}
