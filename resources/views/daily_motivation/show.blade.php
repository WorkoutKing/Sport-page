@extends('main')

@section('content')
@include('partials._nav')
<h1 class="main_heading">Daily Motivation</h1>
<div class="container">
    <p>{{ $quote->text }}</p>
</div>
@endsection
