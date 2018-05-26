@extends('layouts.master')

@section('content')


<div class="w3-row-padding w3-margin-top">
  <div class="w3-quarter w3-margin-top">
    <img class="mySlides w3-hover-opacity" src="/img/gallery/2018/lomba/1.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)">
  </div>
  <div class="w3-quarter w3-margin-top">
    <img class="mySlides w3-hover-opacity" src="/img/gallery/2018/lomba/2.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)">
  </div>
  <div class="w3-quarter w3-margin-top">
    <img class="mySlides w3-hover-opacity" src="/img/gallery/2018/lomba/3.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)">
  </div>
  <div class="w3-quarter w3-margin-top">
    <img class="mySlides w3-hover-opacity" src="/img/gallery/2018/lomba/4.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)">
  </div>
  {{-- Next Row --}}
  <br>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom" style="width:60%;">
    <img id="img01" style="width:100%">
  </div>
</div>
@endsection

@section('script')
  <script>
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
  }
  </script>
@endsection
