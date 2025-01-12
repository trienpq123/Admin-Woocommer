<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function deleteUsers(Request $request)
    {
        return $this->userRepository->deleteAllUserApi($request->all());
    }

    public function postLoginApi(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
           $request->session()->regenerate();
            $user = Auth::user();
            $token = $user->createToken('myapp')->plainTextToken;
           return response()->json(['message' => 'Login Success','token' => $token], 200);
       }
       return response()->json(['message' => 'Login Fail'], 401);
    }

    public function loginApi(Request $request)
    {
        return $this->userRepository->loginApi($request->all());
    }
}

