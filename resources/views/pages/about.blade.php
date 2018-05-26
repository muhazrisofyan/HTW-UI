@extends('layouts.master')

@section('content')
<div class="w3-display-container" style="height:200px">
  <img class="w3-display-middle" src="img/logo/logo.png" alt="Logo HTW" style="width:10%">
</div>

<div id="about" class="w3-card-4 w3-round-large w3-white w3-content w3-container w3-padding-16" style="width:1300px;margin:0 auto">
    <h1 class="w3-center">Tentang HTW</h1>
    <p style="text-align:justify">Hydromodelling Technology and Workshop Universitas Indonesia (HTW UI) adalah
      sebuah klub peminatan departemen yang ada di Departemen Teknik Mesin, Fakultas
      Teknik, Universitas Indonesia. Klub ini mewadahi minat dan bakat para mahasiswa
      di bidang kemaritiman. Kegiatan yang menjadi fokus dari HTW UI adalah pembuatan
      kapal Remote Control (RC Boat) untuk dilombakan, pembuatan maket kapal, lomba
      karya tulis ilmiah, dan lomba internasional Solar Boat Team dan Hydrocontest.</p>

    <p><strong>Nilai</strong></p>
    <p>Terdapat 3 Nilai yang dibawa oleh HTW UI 2018:</p>
    <ol>
      <li>Bermanfaat</li>
      <li>Bersahabat</li>
      <li>Berprestasi</li>
    </ol>
    <br>
    <p><strong>Visi</strong></p>
    <p>Terwujudnya HTW UI 2018 sebagai lembaga yang Bermanfaat, Bersahabat, dan
      Berprestasi dalam kancah Nasional maupun Internasional</p>
    <br>
    <p><strong>Misi</strong></p>
    <ol>
      <li>Mewadahi minat dan bakat member HTW UI 2018 dalam mengaplikasikan keilmuan di bidang kemaritiman.</li>
      <li>Meningkatkan hubungan baik antar HTW dengan member, dosen, dan alumni, serta lembaga lainnya.</li>
      <li>Mempersiapkan member HTW UI agar siap berkontribusi untuk HTW, UI, dan Indonesia.</li>
    </ol>
    <br>
    <p><strong>Slogan</strong></p>
    <p>Gloria Eterna memiliki arti "<b><i>Kejayaan yang Abadi</i></b>" yang diambil dari bahasa Spanyol.</p>
    <p>Gloria berarti <b>KEJAYAAN</b>. Melambangkan kiprah HTW UI 2018 dalam perlombaan dan riset di bidang kemaritiman yang selalu "Berprestasi" dan berdaya saing tinggi.</p>
    <p>Eterna berarti <b>KEABADIAN</b>. Keabadian yang tercermin dari HTW UI yang menebar "Kebermanfaatan" dan "Pershabatan" bagi segala kalangan.</p>
    <p>Pada akhirnya, prestasi dan kejayaan HTW UI diharapkan terus abadi pada seluruh member dan juga menebar kebermanfaatan untuk bangsa Indonesia.</p>
    <br>

    <div class="w3-row w3-content w3-container">
        <div class="video-container">
          <iframe style="max-width:100%;height:100%" src="https://www.youtube.com/embed/lp-EO5I60KA" ></iframe>
        </div>
    </div>
</div>


<div id="history" class="w3-card-4 w3-round-large w3-white w3-container w3-content w3-padding-16" style="width:1300px;margin:0 auto;margin-top:100px">
  <h1 class="w3-center">Sejarah</h1>
  <p style="text-align:justify">Hydromodelling Technology and Workshop Universitas Indonesia (HTW UI)
    didirikan pada tahun 2007 oleh sekumpulan mahasiswa Teknik Perkapalan FTUI.
    HTW UI didirikan sebagai wadah para mahasiswa untuk menuangkan minat dan
    bakat pada bidang kemaritiman. Setelah 7 tahun berdiri, akhirnya HTW UI
    resmi diakui sebagai Kelompok Peminatan Departemen (KPD) yang berada di
    bawah naungan Departemen Teknik Mesin (DTM) FTUI pada tahun 2014.</p>
</div>

<div id="struktur" class="w3-card-4 w3-round-large w3-white w3-container w3-content w3-padding-16" style="width:1300px;margin:0 auto;margin-top:100px">
  <h1 class="w3-center">Struktur Organisasi</h1>

  <div class="w3-content w3-display-container">
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
