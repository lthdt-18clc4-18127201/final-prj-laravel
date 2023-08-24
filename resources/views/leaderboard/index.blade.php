@extends('layouts.app')

@section('title', 'Leaderboard')

@section('css-path')
    {{ asset('css/leaderboard.css') }}
@endsection

@section('content')
    <div class="wrapper">
        <h1 class="leaderboard-title">Top Users</h1>
        <table class="leaderboard-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Following</th>
                    <th>Follower</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user['Nickname'] }}</td>
                        <td>{{ $user['Following'] }}</td>
                        <td>{{ $user['Follower'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
