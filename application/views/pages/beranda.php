<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda-FTI</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/beranda.css') ;?>">
    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">LANTANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Halaman/view') ;?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Halaman/view/tentang') ;?>">Tentang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Halaman/view/daftar') ;?>">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- Header -->
    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Selamat Datang</h1>
          <h2 class="display-4 text-white">di Fakultas Teknologi Industri</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->


    <!-- Jurusan di FTI -->
    <section class="buat-akun">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/fti.jpg') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Program Studi</h2>
              </div>
              <div class="row">
          <div class="col-md-11 offset-md-1">
            <ol>
              <li>Teknik Kimia-Teknik Tekstil</li>
                <li>Teknik Industri</li>
                <li>Teknik Informatika</li>
                <li>Teknik Elektro</li>
                <li>Teknik Mesin</li>
            </ol>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <section class="daftar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/daftar.png') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3">
              <h2 class="display-4">Daftar Akun FTI</h2>
              <p>Setelah mendaftarkan akun, Anda bisa masuk ke halaman untuk mengakses layanan informasi di FTI.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir-->