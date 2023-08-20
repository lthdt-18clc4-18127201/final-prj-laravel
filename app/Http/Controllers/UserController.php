<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}