<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;

class AuthController extends BaseController
{
    public function login(Request $request) {
        if (Auth::check()) {
            return response()->redirectTo('/');
        }

        if ($request->method() === "GET") {
            return view('login');
        }

        $email = $request->input('email', null);
        $password = $request->input('password', null);

        $user = User::where('email', $email)->first();

        if (!is_null($user)) {
            if (password_verify($password, $user->password)) {
                Auth::login($user);

                return response()->json([
                    'error' => false,
                    'message' => 'login_succees',
                    'redirect' => '/dashboard'
                ]);
            }

            return response()->json([
                'error' => true,
                'message' => 'incorrect_password',
            ], 400);
        }

        return response()->json([
            'error' => true,
            'message' => 'user_not_found',
        ], 400);
    }
}
