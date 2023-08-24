<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnAController extends Controller
{
    public function index() {
        return view('Q&A');
    }

    public function openQuestions() {
        return view('');
    }
}
