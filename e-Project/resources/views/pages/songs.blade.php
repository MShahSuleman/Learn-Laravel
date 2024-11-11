@php
    $cardData = session('card_data');
    // Clear the session data after retrieving it
    session()->forget('card_data');
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"
    />
    <link rel="shortcut icon" href="/src/logo.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('src/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('/src/index-songs/songs.css') }}" />
    
    <link rel="icon" href="https://www.scdn.co/i/_global/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
    <title>Open Letter</title>
  </head>
  <body>
    <custom-header>
      <header class="" style="height: 150px">
        <div class="container">
          <div class="header">
            <span class="logo">
              <a href="./index.html">
               
                <img src="/src/logo.png" alt="" height="60px" />
              </a>
            </span>
            <nav class="navigation">
              <ul>
                <li>
                  <a class="navigation-link" href="/premium.html">Premium</a>
                </li>
                <li>
                  <a class="navigation-link" href="/Spotify-songs/songs.html"
                    >Songs</a
                  >
                </li>
                <li>
                  <a class="navigation-link" href="/help.html">Help</a>
                </li>
                <li>
                  <a class="navigation-link" href="/download.html">Download</a>
                </li>
                <li class="vertical_separator"></li>
                <li>
                  <button class="profile_btn" type="button" onclick="profile()">
                    <div class="usericon">
                      <svg
                        viewBox="0 0 1024 1024"
                        aria-labelledby="mh-usericon-title"
                      >
                        <title id="mh-usericon-title">Profil</title>
                        <path
                          d="M730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084Q106.388 763.84 84.96 802.41t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"
                        ></path>
                      </svg>
                    </div>
                    <div class="profile-title">
                      <span>Profile</span>
                      <svg viewBox="0 0 1024 1024">
                        <path
                          d="M476.455 806.696L95.291 425.532Q80.67 410.911 80.67 390.239t14.621-34.789 35.293-14.117 34.789 14.117L508.219 698.8l349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789L546.537 800.142q-19.159 19.159-38.318 19.159t-31.764-12.605z"
                        ></path>
                      </svg>
                    </div>
                  </button>
                  <div id="profileMenu" class="profileMenu">
                    {{-- <ul class="">
                      <li class="">
                        <a class="" href="/Spotify-songs/songs.html"
                          >Welcome</a
                        >
                      </li>
                    </ul> --}}
                  </div>
                </li>
              </ul>
            </nav>
            <div class="profile_icon-mobile">
              <div class="usericon">
                <a href="">
                  <svg
                    viewBox="0 0 1024 1024"
                    aria-labelledby="mh-usericon-title"
                  >
                    <title id="mh-usericon-title">Profil</title>
                    <path
                      d="M730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084Q106.388 763.84 84.96 802.41t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"
                    ></path>
                  </svg>
                </a>
              </div>
              <div class="container-togg" onclick="toggler(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
            </div>
          </div>
          <div id="mySidenav" class="sidenav">
            <ul>
              <li>
                <a class="sidenav-link" href="/premium.html">Premium</a>
              </li>
              <li>
                <a class="sidenav-link" href="/help.html">Help</a>
              </li>
              <li>
                <a class="sidenav-link" href="/download.html">Download</a>
              </li>
              <li class="h_separator"></li>
              <li>
                <a class="sidenav-link light" href="#">Welcome</a>
              </li>
              <li>
                <a class="sidenav-link light son" href="/index.html">Logout</a>
              </li>
            </ul>
            <span class="sidenav-logo">
              <a href="./index.html">
                <svg
                  viewBox="0 0 63 20"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMin meet"
                >
                  <g fill-rule="evenodd" class="svelte-1gcdbl9">
                    <path
                      d="M61.842 9.506a1.02 1.02 0 0 1-1.023-1.024c0-.562.453-1.03 1.029-1.03a1.02 1.02 0 0 1 1.023 1.024 1.03 1.03 0 0 1-1.029 1.03m.006-1.952a.915.915 0 0 0-.922.928c0 .51.394.921.916.921a.916.916 0 0 0 .922-.927.908.908 0 0 0-.916-.922m.226 1.027l.29.406h-.244l-.26-.372h-.225v.372h-.204V7.912h.48c.249 0 .413.128.413.343 0 .176-.102.284-.25.326m-.172-.485h-.267v.34h.267c.133 0 .212-.065.212-.17 0-.11-.08-.17-.212-.17m-12.804-3.52a1.043 1.043 0 1 0-.001 2.086 1.043 1.043 0 0 0 0-2.087m.72 2.89h-1.454a.107.107 0 0 0-.106.107v6.346c0 .06.047.107.106.107h1.455a.107.107 0 0 0 .107-.107V7.572a.107.107 0 0 0-.107-.107m3.233.006v-.2c0-.592.227-.856.736-.856.303 0 .546.06.82.152a.106.106 0 0 0 .14-.102V5.24a.107.107 0 0 0-.076-.102 3.993 3.993 0 0 0-1.21-.174c-1.343 0-2.053.757-2.053 2.188v.308h-.699a.107.107 0 0 0-.107.106v1.257c0 .059.048.107.107.107h.699v4.99c0 .058.047.106.106.106h1.455a.107.107 0 0 0 .106-.107v-4.99h1.358l2.081 4.99c-.236.523-.468.628-.785.628-.257 0-.527-.077-.803-.228a.109.109 0 0 0-.084-.008.106.106 0 0 0-.063.058l-.493 1.081a.106.106 0 0 0 .045.138c.515.279.98.398 1.554.398 1.074 0 1.668-.5 2.191-1.847L60.6 7.617a.106.106 0 0 0-.099-.146h-1.514a.107.107 0 0 0-.1.072l-1.552 4.431-1.7-4.434a.106.106 0 0 0-.099-.069h-2.485m-5.577-.006h-1.6V5.828a.106.106 0 0 0-.107-.106h-1.455a.107.107 0 0 0-.106.106v1.637h-.7a.106.106 0 0 0-.106.107v1.25c0 .059.048.107.106.107h.7v3.234c0 1.308.65 1.97 1.934 1.97.522 0 .954-.107 1.362-.338a.106.106 0 0 0 .054-.093v-1.19a.106.106 0 0 0-.154-.096c-.28.141-.551.206-.854.206-.467 0-.675-.211-.675-.686V8.929h1.6a.106.106 0 0 0 .107-.107v-1.25a.106.106 0 0 0-.106-.107m-7.671-.133c-1.96 0-3.497 1.51-3.497 3.437 0 1.907 1.526 3.4 3.473 3.4 1.967 0 3.508-1.504 3.508-3.424 0-1.914-1.53-3.413-3.484-3.413m0 5.362c-1.043 0-1.83-.838-1.83-1.95 0-1.115.76-1.924 1.806-1.924 1.05 0 1.84.838 1.84 1.95 0 1.115-.763 1.924-1.816 1.924m-7.014-5.362c-.82 0-1.492.323-2.046.984v-.744a.107.107 0 0 0-.106-.107h-1.455a.107.107 0 0 0-.106.107v8.27c0 .058.048.106.106.106h1.455a.107.107 0 0 0 .106-.106v-2.61c.555.621 1.227.925 2.046.925 1.522 0 3.063-1.172 3.063-3.412s-1.54-3.413-3.063-3.413m1.372 3.413c0 1.14-.703 1.937-1.709 1.937-.995 0-1.745-.833-1.745-1.937s.75-1.937 1.745-1.937c.99 0 1.71.814 1.71 1.937m-8.437-1.81c-1.624-.388-1.913-.66-1.913-1.231 0-.54.508-.903 1.264-.903.732 0 1.459.275 2.22.843a.107.107 0 0 0 .15-.023l.794-1.119a.107.107 0 0 0-.02-.144c-.906-.728-1.927-1.081-3.12-1.081-1.755 0-2.98 1.052-2.98 2.559 0 1.615 1.057 2.187 2.884 2.628 1.554.358 1.817.658 1.817 1.195 0 .594-.53.963-1.385.963-.948 0-1.721-.32-2.587-1.068a.11.11 0 0 0-.078-.026.105.105 0 0 0-.073.038l-.89 1.058a.105.105 0 0 0 .011.148 5.303 5.303 0 0 0 3.581 1.373c1.89 0 3.112-1.033 3.112-2.631 0-1.351-.807-2.098-2.787-2.58M9.507.305a9.41 9.41 0 1 0 0 18.82 9.41 9.41 0 0 0 0-18.82m4.316 13.572a.586.586 0 0 1-.807.195c-2.21-1.35-4.99-1.655-8.266-.907a.586.586 0 1 1-.261-1.143c3.584-.82 6.659-.467 9.139 1.049.276.169.363.53.195.806m1.15-2.562a.734.734 0 0 1-1.008.242c-2.529-1.555-6.385-2.005-9.377-1.097a.735.735 0 0 1-.426-1.404c3.418-1.037 7.666-.534 10.57 1.25a.734.734 0 0 1 .242 1.01m.1-2.669C12.04 6.846 7.036 6.68 4.141 7.56a.88.88 0 1 1-.511-1.684c3.323-1.01 8.849-.814 12.34 1.258a.88.88 0 0 1-.898 1.514"
                    ></path>
                  </g>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </header>
    </custom-header>
    <!--Header-->

    <div class="container" >
      <div class="content" style="margin-top: 180px;">
        <video src="{{ asset($song->video_path) }}" height="250px" width="250px" id="videoPlayer" ></video>
        <div class="details">
          <h2>{{ $song->title }}</h2>
          <p>{{ $song->artist }} • {{ $song->year }} • 1 song, {{ $song->duration }}</p>
          <button class="play-button" id="headerPlayBtn" >▶</button>
      </div>
      </div>
      <div class="tracklist">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th></th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <p>Titliaan</p>
                <p>Talha Anjum, Harrdy Sandhu, Sargun Mehta</p>
              </td>
              <td></td>
              <td>3:15</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="more-by-artist">
        <h3>More by {{ $song->artist }}</h3>
        @foreach($moreSongs as $moreSong)
        <div class="card" data-video-src="{{ asset('/src/index-songs/lajawab-2/Lajawab-2.mp4') }}" data-song-img="/src/lajawab-2/Lajawab 2.jpg" data-song-title="Lajawab 2" data-song-artist="Rafey Anwer and Taimoor Baig">   
          {{-- First card start --}}
          <a href="{{ route('song.show', $moreSong->id)}}">
          <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
              <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
          </svg>
          <img alt="Album cover of Atif Aslam Mix" height="200" src="{{ asset($moreSong->image_path) }}" width="200"/>
          <div class="title">
            {{ $moreSong->title }}
          </div>
          <div class="description card-title">
            {{ $moreSong->artist }}
          </div>
        </a>
        @endforeach
      </div> 
      {{-- First card end  --}}
       <div class="card" data-video-src="{{asset('src/index-songs/Millionare/Millionare.mp4')}}" data-song-img="./src/millionare.jpg" data-song-title="Millionare" data-song-artist="Yo Yo Honey Singh, Bhushan Kumar"> 
          <!-- 2nd Card Start -->
          <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
              <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
            </svg>
        <img alt="Album cover of Atif Aslam Mix" height="200" src="./src/millionare.jpg" width="200"/>
        <div class="title">
         Millionare
        </div>
        <div class="description card-title">
         Yo Yo Honey Singh, Bhushan Kumar
        </div>
       </div>     <!-- 2nd Card End -->

       {{-- 3rd Card start --}}
       <div class="card" data-video-src="{{asset('src/index-songs/kaun-talha/kaun-talha.mp4')}}" data-song-img="./src/index-songs/kaun talha" data-song-title="Kaun Talha" data-song-artist="Talha Anjum Prod. by Umair">
        <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
            <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
        </svg>
        <img alt="Album cover of Kaun Talha by Talha Anjum, Umair" height="200" src="./src/kaun talha.png" width="200"/>
        <div class="title">
            Kaun Talha
        </div>
        <div class="description card-title">
            Talha Anjum, Umair
        </div>
    </div>
    {{--3rd Card End --}}
    
    <div class="card" data-video-src="{{asset('src/index-songs/Jo-tum-mery-ho/Jo-tum-mery-ho.mp4')}}" data-song-img="./src/index-songs/kaun talha" data-song-title="Kaun Talha" data-song-artist="Talha Anjum Prod. by Umair">
      {{-- 4th Card start --}}
        <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
            <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
        </svg>
     <img alt="Album cover of Kaun Talha by Talha Anjum, Umair" height="200" src="./src/Jo tum mery ho.png" width="200"/>
     <div class="title">
         Jo Tum Mery Ho
        </div>
        <div class="description card-title">
            Anuv Jain and Angad Bahra
        </div>
    </div>
    </div>
{{-- 4th card end  --}}

  </div>
  <div class="footer">
    <div class="current-track">
      <img
      alt="Current track cover"
      height="50"
      src="/src/index-songs/Open letter/open letter.jpg"
      width="50"
  />
        <div class="track-info">
            <p>Long time no see</p>
            <p>Taimour Baig, Raffey Anwar, AUR</p>
        </div>
    </div>
    
    <div class="playback-controls">
        <div class="controls">
            <i class="fas fa-step-backward" id="backwardBtn"> </i>
            <i class="fas fa-play" id="playBtn"> </i>
            <i class="fas fa-step-forward" id="forwardBtn"> </i>
        </div>
        <!-- Seekbar positioned below controls -->
        <div class="seekbar-container">
            <span class="current-time">0:00</span>
            <input type="range" id="seekbar" value="0" min="0" max="100" step="1" />
            <span class="duration">0:00</span>
        </div>
    </div>

    <div class="volume">
        <i class="fas fa-volume-up"> </i>
        <input id="volumeControl" max="100" min="0" type="range" value="50" />
    </div>
</div>


<custom-footer></custom-footer>

    <div id="opacity" class="opacity"></div>
    <script src="{{ asset('component/header.js') }}"></script>
<script src="{{ asset('component/footer.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('/src/index-songs/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
