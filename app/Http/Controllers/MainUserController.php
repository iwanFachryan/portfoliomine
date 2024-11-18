<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserChangePassRequest;
use App\Http\Requests\UserForgotPassRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserNewPassRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MainUserController extends Controller
{

    public function forgotPassword()
    {
        return view('pages.auth.forgotpass');
    }

    public function newPassword()
    {
        return view('pages.auth.newpass');
    }

    public function AlreadyRegister(UserRegisterRequest $request): JsonResponse 
    {
        $data = $request->validated();
        
        $existingUser = User::where('username', $data['username'])
                            ->orWhere('name', $data['name'])
                            ->orWhere('email', $data['email'])
                            ->exists();

        if ($existingUser) {
            throw new HttpResponseException(response()->json([
                "errors" => [
                    "username" => [
                        "Username already registered."
                        ],
                        "name" => [
                           "Name already Registered." 
                        ],
                        "email" => [
                           "Email already Registered." 
                        ]
                ]
            ], 400));
        }
                
        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();
        
        //return response()->json([
            //'message' => 'User successfully registered',
            //'user' => new UserResource($user)
        //], 201);
        return (new UserResource($user))->response()->setStatusCode(201);
        //return response()->json(new UserResource($user), 201);
        //return view('pages.auth.login', ['User' => User::all()]);
    }

    public function AlreadyLogin(UserLoginRequest $request): UserResource 
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password)) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                       "Email or password wrong." 
                    ]
                ]
            ], 401));
        }
        $user->token = Str::uuid()->toString();
        $user->save();

        return new UserResource($user);
    }

    public function forgotpass(UserForgotPassRequest $request): JsonResponse 
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            return response()->json([
                "errors" => ["email" => ["Email not found."]]
            ], 400);
        }
        $user->token = Str::random(60);
        $user->resetToken_expires_at = Carbon::now()->addHour();
        $user->save();

        // Send reset email
        Mail::to($user->email)->send(new ResetPasswordMail($user->token, $user->email));

        return response()->json(['message' => 'Reset link sent successfully.'], 200);
    }

    public function newpass(UserNewPassRequest $request): JsonResponse
    {
        $data = $request->validated();
        $user = User::where('email', $request->email)->where('token', $request->token)->first();

        if (!$user || Carbon::now()->greaterThan($user->resetToken_expires_at)) {
            return response()->json([
                "errors" => ["message" => ["Invalid or expired token."]]
            ], 400);
        }

        // Update password and invalidate the reset token
        $user->password = Hash::make($data['password']);
        $user->token = null;
        $user->resetToken_expires_at = null;
        $user->save();

        return response()->json(['message' => 'Password changed successfully.'], 200);
    }
}
