@extends('layouts.master')

@section('content')

<div class="w3-content w3-display-container w3-margin-top">
    <img class="mySlides" src="/images/banner.png" style="width:100%;">
    <img class="mySlides" src="/images/struktur/1.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/2.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/3.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/4.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/5.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/6.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/7.jpg" style="width:100%;">
    <img class="mySlides" src="/images/struktur/8.jpg" style="width:100%;">
    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
@endsection

@section('script')
<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
  }
</script>
@endsection
