<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Jobs\WelcomeMailJob;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(UserRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $mail = $request->email;
        // Mail::to("ahmed.mostafa.faisl@gmail.com")->send(new WelcomeMail());
        WelcomeMailJob::dispatch($mail);
        $token = $user->createToken('Pelcro')->accessToken;
        return response()->json(['token' => $token], 200);
    }

    public function login(UserRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('Pelcro')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
}