@php
    $cardData = session('card_data');
    session()->forget('card_data');
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"/>
    <link rel="shortcut icon" href="/src/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('src/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('/src/index-songs/songs.css') }}" />
    <link rel="icon" href="https://www.scdn.co/i/_global/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
    <title>{{$song->title}}</title>
    <style>
      video{
        height: 300px !important;
        width: 250px;
        padding-bottom: 100px;
      }
    </style>
  </head>
  <body>
    <custom-header></custom-header>
    <!--Header-->

    <div class="container" >
      <div class="content" style="margin-top: 180px;">
        <video src="{{ asset($song->video_path) }}" id="videoPlayer" ></video>
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
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <p>{{ $song->artist }}</p>
                <p>{{$song->title}}</p>
              </td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="more-by-artist">
        <h3>More by {{ $song->artist }}</h3>
        {{-- First card start --}}
      <div class="card" data-video-src="{{ asset('/src/index-songs/Lajawab 2/Lajawab-2.mp4') }}" data-song-img="/src/lajawab-2/Lajawab 2.jpg" data-song-title="Lajawab 2" data-song-artist="Rafey Anwer and Taimoor Baig">   
        <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
            <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
        </svg>
        <img alt="Album cover of Atif Aslam Mix" height="200" src="/src/index-songs/Lajawab 2/Lajawab-2.jpg" width="200"/>
        <div class="title">
            Lajawab 2
        </div>
        <div class="description card-title">
            Rafey Anwer and Taimoor Baig
        </div>
    </div> 
    {{-- First card end  --}}
    <!-- 2nd Card Start -->
     <div class="card" data-video-src="{{asset('/src/index-songs/Shikayat/shikayat.mp4')}}" data-song-img="./src/millionare.jpg" data-song-title="Millionare" data-song-artist="Yo Yo Honey Singh, Bhushan Kumar"> 
        <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
            <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
          </svg>
      <img alt="Album cover of Atif Aslam Mix" height="200" src="/src/index-songs/Shikayat/shikayat.jpg" width="200"/>
      <div class="title">
       Shikayat
      </div>
      <div class="description card-title">
       AUR, Usama, Ahad
      </div>
     </div>     <!-- 2nd Card End -->

     {{-- 3rd Card start --}}
     <div class="card" data-video-src="{{asset('/src/index-songs/kaun-talha/kaun-talha.mp4')}}" data-song-img="./src/index-songs/kaun talha" data-song-title="Kaun Talha" data-song-artist="Talha Anjum Prod. by Umair">
      <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
          <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
      </svg>
      <img alt="Album cover of Kaun Talha by Talha Anjum, Umair" height="200" src="/src/index-songs/kaun-talha/kaun talha.png" width="200"/>
      <div class="title">
          Kaun Talha
      </div>
      <div class="description card-title">
          Talha Anjum, Umair
      </div>
  </div>
  {{--3rd Card End --}}
  
  <div class="card" data-video-src="{{asset('/src/index-songs/Jo-tum-mery-ho/Jo-tum-mery-ho.mp4')}}" data-song-img="./src/index-songs/kaun talha" data-song-title="Kaun Talha" data-song-artist="Talha Anjum Prod. by Umair">
    {{-- 4th Card start --}}
      <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 bneLcE play" width="24" height="24">
          <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z" fill="black"></path>
      </svg>
   <img alt="Album cover of Kaun Talha by Talha Anjum, Umair" height="200" src="/src/index-songs/Jo-tum-mery-ho/Jo tum mery ho.png" width="200"/>
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
      src="{{$song->image_path}}"
      width="50"
  /> 
          <div class="track-info">
            <p>{{$song->title}}</p>
            <p>{{$song->artist}}</p>
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
            <input type="range" id="seekbar" value="0" min="0" max="150" step="1" />
            <span class="duration">{{ $song->duration }}</span>
        </div>
    </div>

    <div class="volume">
        <i class="fas fa-volume-up"> </i>
        <input id="volumeControl" max="100" min="0" type="range" value="30" />
    </div>
</div>

<custom-footer></custom-footer>

    <div id="opacity" class="opacity"></div>
    <script src="{{ asset('component/header.js') }}"></script>
<script src="{{ asset('component/footer.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('src/index-songs/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
