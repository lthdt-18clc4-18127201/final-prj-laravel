<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QnAController extends Controller
{
    public function index()
    {
        return view('QnA/QnA');
    }

    public function openQuestions()
    {
        return view('QnA/QnA');
    }

    public function createQuestions()
    {
        return view('QnA/createQnA');
    }

    public function showPost()
    {
        $randomId = rand(1, 150); // Generate a random number between 1 and 150
        $post = DB::connection('mongodb')->collection('Post')->where('ID', $randomId)->first();
        return view('QnA/post', compact('post'));
    }
}
