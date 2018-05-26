<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontawesome-all.css" type="text/css">
  </head>
  <body bgcolor="#e4e7ec">

{{-- Header --}}
  <div class="w3-bottombar w3-white">
    <div id="logo" class="w3-panel">
      <img src="/img/logo/logo.png" class="w3-right" alt="" style="width:200px;margin-top:10px;margin-right:20px">
      <h2 style="font-size:40px">Hydromodelling Technology and Workshop</h2>
    </div>
    {{-- Navigation Bar --}}
    <div class="w3-row">
      <h3 class="w3-left" style="margin-top:-1px;margin-left:20px">Faculty of Engineering Universitas Indonesia</h3>
      <div class="w3-right">
        <a href="/contact" class="w3-button w3-hover-blue w3-text-grey">Contact Us</a>
      </div>
      <div class="w3-dropdown-hover  w3-right">
        <a class="w3-button w3-hover-blue w3-text-grey">Profile&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
          <a href="/about" class="w3-bar-item w3-button">Tentang Kami</a>
          <a href="/about#history" class="w3-bar-item w3-button">Sejarah</a>
          <a href="/about#struktur" class="w3-bar-item w3-button">Struktur Organisasi</a>
        </div>
      </div>
      <div class="w3-dropdown-hover  w3-right">
        <a href="#about" class="w3-button w3-hover-blue w3-text-grey">Perlombaan&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
          <a href="/lomba/internasional" class="w3-bar-item w3-button">Internasional</a>
          <a href="/lomba/nasional" class="w3-bar-item w3-button">Nasional</a>
        </div>
      </div>
      <div class="w3-right">
        <a href="/gallery" class="w3-button w3-hover-blue w3-text-grey w3-right">Gallery</a>
      </div>
      <div class="w3-right">
        <a href="/" class="w3-button w3-hover-blue w3-text-grey w3-right">Home</a>
      </div>
    </div>
{{-- End of Header --}}
  </div>

    @yield('content')

{{-- Footer --}}
  <div style="height:100px">

  </div>
{{-- End of Footer --}}
      @yield('script')

  </body>
</html>
