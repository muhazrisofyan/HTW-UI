@extends('layouts.master')

@section('content')
<div class="w3-content w3-card-3 w3-display-container">
  <img class="ddwidth w3-grayscale-min w3-grayscale-min" src="/img/contact/pecah.jpg" alt="gambar pecah">
  <h1 class="w3-display-middle w3-text-white w3-xxxlarge" style="font-weight:bold">Got any questions?</h2>
</div>

<div class="w3-content">
  <div class="w3-row w3-card-4 w3-light-grey">

    <div class="w3-threequarter w3-container">
      <h2>Get in touch</h2>
      <p>Isi form dibawah ini dan kami akan merespon secepatnya</p>

      <form class="contactform" action="index.html" method="post">
        <input class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Nama">
        <br>
        <input class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Email">
        <br>
        <textarea class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Pesan"></textarea>
        <br>
        <button class="w3-button w3-blue w3-padding" type="submit" style="margin-bottom:20px">Submit</button>
      </form>
    </div>

    <div class="w3-quarter w3-container" style="margin-left:-40px;margin-top:20px">
      <table>
        </tr>
        <tr>
          <td><i class="fab fa-facebook-square"></i></td>
          <td>HTW UI</td>
        </tr>
        <tr>
          <td><i class="fab fa-instagram"></i></td>
          <td>&#64;htw_ui</td>
        </tr>
        <tr>
          <td><i class="fab fa-line"></i></td>
          <td>&#64;htw_ui</td>
        </tr>
        <tr>
          <td><i class="fab fa-twitter-square"></i></td>
          <td>&#64;htw_ui</td>
        </tr>
        <tr>
          <td><i class="fab fa-youtube"></i></td>
          <td>HTW UI</td>
        </tr>
        <tr>
          <td><i class="fas fa-envelope"></i></td>
          <td>hydrotechworks.ui@gmail.com</td>
        </tr>
        <tr>
          <td><i class="fas fa-user"></i></td>
          <td>+62 812 8862 9904 (Darfi)</td>
        </tr>
      </table>
    </div>

  </div>
</div>

@endsection
