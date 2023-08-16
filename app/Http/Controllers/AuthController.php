<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Login methods
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

    //Sign up methods
     public function showSignUpForm()
    {
        return view('Sign up');
    }

    public function signUp(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        // Check if email follows a typical email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return Response::json(['Invalid email format'], 400);
        }

        // Check if password and retype password match
        if ($password !== $passwordConfirmation) {
            return Response::json(['Passwords do not match'], 400);
        }

        // Query the MongoDB to check if the email is already present
        $user = DB::connection('mongodb')->collection('Account')->where('Email', $email)->first();
        if ($user) {
            return Response::json(['Email is already registered'], 400);
        }

        // Insert the user into the MongoDB (same code as before)
        DB::connection('mongodb')->collection('Account')->insert([
            'Email' => $email,
            'Nickname' => 'John Doe',
            'Description' => 'Nice to meet you~',
            'Following' => 0,
            'Follower' => 0,
            'Password' => $password,
            'career' => [
                [
                    'ID' => 0,
                    'company' => 'John Doe Inc',
                    'position' => 'CEO',
                    'start_date' => '1970-12-30',
                    'end_date' => '1972-01-15'
                ],
            ]
        ]);
        return redirect('/login')->with('success', 'Sign up successful! You can now log in.');
    }

    public function signUp_api(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        // Check if email follows a typical email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return Response::json(['message' => 'Invalid email format'], 400);
        }

        // Check if password and retype password match
        if ($password !== $passwordConfirmation) {
            return Response::json(['message' => 'Passwords do not match'], 400);
        }

        // Query the MongoDB to check if the email is already present
        $user = DB::connection('mongodb')->collection('Account')->where('Email', $email)->first();
        if ($user) {
            return Response::json(['message' => 'Email is already registered'], 400);
        }

        // Insert the user into the MongoDB (same code as before)
        DB::connection('mongodb')->collection('Account')->insert([
            'Email' => $email,
            'Nickname' => 'John Doe',
            'Description' => 'Nice to meet you~',
            'Following' => 0,
            'Follower' => 0,
            'Password' => $password,
            'career' => [
                [
                    'ID' => 0,
                    'company' => 'John Doe Inc',
                    'position' => 'CEO',
                    'start_date' => '1970-12-30',
                    'end_date' => '1972-01-15'
                ],
            ]
        ]);

        return Response::json(['message' => 'Sign up successful'], 201);
    }
}