@extends('layouts.app')

@section('content')
  <div class="w3-content w3-card-3 w3-display-container">
    <img class="ddwidth w3-grayscale-min w3-grayscale-min" src="/images/pecah.jpg" alt="gambar pecah">
    <h1 class="w3-display-middle w3-text-white w3-xxxlarge" style="font-weight:bold">Got any questions?</h2>
  </div>

  <div class="w3-content">
    <div class="w3-row w3-card-4 w3-light-grey">
      <div class="w3-threequarter w3-container">
        <h2>Get in touch</h2>
        <p>Isi form dibawah ini dan kami akan merespon secepatnya</p>

        <form class="" action="index.html" method="post">
          <input class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Nama">
          <br>
          <input class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Email">
          <br>
          <textarea class="w3-input w3-border w3-round-large" name="last" type="text" placeholder="Pesan"></textarea>
          <br>
          <button class="w3-button w3-blue w3-padding" type="submit">Submit</button>
        </form>
      </div>
      <div class="w3-quarter">
        <table>
          <tr>
            Get in touch:
          </tr>
          <tr>
            <td><i class="fa fa-facebook-official" aria-hidden="true"></i></td>
            <td>facebook</td>
          </tr>
          <tr>
            <td><i class="fa fa-instagram" aria-hidden="true"></i></td>
            <td>instagram</td>
          </tr>
          <tr>
            <td><img class="w3-tiny" src="/images/lineicon.png" alt="" style="width:14px;height:14px"></td>
            <td>line</td>
          </tr>
          <tr>
            <td><i class="fa fa-twitter-square" aria-hidden="true"></i></td>
            <td>twitter</td>
          </tr>
          <tr>
            <td><i class="fa fa-youtube" aria-hidden="true"></i></td>
            <td>youtube</td>
          </tr>
          <tr>
            <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
            <td>email</td>
          </tr>
          <tr>
            <td><i class="fa fa-user" aria-hidden="true"></i></td>
            <td>+62 812 8862 9904</td>
          </tr>
        </table>
      </div>

    </div>
  </div>
@endsection
