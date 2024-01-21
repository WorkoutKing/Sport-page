@extends('main')

@section('content')
@include('partials._nav')
<h1 class="main_heading">Leaderboard of <i>{{ $category->name }} {{ $category->r_or_s }}</i></h1>
<div class="container">
  <div class="extra-pos-leaders">
    @foreach($topSkillUploaders as $user)
        <div class="top-user top-{{ $user->rank }}">
          <div class="top-rank-space1">
            <span class="top-rank">{{ $user->rank }}</span>
            <img class='profile_pic' src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture">
            <span class="top-user-name">
                {{ $user->name }}
            <span class="user-points-top">
              @foreach ($usersWithPointsAndCategories as $user1)
                @if($user->id == $user1->id)
                  User points: <b>{{ $user1->skills->sum(function ($skill) {
                    return $skill->category->points;
                      }) }}
                  </b>
                  <span>
                      Conquered Categories: <b>{{ $user->skills->groupBy('category_id')->count() }}</b>
                  </span>
                @endif
              @endforeach
            </span>
            </span>
          </div>
          <div class="top-rank-space1 extra-position-top-rank1">
            <span class="top-repetitions">
                <span class="extra-top-rep">{{ $user->number }}</span>
            </span>
            <span class="top-under-name-sc">score</span>
          </div>
      </div>
    @endforeach
  </div>
</div>



@endsection