@extends('main')

@section('content')
@include('partials._nav_home')
    <main>
      <div class="container">
        <div class="daily_motivation">
          <span class="daily_motivation_head">
            Daily tips
          </span>
          <div class="quote_daily">
                @if(isset($randomQuote))
                  {!! $randomQuote->text !!}
              @endif
          </div>
        </div>
      </div>
      <div class="top_3">
        <div class="container top_3_deep">
          <div class="pull_ups_3">
            <div class="top_3_img">
              <img src="https://cdn.shopify.com/s/files/1/1182/8528/articles/pull-ups-for-bigger-back.jpg?v=1559731548" />
            </div>
            <div class="top_3_text">
              <div class="top_3_first_line">Top Pull-ups</div>
              <div class="top_3_second">Top pull-ups crushers</div>
            </div>
            <div class="top_3_icon_1"><i class="fas fa-chevron-right"></i></div>
          </div>
            <div class="top_3_pull_container">
              ✩ Top 3 Pull Ups ✩
                <div class="top3-singles">
                @foreach ($usersByExerciseType['pull-ups'] as $user)
                    <div class="top3-single">
                      <span>{{ $user->name }}</span>
                      {{ $user->exercises->where('exercise_type', 'pull-ups')->max('repetitions') }} repetitions</div>
                @endforeach
                </div>
            </div>
          <div class="dips_3">
            <div class="top_3_img">
              <img src="https://t4.ftcdn.net/jpg/03/45/30/91/360_F_345309108_JcuvEw7WiBGh6BaXRm1DfSSu7tLWUy0e.jpg" />
            </div>
            <div class="top_3_text">
              <div class="top_3_first_line">Dips Demolition</div>
              <div class="top_3_second">Dip your way to victory</div>
            </div>
            <div class="top_3_icon_2"><i class="fas fa-chevron-right"></i></div>
          </div>
             <div class="top_3_dips_container">
                ✩ Top 3 Dips ✩
                <div class="top3-singles">
                @foreach ($usersByExerciseType['dips'] as $user)
                    <div class="top3-single">
                      <span>{{ $user->name }}</span>
                      <span>{{ $user->exercises->where('exercise_type', 'dips')->max('repetitions') }} repetitions</span>
                    </div>
                @endforeach
                </div>
            </div>
          <div class="push_ups_3">
            <div class="top_3_img">
              <img src="https://hips.hearstapps.com/hmg-prod/images/young-man-performing-press-ups-on-kettlebells-in-royalty-free-image-1585844910.jpg?crop=0.668xw:1.00xh;0.128xw,0&resize=1200:*" />
            </div>
            <div class="top_3_text">
              <div class="top_3_first_line">Push-up Powerhouse</div>
              <div class="top_3_second">Push towards greatness</div>
            </div>
            <div class="top_3_icon_3"><i class="fas fa-chevron-right"></i></div>
          </div>
            <div class="top_3_push_container">
                 ✩ Top 3 Push Ups ✩
                <div class="top3-singles">
                @foreach ($usersByExerciseType['push-ups'] as $user)
                    <div class="top3-single">
                      <span>{{ $user->name }}</span>
                      <span>{{ $user->exercises->where('exercise_type', 'push-ups')->max('repetitions') }} repetitions</span>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="newest_post_of_page">
          <span class="posts_h_heading">Newest posts</span>
          <div class="all_newest_posts_h">

          </div>
        </div>
      </div>
      <div class="container">
        <div class="about_cali_section">
          <span class="about_h_heading">About Calisthenics</span>
          <div class="about_us_info">

          </div>
        </div>
      </div>
    </main>
       <script>
          $(document).ready(function() {
            $('.top_3_icon_1').click(function() {
              $('.top_3_pull_container').toggleClass('show');
              $('.pull_ups_3').toggleClass('active-e');
              $('.top_3_dips_container').removeClass('show');
              $('.dips_3').removeClass('active-e');
              $('.top_3_push_container').removeClass('show');
              $('.push_ups_3').removeClass('active-e');
            });

            $('.top_3_icon_2').click(function() {
              $('.top_3_pull_container').removeClass('show');
              $('.pull_ups_3').removeClass('active-e');
              $('.top_3_dips_container').toggleClass('show');
              $('.dips_3').toggleClass('active-e');
              $('.top_3_push_container').removeClass('show');
              $('.push_ups_3').removeClass('active-e');
            });

            $('.top_3_icon_3').click(function() {
              $('.top_3_pull_container').removeClass('show');
              $('.pull_ups_3').removeClass('active-e');
              $('.top_3_dips_container').removeClass('show');
              $('.dips_3').removeClass('active-e');
              $('.top_3_push_container').toggleClass('show');
              $('.push_ups_3').toggleClass('active-e');
            });
          });
        </script>
@endsection