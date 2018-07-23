<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontawesome-all.css" type="text/css">
  </head>
  <body class="w3-mobile" bgcolor="#e4e7ec">

{{-- Header --}}
  <div class="w3-bottombar" style="background-color:#13b4e8;">
    <div class="w3-row">
      <div class="w3-col l2 s2" style="text-align:center">
        <div id="logo" class="w3-panel">
          <img src="/img/logo/logo.png" alt="" style="width: 100%;max-width:200px;margin-top:10px;margin-right:20px">
        </div>
      </div>
      <div class="w3-col l8 s8" style="text-align:center">
          <h2 class="htw-font" style="font-size:40px;color:black">Hydromodelling Technology and Workshop</h2>
          <h3 class="htw-font" style="margin-top:-1px;">Faculty of Engineering Universitas Indonesia</h3>
      </div>
      <div class="w3-col l2 s2" style="text-align:center">
        <img src="/img/home/logo_ui.png" alt="" style="width: 100%;max-width:100px;margin-top:10px;margin-right:20px">
      </div>

    </div>

    {{-- Navigation Bar --}}
    <div class="w3-row">


      <div class="w3-hide-medium w3-hide-small" style="text-align:center">
        <div class="w3-col l2">
          <a href="/" class="w3-button w3-hover-blue">Home</a>
        </div>
        <div class="w3-col l2">
          <a href="/gallery" class="w3-button w3-hover-blue">Gallery</a>
        </div>
        <div class="w3-dropdown-hover w3-col l3">
          <a class="w3-button w3-hover-blue">Profile&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
            <a href="/about" class="w3-bar-item w3-button">Tentang Kami</a>
            <a href="/about#history" class="w3-bar-item w3-button">Sejarah</a>
            <a href="/about#struktur" class="w3-bar-item w3-button">Struktur Organisasi</a>
          </div>
        </div>
        <div class="w3-dropdown-hover w3-col l3">
          <a href="#about" class="w3-button w3-hover-blue">Perlombaan&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
            <a href="/lomba/internasional" class="w3-bar-item w3-button">Internasional</a>
            <a href="/lomba/nasional" class="w3-bar-item w3-button">Nasional</a>
          </div>
        </div>
        <div class="w3-col l2">
          <a href="/contact" class="w3-button w3-hover-blue">Contact Us</a>
        </div>


      </div>
      {{-- Mobile Dropdown --}}
      <button onclick="myFunction('mobileNav')" class="c-button-burger w3-right w3-hide-large w3-padding-8">
        <i id="bar" class="w3-xlarge fa fa-bars" aria-hidden="true"></i>
      </button>
      <br>
      <div id="mobileNav" class="w3-hide w3-margin-top w3-padding w3-hide-large">
        <div class="">
          <a href="/" class="w3-button w3-hover-blue">Home</a>
        </div>
        <div class="">
          <a href="/gallery" class="w3-button w3-hover-blue">Gallery</a>
        </div>
        <div class="">
          <a href="/about" class="w3-button w3-hover-blue">Profile</a>
        </div>
        <div class=" ">
          <a class="w3-button w3-hover-blue">Perlombaan&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="">
            <a href="/lomba/internasional" class="w3-button">&nbsp;Internasional</a><br>
            <a href="/lomba/nasional" class="w3-button">&nbsp;Nasional</a>
          </div>
        </div>
        <div class="">
          <a href="/contact" class="w3-button w3-hover-blue">Contact Us</a>
        </div>
      </div>
      {{-- End of Mobile Dropdown --}}
    </div>
{{-- End of Header --}}
  </div>

    <img src="/images/a.png" class="w3-display-topleft w3-opacity-max" style="width:45%;z-index: -2;position:fixed">
    <img src="/images/b.png" class="w3-display-right w3-opacity-max" style="width:60%;z-index: -2;position:fixed">

    @yield('content')

{{-- Footer --}}
  <div style="height:100px">

  </div>
{{-- End of Footer --}}
      @yield('script')
    <script>
    function myFunction(id) {
        var x = document.getElementById(id);
        var bar = document.getElementById("bar");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            bar.classList.remove('fa-bars');
            bar.classList.add('fa-times');
        } else {
            x.className = x.className.replace(" w3-show", "");
            bar.classList.remove('fa-times');
            bar.classList.add('fa-bars');
        }
    }
    </script>

  </body>
</html>
