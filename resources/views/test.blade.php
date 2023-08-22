@extends('layouts.app')

@section('title', 'Test page')

@section('content')
    {{-- start search feature --}}
    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif
    {{-- end search feature --}}

    <div class="wrapper">
        <h1>Test Page</h1>
        <p>This is a test page content.</p>
    </div>
@endsection
