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
            <div class="profile-header">
                <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="User Profile" class="profile-image" />
                <div class="profile-name">{{ $user['Nickname'] }}</div>
                <a class="profile-email" href="mailto:{{ $user['Email'] }}">{{ $user['Email'] }}</a>
            </div>
            <div class="profile-details">
                <div class="profile-follower">Follower: {{ $user['Follower'] }}</div>
                <div class="profile-following">Following: {{ $user['Following'] }}</div>
                <div class="profile-description">{{ $user['Description'] }}</div>

                @if (isset($user['Careers']) && count($user['Careers']) > 0)
                    <div class="profile-career">
                        <h2>Career</h2>
                        @foreach ($user['Careers'] as $career)
                            <div class="profile-company">
                                <strong>{{ $career['Company'] }}</strong> {{ $career['Position'] }}<br>
                                <span class="text-muted">
                                    {{ \Carbon\Carbon::parse($career['Start_Date'])->format('M Y') }} -
                                    @if ($career['End_Date'])
                                        {{ \Carbon\Carbon::parse($career['End_Date'])->format('M Y') }}
                                    @else
                                        Present
                                    @endif
                                </span>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($myprofile)
                    <button class="edit-profile-button">Edit Profile</button>
                @else
                    <button class="edit-profile-button">Follow</button>
                @endif
            </div>
        </div>
    </div>

@endsection
