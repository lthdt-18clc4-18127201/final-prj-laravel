@extends('layouts.app')

@section('title', "Searching for \"$query\"")

@section('css-path')
    {{ asset('css/search-results.css') }}
@endsection

@section('content')
    <div class="wrapper">
        <h1>Search Results for "{{ $query }}"</h1>

        @forelse ($users as $user)
            <ul>
                <li>{{ $user['Nickname'] }} - {{ $user['Email'] }}</li>
            </ul>
        @empty
            <p>No results found for "{{ $query }}".</p>
        @endforelse
    </div>
@endsection
