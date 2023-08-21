@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- dummy box -->
    <div style="height: 120px;"></div>

    {{-- @include('users.search') <!-- Include the search form --> --}}

    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif


    <h1 style="width: 100%;text-align:center;">Welcome to the Home Page</h1>
    <p style="width: 100%;text-align:center;">This is the content of your home page.</p>

    <!-- dummy box -->
    <div style="height: 60px;"></div>
@endsection
