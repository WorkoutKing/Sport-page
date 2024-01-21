@extends('main')

@section('content')
@include('partials._nav')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    <div class="extra_hero_pad">
        <div class="hero_big">
            <div class="hero_h1">
                <h1 class="extra_profile">
                    DSTAR'S MADSTAR'S MADSTAR
                </h1>
            </div>
        </div>
    </div>
    <div class="profile_p">
        <div class="block_5_decoration"></div>
        <div class="block_6_decoration"></div>
        <div class="block_7_decoration"></div>
        <div class="block_8_decoration"></div>
    </div>
    <main>
        <div class="profile_section">
            @if (Auth::user()->profile_picture)
                <img class='profile_pic' src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="Profile Picture">
            @else
                <p>No profile picture</p>
            @endif

            <h2>User Level</h2>
            <div>
                Total Points: {{ $totalPoints }}
            </div>
            <div>
                Unique Categories: {{ $uniqueCategoriesCount }}
            </div>
             <p>Profile picture last updated:
{{ Auth::user()->profile_picture_updated_at ?
    \Carbon\Carbon::parse(Auth::user()->profile_picture_updated_at)->diffForHumans() :
    'Never'
}}
            </p>
        </div>
        <div class="profile_content_width">
            <div class="admin-section">
                <p></p>
                <a href="/categories">
                    Categories TOP!
                </a>
                <a href="exercises/create">
                    Excercises create
                </a>
                <a href="/skills/create">
                    Skills create
                </a>
                <a href="/my-exercises">
                    My Excercises
                </a>
                <a href="/my-skills">
                    My Skills
                </a>
                <a href="/profile/settings">
                    Settings
                </a>
                <a href="/logout">
                    Logout
                </a>
            </div>
        </div>
    </main>
@endsection
