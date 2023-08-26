<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QnAController extends Controller
{
    public function index()
    {
        return view('Q&A');
    }

    public function openQuestions()
    {
        return view('');
    }

    // public function showPost(Request $request)
    public function showPost()
    {
        // $query = $request->input('query');

        // $token = isset($_COOKIE['19CLC_Project_Token']) ? $_COOKIE['19CLC_Project_Token'] : null;
        // $tokenData = json_decode(base64_decode($token), true);

        // $post = DB::connection('mongodb')->collection('Post')
        //     ->where('ID', 'like', '%' . $query . '%')
        //     ->first();
        $post = DB::connection('mongodb')->collection('Post')
            ->where('ID', 17)
            ->first();

        // dd($post); // Debug the $post data before passing it to the view

        return view('post', compact('post'));
    }
}
