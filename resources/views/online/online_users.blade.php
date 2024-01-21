@include('partials._nav')
@extends('main')


@section('content')
@include('partials._header')
<h1 class="main_heading">Online Users</h1>
<div class="container">
    <div class="online-users">
        <ul>
            @foreach ($onlineUsers as $onlineUser)
                <a href="{{ route('profiles.show', $onlineUser->id) }}">{{ $onlineUser->name }}</a>
            @endforeach
        </ul>
    </div>
</div>
@endsection