@extends('layouts.app')

@section('content')
    <h1>Users</h1>

    @include('users.search') <!-- Include the search form -->

    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif
@endsection
