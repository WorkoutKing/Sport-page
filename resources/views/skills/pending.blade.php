@extends('main')


@section('content')
@include('partials._nav')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="main_heading">Pending Skills</h1>
<div class="container">
    <div class="skills-position">
        @if ($pendingSkills->count() > 0)
            @foreach ($pendingSkills as $skill)
                <div class="card-ex">
                    <span class="skill-name">{{ $skill->category->name }} {{ $skill->category->r_or_s }}</span>
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
                        <form method="POST" action="{{ route('skills.approve', $skill) }}">
                            @csrf
                            <button type="submit" class="submit-skills approve-skills">Approve</button>
                        </form>

                        <form action="{{ route('skills.notapprove', $skill->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="submit-skills not-approve-skill">Not Approve</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <p>No skills found that require approval.</p>
        @endif
    </div>
    <p style="margin:0px;padding:30px 0px;">*In the element title where is R or S, means repetitions ir seconds hold.</p>
</div>
@endsection

