<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Post;
use function PHPUnit\Framework\isNan;

class QnAController extends Controller
{
    public function index()
    {
        return view('QnA/QnA');
    }

    public function openQuestions()
    {
        $post = Post::skip(10)->limit(1)->get();
        return view('QnA/post', compact('post'));
    }

    public function createQuestions()
    {
        return view('QnA/createQnA');
    }

    public function showPostDetail($id)
    {
        $id = Post::find($id)->_id;
        $post = Post::where('_id', $id)->first();
        return view('QnA/post', compact('post'));

    }

    public function getSuggAndNewPosts() {
        $suggestPosts = Post::limit(5)->get();
        $newestPosts = Post::skip(5)->limit(10)->get();
        return view('QnA/QnA', [
            'suggestPosts' => $suggestPosts,
            'newestPosts' => $newestPosts
        ]);
    }
}
