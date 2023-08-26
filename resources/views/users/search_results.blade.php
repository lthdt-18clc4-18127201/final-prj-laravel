@extends('layouts.app')

@section('title', "Searching for \"$query\"")

@section('css-path')
    {{ asset('css/search-results.css') }}
@endsection

@section('content')
    <div class="search-results">
        <h1>Search Results for "{{ $query }}"</h1>

        <ul class="user-list">
            @forelse ($users as $user)
                <li class="user-item">
                    <form action="{{ route('users.profile') }}" method="GET">
                        <input type="hidden" name="query" value="{{ $user['Email'] }}">
                        <button type="submit" class="profile-button">
                            {{ $user['Nickname'] }} - {{ $user['Email'] }}
                        </button>
                    </form>
                </li>
            @empty
                <li class="no-results">
                    No results found for "{{ $query }}".
                </li>
            @endforelse
        </ul>
    </div>
@endsection
