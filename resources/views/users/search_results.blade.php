@extends('layouts.app')

@section('title', 'Searching...')

@section('css-path')
    {{ asset('css/search-result.css') }}
@endsection

@section('content')
    <div class="wrapper">
        <h1>Search Results for "{{ $query }}"</h1>

        @if (count($users) > 0)
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user['Nickname'] }} - {{ $user['Email'] }}</li>
                @endforeach
            </ul>
        @else
            <p>No results found for "{{ $query }}".</p>
        @endif
    </div>

@endsection
