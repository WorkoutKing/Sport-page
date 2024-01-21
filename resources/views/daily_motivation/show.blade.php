@include('partials._nav')
@extends('main')


@section('content')

<h1 class="main_heading">Daily Motivation</h1>
<div class="container">
    <p>{{ $quote->text }}</p>
</div>
@endsection
