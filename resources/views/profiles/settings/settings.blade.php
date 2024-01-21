@include('partials._nav')
@extends('main')

@section('content')
    <div class="container">
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
        <h1 class="main_heading">Update your profile!</h1>
        <form method="POST" action="{{ route('update-profile-picture') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="profile_picture">
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection
