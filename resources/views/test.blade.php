@extends('layouts.app')

@section('title', 'Test page')

@section('content')
    {{-- <!-- dummy box -->
    <div style="height: 120px;"></div> --}}
    {{-- @include('users.search') <!-- Include the search form --> --}}

    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif


    <div class="wrapper">
        <h1>Test Page</h1>
        <p>This is a test page content.</p>
    </div>
@endsection
