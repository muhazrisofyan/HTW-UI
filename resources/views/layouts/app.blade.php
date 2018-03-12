<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div id="logo" class="w3-panel">
      <h2>Hydromodelling Technology and Workshop</h2>
      <h3>Faculty of Engineering Universitas Indonesia</h2>
    </div>

    <!-- Links (sit on top) -->
    <div>
      <div class="w3-row w3-padding w3-black">
        <div class="w3-col s2">
          <a href="#" class="w3-button w3-block w3-black">Home</a>
        </div>
        <div class="w3-dropdown-hover w3-col s2">
          <a href="#about" class="w3-button w3-block w3-black">Profile&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
            <a href="#" class="w3-bar-item w3-button">Tentang Kami</a>
            <a href="#" class="w3-bar-item w3-button">Sejarah</a>
            <a href="#" class="w3-bar-item w3-button">Struktur Organisasi</a>
          </div>
        </div>
        <div class="w3-dropdown-hover w3-col s2">
          <a href="#about" class="w3-button w3-block w3-black">Perlombaan&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-border ddwidth">
            <a href="#" class="w3-bar-item w3-button">Internasional</a>
            <a href="#" class="w3-bar-item w3-button">Nasional</a>
          </div>
        </div>
        <div class="w3-col s2">
          <a href="#where" class="w3-button w3-block w3-black">Gallery</a>
        </div>
        <div class="w3-col s2">
          <a href="#where" class="w3-button w3-block w3-black">Shop</a>
        </div>
        <div class="w3-col s2">
          <a href="#where" class="w3-button w3-block w3-black">Contact Us</a>
        </div>
      </div>
    </div>

    @yield('content')


      </body>
    </html>
