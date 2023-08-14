<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        

        // Query the MongoDB
        $user = DB::connection('mongodb')->collection('Account')->where('Email', $email)->first();


        if ($user && $user['Password'] === $password) {
            return Response::json(['message' => 'Login successful'], 200);
        } else {
            return Response::json(['message' => 'Login failed'], 401);
        }
    }
}