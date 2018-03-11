@extends('layouts.master')

@section('content')
<div class="w3-display-container">
  <img class="mySlides w3-animate-fading" src="/img/home/banner_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="/img/home/banner_2.png" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  </div>
</div>

<div class="w3-container w3-row">
  <div class="w3-col m4 l3">
    <img src="/img/home/img_nature_wide.jpg" style="width:100%;height:200px">
  </div>
  <div class="w3-col w3-container m8 l9">
    <h2>Presiden Jokowi Groundbreaking Double Track Bogor</h2>
      <table class="spacing">
        <td><i class="far fa-calendar-alt"></i></td>
        <td><p>tanggal</p></td>
      </table>
    <p class="spacing">Presiden Jokowi Groundbreaking Double Track Bogor Lorem ipsum dolor sit amet, consectetur
      adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
    <button class="w3-button w3-red" type="button" name="button">Read More&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
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
    setTimeout(carousel, timeOut);
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
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, timeOut);
  }
</script>
@endsection
