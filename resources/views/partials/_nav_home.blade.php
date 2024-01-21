<header>
      <div class="nav-menu">
        <div class="branding-web">
          <a class="nav-brand-name" href='/'><img src="/images/mdlogo.png"></a>
        </div>
        <div class="nav-links">
          <ul class="top-nav">
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="">Inspiration</a></li>
            <li><a href="">Challenges</a></li>
            @if(auth()->check() && auth()->user()->hasRole('admin'))
              <li><a href="/admin">Admin zona</a></li>
            @endif
            @if(Auth::check())
                <li><a href="/profile">Profile</a></li>
            @else
                <li><a href="/login">Login</a></li>
            @endif
          </ul>
        </div>
      </div>
      <div class="hero_big">
        <div class="hero_h1">
          <div class="wrapper0">
            <div class="marquee0">
              <h1>
                AR'S MADSTAR'S MAD
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="hero_blocks">
        <div class="block_1">
          <div class="block_1_divider"></div>
          <div class="block_1_mot">
            <div class="block_1_mot_deep">
              Unleash your true potential with the power of calisthenics! Dare
              to defy gravity, build insane strength, and sculpt the ultimate
              physique with our Madstars Calisthenics community.
            </div>
          </div>
        </div>
        <div class="block_2">
          <div class="block_2_img">
            <img
              src="https://images.unsplash.com/photo-1606689845968-30c7c55c71d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZHN0YW5kfGVufDB8fDB8fHww&w=1000&q=80"
              alt="Handstand Wide"
            />
          </div>
        </div>
        <div class="block_3">
          <div class="block_3_img">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Planche.jpg"
              alt="Full Planche"
            />
          </div>
        </div>
        <div class="block_4">
          <div class="block_4_img">
            <img src="https://www.mpcalisthenics.com/wp-content/uploads/2021/06/Robbie-Preston-Front-Lever.jpg"
              alt="" />
          </div>
        </div>
        <div class="block_5_decoration"></div>
        <div class="block_6_decoration"></div>
        <div class="block_7_decoration"></div>
      </div>
    </header>