@include('partials._nav')
@extends('main')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="main_heading">My SKills!</h1>
<div class="container">
    <div class="skills-position">
        @if ($userSkills->count() > 0)
            @foreach ($userSkills as $skill)
                <div class="card-ex">
                    <span class="skill-name">{{ $skill->category->name }}{{ $skill->category->r_or_s }}</span>
                    @if($skill->video)
                        <video width="100%" height="auto" controls>
                            <source src="{{ asset('storage/' . $skill->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        <img class="extra-skill-img" src="/images/skill.jpg" alt="skills">
                    @endif
                    <div class="container-info">
                        <span class="skill-rep">Time/Repetitions: <b>{{ $skill->number }}</b></span>
                        <span class="points-for-skill">Points: <b>{{ $skill->category->points }}</b></span>
                        <form action="{{ route('skills.notapprove', $skill->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="submit-skills">DELETE</button>
                        </form>
                        </div>
                </div>
            @endforeach
        @else
            <p>No skills found.</p>
        @endif
        {{ $userSkills->links() }}
    </div>
    <p style="margin:0px;padding:30px 0px;">*In the element title where is R or S, means repetitions ir seconds hold.</p>
</div>
@endsection
