@extends('layouts.main')

@section('container')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="./css/carousel.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
    

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('img/ospek.jpeg'); background-size: cover;">
        <!-- Konten carousel-item lainnya -->
      </div>
    </div>
    

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>About HIMASI</h1>
            <p>himpunan Mahasiswa Sistem Informasi.</p>
            <p><a class="btn btn-lg btn-primary" href="#">luv</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="https://www.instagram.com/himasi.unimal?igsh=MWJwd2pjb3B6aHRzZA==" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    
    <div class="row">
      <div class="col-lg-4">
        <svg width="140" height="140">
          <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
          <clipPath id="clip-circle">
            <circle cx="70" cy="70" r="70" fill="none"/>
          </clipPath>
          <image xlink:href="img/ZURA.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
        </svg>
        
        <h2>ZURA</h2>
        <p>Kertas buat ngeprint itu HTS ya?.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/zyeerra?igsh=MXU1bzQzZjYzd3p5aA==">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg width="140" height="140">
          <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
          <clipPath id="clip-circle">
            <circle cx="70" cy="70" r="70" fill="none"/>
          </clipPath>
          <image xlink:href="img/IRGI.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
        </svg>
        
        <h2>IRGI</h2>
        <p>Habis senin SELESAI ya?.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/irehzi_?igsh=eHFjcTczOHF2c201">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg width="140" height="140">
          <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
          <clipPath id="clip-circle">
            <circle cx="70" cy="70" r="70" fill="none"/>
          </clipPath>
          <image xlink:href="img/SHAFFA.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
        </svg>
        
        <h2>SHAFFA</h2>
        <p>buah yang dari arab itu TRAUMA ya?.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/shaffanisaaa_?igsh=MXVoOHV0c2ZlMnV2NA==">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">VISI & MISI<span class="text-muted"></span></h2>
        <p class="lead">Mewujudkan HIMASI UNIMAL sebagai organisasi kemahasiswaan yang aktif, mempunyai rasa kekeluargaan dan dapat menjadi wadah untuk menyampaikan aspirasi bagi mahasiswa Prodi Sistem Informasi.keren</p>
        <P class="lead">Mewujudkanss HIMASI UNIMAL sebagai organisasi kemahasiswaan yang aktif, mempunyai rasa kekeluargaan dan dapat menjadi wadah untuk menyampaikan aspirasi bagi mahasiswa Prodi Sistem Informasi. </P>
      </div>
      <div class="col-md-5">
        <img src="img/HIMASI.jpeg" alt="" width="500" height="350">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">NAPAK TILAS HIMASI UNIMAL<span class="text-muted">.</span></h2>
        <p class="lead">Pada tanggal 12 desember 2015 segenap mahasiswa Sistem Informasi Universitas Malikussaleh melaksanakan Musyawarah Besar (MUBES) untuk pertama kalinya. MUBES dipimpin oleh Bambang Riliansyah sebagai presidium siding I, Firza Handyka sebagai presidium siding II, dan Khana Sultan sebagai presidium siding III. MUBES dilaksanakan kurang dari satu hari dengan hasil keputusan diantaranya saudara Firza Handyka dan Ryan Taruli Pardede terpilih sebagai Ketua dan Wakil Ketua HIMASI pertama secara aklamasi, serta tanggal pelaksanaan MUBES diperingati sebagai hari lahir HIMASI (Himpunan Mahasiswa Sistem Informasi).</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/ASC.jpeg" alt="" width="500" height="350">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">HIMASI FOREVER <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL HIMASI UNIMAL</p>
      </div>
      <div class="col-md-5">
        <img src="img/praktek.jpeg" alt="" width="500" height="350">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>

  </footer>
</main>


    <script src="/js/carousel.js"></script>

      
  </body>
</html>

@endsection