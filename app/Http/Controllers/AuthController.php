<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AuthController extends Controller
{
    //----------------------------------------------------------------Login methods----------------------------------------------------------------
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
            $expiration = time() + (24 * 60 *60); //token expiration - set as 24 hours

            $payload = [ //token values
                'email' => $email,
                'exp' => $expiration,
            ];
            $Token = base64_encode(json_encode($payload));
            setcookie('19CLC_Project_Token', $Token, $expiration, '/');

            return Response::json(['message' => 'Login successful'], 200);

        } else {
            return Response::json(['message' => 'Login failed'], 401);
        }
    }

    //----------------------------------------------------------------Sign up methods----------------------------------------------------------------
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

    //----------------------------------------------------------------Google OAuth method----------------------------------------------------------------
    public function redirectToGoogleAuth()
    {
        $authURL = 'https://accounts.google.com/o/oauth2/auth';
        $params = [
            'response_type' => 'code',
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'scope' => 'email profile',
        ];
        $authRedirect = $authURL . '?' . http_build_query($params);

    return redirect($authRedirect);
    }

    public function handleGoogleCallback(Request $request)
    {
        $tokenEndpoint = 'https://accounts.google.com/o/oauth2/token';
        $params = [
            'code' => $request->query('code'),
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'client_secret' => env('GOOGLE_CLIENT_SECRET'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'grant_type' => 'authorization_code',
        ];

        $tokenResponse = Http::withOptions(['verify' => false])->post($tokenEndpoint, $params)->json();
        $accessToken = $tokenResponse['access_token'];

        $userInfoEndpoint = 'https://www.googleapis.com/oauth2/v2/userinfo';
        $userInfo = Http::withToken($accessToken)->withOptions(['verify' => false])->get($userInfoEndpoint)->json();

        // Query the MongoDB to check if the email is already present
        $user = DB::connection('mongodb')->collection('Account')->where('Email', $userInfo['email'])->first();

        // Log the user in and return a successful message
        if ($user) {
            
            $email = $userInfo['email'];
            $expiration = time() + (24 * 60 *60); //token expiration - set as 24 hours

            $payload = [ //token values
                'email' => $email,
                'exp' => $expiration,
            ];
            $Token = base64_encode(json_encode($payload));
            setcookie('19CLC_Project_Token', $Token, $expiration, '/');

            return Response::json(['message' => 'Login successful'], 200);
        } else {
            // Insert the user into the MongoDB with a null password
            DB::connection('mongodb')->collection('Account')->insert([
                'Email' => $userInfo['email'],
                'Nickname' => 'John Doe',
                'Description' => 'Nice to meet you~',
                'Following' => 0,
                'Follower' => 0,
                'Password' => null,
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

            // Log the user in and return a successful message
            $email = $userInfo['email'];
            $expiration = time() + (24 * 60 *60); //token expiration - set as 24 hours

            $payload = [ //token values
                'email' => $email,
                'exp' => $expiration,
            ];
            $Token = base64_encode(json_encode($payload));
            setcookie('19CLC_Project_Token', $Token, $expiration, '/');
            return Response::json(['message' => 'Sign up and login successful'], 200);
        }
    }

    public function handleGoogleCallbackAPI(Request $request)
    {
        $tokenEndpoint = 'https://accounts.google.com/o/oauth2/token';
        $params = [
            'code' => $request->input('code'),
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'client_secret' => env('GOOGLE_CLIENT_SECRET'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'grant_type' => 'authorization_code',
        ];

        try {
            $tokenResponse = Http::post($tokenEndpoint, $params)->json();
            $accessToken = $tokenResponse['access_token'];

            $userInfoEndpoint = 'https://www.googleapis.com/oauth2/v2/userinfo';
            $userInfo = Http::withToken($accessToken)->get($userInfoEndpoint)->json();

            // Query the MongoDB to check if the email is already present
            $user = DB::connection('mongodb')->collection('Account')->where('Email', $userInfo['email'])->first();

            if ($user) {
                // Log the user in and return a successful message
                return response()->json(['message' => 'Login successful'], 200);
            } else {
                // Insert the user into the MongoDB with a null password
                DB::connection('mongodb')->collection('Account')->insert([
                    'Email' => $userInfo['email'],
                    'Nickname' => 'John Doe', // Set a default nickname
                    'Password' => null,
                    'career' => [],
                    // Other fields here...
                ]);

                // Log the user in and return a successful message
                return response()->json(['message' => 'Sign up and login successful'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'HTTP request error: ' . $e->getMessage()], 500);
        }
    }
}