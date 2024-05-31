@extends('layout.layout')

@section('content')
<style>
    body {
        /* background-image: url(img/gedungsek.jpg); */
    }

    h1 {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
    p {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
    .tales {
        width: 100%;
    }
    .carousel-inner{
        width:60%;
        max-height: 900px !important;
    }
    .card-img {
        background-repeat: no-repeat;
        background-position: 100% 100%;
        width: 1520px;
        height: 600px;
        filter: brightness(50%);
    }
    .centered {
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

</style>
<h1 class="visually-hidden">Heroes examples</h1>
<div class="card mb-3 text-white">
    <img src="img/gedungsek1.jpg" class="card-img" alt="...">
    <div class="card-img-overlay mt-5 px-4 py-5 text-center">
        <h1 class="card-title centered fw-bold ">SMK Assalaam Bandung</h1>
        <div class="col-lg-6 centered-text mx-auto">
            <p class="lead mb-4">Menghasilkan lulusan yang terserap di dunia kerja dan bertujuan mengurangi angka pengangguran saat lulus smk disini</p>
        </div>
    </div>
  </div>
<div class="px-4 py-5 text-center ">
    <h1 class="display-5 fw-bold">Selamat Datang di Website SMK Assalaam</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan
            (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan
            teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.</p>
    </div>
      <center>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sekolah2.jpg" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Example headline.</h1>
                  <p>Some representative placeholder content for the first slide of the carousel.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
              </div>


          </div>
          <div class="carousel-item">
            <img src="img/asalam.jpg" class="d-block w-100" alt="...">

            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/rpl.jpg" alt="">

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </center>

    <hr>
    <div class="container marketing mt-5">
        <h2 class="mb-5">Manajemen SMK Assalaam</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" width="170" height="170" src="img/orang1.jpg" alt="">
            <h3>H.M.Hasby Rifansyah, S.T</h3>
            <h5>Kepala Sekolah</h5>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" width="170" height="170" src="img/orang1.jpg" alt="">
            <h3>Ahmad Jufriyanto, S.PD</h3>
            <h5>Wakasek Kurikulum</h5>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" width="170" height="170" src="img/orang1.jpg" alt="">
            <h2>Heading</h2>
            <h5>Wakasek Kesiswaan</h5>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>
</div>

@endsection
