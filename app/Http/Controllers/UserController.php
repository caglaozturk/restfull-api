<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * User details
     */
    public function details(Request $request){
        $users = User::all();
        
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
            'fullname' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);
 
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
 
        return response()->json(['user' => $user], 200);
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
            return response()->json(['user' => $data], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   
}
