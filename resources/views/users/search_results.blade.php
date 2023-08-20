@extends('layouts.app')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @if (count($users) > 0)
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>
    @else
        <p>No results found for "{{ $query }}".</p>
    @endif
@endsection
