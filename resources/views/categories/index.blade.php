@extends('main')

@section('content')
@include('partials._nav')
    <div class="container">
        <h1 class="main_heading">Skills Tops!</h1>
        <div class="profile_content_width">
            <div class="admin-section">
                @foreach ($categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
