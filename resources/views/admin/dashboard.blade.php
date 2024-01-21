@extends('main')

@section('content')
@include('partials._nav')
        <div class="profile_content_width">
                <h1 class="main_heading">ADMIN ZONA</h1>
            <div class="admin-section">
            <a href="/admin/users">
                Users
            </a>
            <a href="/categories">
                Categories TOP!
            </a>
            <a href="skills/pending">
                Pending skills
            </a>
            <a href="/skill">
                Skill
            </a>
            <a href="/my-skills">
                My Skills
            </a>
            <a href="/skills/create">
                Skills create
            </a>
            <a href="/exercises">
                Excercises
            </a>
            <a href="/my-exercises">
                My Excercises
            </a>
            <a href="/exercises/create">
                Excercises create
            </a>
            <a href="/exercises/pending">
                Excercises Pending
            </a>
            <a href="/profile/settings">
                Settings
            </a>
            <a href="/logout">
                Logout
            </a>
            </div>
        <div>
@endsection

