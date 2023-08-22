@extends('layouts.app')

@section('title', 'Profile')

@section('css-path')
    {{ asset('css/profile.css') }}
@endsection

@section('content')
    {{-- start search feature --}}
    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif
    {{-- end search feature --}}

    <div class="wrapper">
        <div class="profile-card">
            <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="User Profile" class="profile-image" />
            <div class="profile-name">{{ $user['Nickname'] }}</div>
            <div class="profile-email">{{ $user['Email'] }}</div>
            <button class="profile-button">Edit Profile</button>
        </div>


        {{-- 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Your Profile</div>
                        <div class="card-body">
                            <div class="profile">
                                <img src="{{ asset('profile-image.jpg') }}" alt="User Profile" class="profile-image">
                                <div class="profile-name">{{ $user['Nickname'] }}</div>
                                <div class="profile-email">{{ $user['Email'] }}</div>
                                <!-- Display other profile information here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

@endsection
