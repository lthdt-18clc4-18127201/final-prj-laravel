<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use App\Models\Leaderboard; // Import your Leaderboard model

class LeaderboardController extends Controller
{
    public function index()
    {
        // // Fetch users' data from an API or database
        //  //$jsonPath = public_path('leaderboard.json');
        //  //$jsonData = File::get($jsonPath);
        
        //  //$users = json_decode($jsonData, true);  
        // $users=Leaderboard::all();
        // $users=$users->toArray();
        // // Sort users by contributions (post IDs) in descending order
        // usort($users, function ($a, $b) {
        //     return $b['contributions'] - $a['contributions'];
        // });
        // //$users = $users->sortByDesc('contributions');
        $users = DB::connection('mongodb')->collection('Account')
        ->orderBy('Follower', 'desc')
        ->limit(100)
        ->get(); //get data as array

        // query data using for loop and i
        // for($i = 0; $i < 100; $i++){
        //     echo $users[$i]['Nickname'];
        //     echo $users[$i]['Follower'];
        //     echo "<br>";
        // }

        //query data using foreach
        // foreach ($users as $user){
        //     echo $user['Nickname'];
        //     echo $user['Follower'];
        //     echo "<br>";
        // }

        return view('leaderboard.index', ['users' => $users]);
    }
}
