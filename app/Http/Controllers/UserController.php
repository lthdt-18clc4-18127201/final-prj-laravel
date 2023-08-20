<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Query the database to find users matching the search query
        $users = User::where('name', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->get();

        // Pass the users and the query back to the search results view
        return view('users.search_results', ['users' => $users, 'query' => $query]);
    }
}
