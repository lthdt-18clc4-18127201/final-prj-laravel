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
            <a class="profile-email" href="mailto:{{ $user['Email'] }}">{{ $user['Email'] }}</a>
            <div class="profile-description">{{ $user['Description'] }}</div>
            <div class="profile-follower">Follower: {{ $user['Follower'] }}</div>
            <div class="profile-following">Following: {{ $user['Following'] }}</div>

            {{-- <div class="profile-company">{{ $user['career'][0]['Company'] }}</div> --}}

            @if (isset($user['career']) && count($user['career']) > 0)
                <div class="profile-company" style="display: inline-block">
                    <strong>{{ $user['career'][0]['company'] }}</strong> {{ $user['career'][0]['position'] }} — <span
                        class="text-muted"> {{ \Carbon\Carbon::parse($user['career'][0]['start_date'])->format('m.Y') }} ~
                        {{ \Carbon\Carbon::parse($user['career'][0]['end_date'])->format('m.Y') }}
                    </span>
                </div>
                <br>
            @endif

            <button class="edit-profile-button">Edit Profile</button>
        </div>
    </div>

@endsection
