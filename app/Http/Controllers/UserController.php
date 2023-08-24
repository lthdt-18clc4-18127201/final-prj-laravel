<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = DB::connection('mongodb')->collection('Account')
            ->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('Nickname', 'like', '%' . $query . '%')
                    ->orWhere('Email', 'like', '%' . $query . '%');
            })
            ->get();

        return view('users.search_results', ['users' => $users, 'query' => $query]);
    }

    public function showProfile()
    {
        $token = isset($_COOKIE['19CLC_Project_Token']) ? $_COOKIE['19CLC_Project_Token'] : null;
        $tokenData = json_decode(base64_decode($token), true);

        $user = DB::connection('mongodb')->collection('Account')
            ->where('Email', 'like', '%' . $tokenData['email'] . '%')
            ->first();

        return view('users.profile', compact('user'));
    }

    public function apiSearch(Request $request)
    {
        $query = $request->input('query');

        // Query the MongoDB to perform the search
        $users = DB::connection('mongodb')->collection('Account')
            ->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('Nickname', 'like', '%' . $query . '%')
                    ->orWhere('Email', 'like', '%' . $query . '%');
            })
            ->get();

        return response()->json(['results' => $users]);
    }
}
