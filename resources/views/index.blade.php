@extends('layouts.master')

@section('content')
<div class="w3-display-container w3-card">
  <img class="mySlides w3-animate-fading" src="/img/home/banner_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="/img/home/banner_2.png" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-card-4 w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-card-4 w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  </div>
</div>

<div class="w3-card-4 w3-round-large w3-white" style="width:90%;margin:0 auto;margin-top:60px;">
  <div class="w3-container w3-row" style="padding-bottom:20px">
    <div class="w3-col m4 l3">
      <img src="/img/internasional/hydros/a.jpg" style="width:100%;height:180px;margin-top:20px">
    </div>
    <div class="w3-col w3-container m8 l9" style="position:relative">
      <h2>Hydros Team Universitas Indonesia</h2>
      <p class="spacing">Tim Hydros Universitas Indonesia telah mengikuti kompetisi ini selama 2 tahun,
        dimana di tahun 2017 tim ini berhasil membawa pulang salah satu piala Hydrocontest atas ...</p>
      <a class="w3-btn w3-red" href="/lomba/internasional/hydros" style="bottom:0px;position:relative;">
        Read More&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>

<div class="w3-card-4 w3-round-large w3-white w3-hide-large" style="width:90%;margin:0 auto;margin-top:60px;">
  <div class="w3-container w3-row" style="padding-bottom:20px">
    <div class="w3-col m4 l3">
      <img src="/img/internasional/sbt/b.jpg" style="width:100%;height:180px;margin-top:20px">
    </div>
    <div class="w3-col w3-container m8 l9" style="position:relative">
      <h2>Solar Boat Team Universitas Indonesia</h2>
      <p class="spacing">Universitas Indonesia Solar Boat Team (UI SBT), is a group of engineering
      students of the Universitas Indonesia that have an interest in the field of ...</p>
      <a class="w3-btn w3-red" href="/lomba/internasional/sbt" style="bottom:0px;position:relative;">
        Read More&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>

<div class="w3-card-4 w3-round-large w3-white w3-hide-large" style="width:90%;margin:0 auto;margin-top:60px;">
  <div class="w3-container w3-row" style="padding-bottom:20px">
    <div class="w3-col m4 l3">
      <img src="/img/internasional/sbt.jpg" style="width:100%;height:180px;margin-top:20px">
    </div>
    <div class="w3-col w3-container m8 l9" style="position:relative">
      <h2>Tentang HTW</h2>
      <p class="spacing">
        Hydromodelling Technology and Workshop Universitas Indonesia (HTW UI)
        adalah sebuah klub peminatan departemen yang ada di Departemen Teknik Mesin ...
      </p>
      <a class="w3-btn w3-red" href="/about" style="bottom:0px;position:relative;">
        Read More&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>

<script>
  var slideIndex = 0;
  var timeOut = 9000;
  //showDivs(slideIndex);
  carousel();

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
  }

  function carousel() {
      var dots = document.getElementsByClassName("demo");
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
      setTimeout(carousel, timeOut);
  }
</script>
@endsection
