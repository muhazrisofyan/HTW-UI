@extends('layouts.master')

@section('content')

<div id="about" class="w3-card-4 w3-round-large w3-white w3-content w3-container w3-padding-16" style="width:1300px;margin:0 auto;margin-top:80px">
    <h1>Pengumuman BP dan Member HTW UI 2018</h1><br><br>
    <p>
      Ahoy, Captain!
      <br>Setelah melalui seleksi yang sangat panjang, pencarian pelaut andal untuk mengarungi ganasnya samudera telah berakhir! Kini, saatnya kita mengetahui siapa yang layak untuk mendapat kesempatan mengarungi lautan bersama HTW UI 2018!
      Selamat kepada seluruh BP dan Member HTW UI 2018 yang terpilih!
    </p>
    <div class="w3-center">
      <img src="/img/posts/post2/1.png" style="width:100%;max-width:700px;margin-top:20px">
    </div>
    @for ($i=2; $i <= 9; $i++)
      <div class="w3-center">
        <img src="/img/posts/post2/{{$i}}.png" style="width:100%;max-width:700px;margin-top:20px">
      </div>
    @endfor
</div>

@endsection
