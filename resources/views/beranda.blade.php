@extends('layouts.main')

@section('container')

<div style="position: relative;"> <!-- Atur posisi relatif pada parent container -->
    <img src="img/depan.png" alt="Deskripsi Gambar" width="1300" height="650">

    <br><br>
    <br><br>

    <div class="row featurette">
        <div class="col-md-12" style="text-align: center;">
          <h2 class="featurette-heading">HIMASI<span class="text-muted"></span></h2>
          <p class="lead">Pada tanggal 12 desember 2015 segenap mahasiswa Sistem Informasi Universitas Malikussaleh melaksanakan Musyawarah Besar (MUBES) untuk pertama kalinya</p>  
        </div>
    </div>
    
<br>
<br><br>
<hr>
<br><br>
<div class="row">
  <div class="col-lg-4" style="text-align: center;">
    <svg width="140" height="140">
      <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
      <clipPath id="clip-circle">
        <circle cx="70" cy="70" r="70" fill="none"/>
      </clipPath>
      <image xlink:href="img/ZURA.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
    </svg>
    
    <h2>ZURA</h2>
    <p>Kertas buat ngeprint itu HTS ya?.</p>
      </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="text-align: center;">
    <svg width="140" height="140">
      <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
      <clipPath id="clip-circle">
        <circle cx="70" cy="70" r="70" fill="none"/>
      </clipPath>
      <image xlink:href="img/IRGI.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
    </svg>
    
    <h2>IRGI</h2>
    <p>Habis senin SELESAI ya?.</p>
      </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="text-align: center;">
    <svg width="140" height="140">
      <circle cx="70" cy="70" r="70" fill="none" stroke="none"/>
      <clipPath id="clip-circle">
        <circle cx="70" cy="70" r="70" fill="none"/>
      </clipPath>
      <image xlink:href="img/SHAFFA.jpeg" width="140" height="140" clip-path="url(#clip-circle)"/>
    </svg>
    
    <h2>SHAFFA</h2>
    <p>buah yang dari arab itu TRAUMA ya?.</p>
    
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
@endsection
