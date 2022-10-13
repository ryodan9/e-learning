<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- myCSS -->
    <link rel="stylesheet" href="{{asset('style/style.css')}}">

    <!-- Viga -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Home</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bgcolor">
        <div class="container">
         
          <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="style/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="BELAJARYUK">
            <div class="text">BELAJARYUK!</div>
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->
            <a class="nav-item nav-link" href="#">Daftar Pelajaran</a>
            <!-- <a class="nav-item nav-link" href="#">Contact Us</a> -->
            <a class="nav-item tombol btn btn-primary" href="/login">Masuk</a>
          </div>
        </div>
      </div>
      
    </nav>
    <!-- endOfNavBar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Find and Explore <span>Knowledge</span></h1>
      </div>
    </div>
    <!-- endOfJumbo -->
    
    <!-- Container -->
    <div class="container">

      <!-- Search Bar -->
      <div class="row justify-content-center">
        <div class="col-7 searchb">
          <form class="form-inline">
            <input class="form-control mr-sm-2 whs" type="search" placeholder="Cari Materi" aria-label="Search">
            <select name="kelas" id="kelas" class="form-control mr-sm-2">
              <option value="">Category </option>
              <option value="1">Kelas 10</option>
              <option value="2">Kelas 11</option>
              <option value="3">Kelas 12</option>
            </select>
            <button class="btn btns" type="submit">Search</button>
          </form>
        </div>
      </div>
      <!-- endofSearchBar -->

      <!-- About web -->
      <!-- <div class="row aboutweb">
        <div class="col">
          <img src="img/aboutt.jpg" alt="" class="img-fluid">
        </div>
        <div class="col">
          <h3>Judul</h3>
        </div>
      </div> -->
      <!-- endOfAbour -->
      <!-- List Mata Pelajaran -->
      <div class="row aboutweb">
        <div class="col-12">
          <h2><span>Website Belajar Online</span> untuk<br> SMA dan SMK</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Matematika</a>
        </div>
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Ekonomi</a>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Kimia</a>
        </div>
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Geografi</a>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Biologi</a>
        </div>
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Sejarah</a>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Fisika</a>
        </div>
        <div class="col-lg-5 pelajaran">
          <a class="nav-item tombol-pel btn btn-primary" href="#">Bahasa</a>
        </div>
      </div>
      <!-- endOfList -->

      <!-- Desc Daftar -->
      <div class="container white">
        <div class="row">
          <div class="col-5 aboutd">
            <h3>Temukan yang Kamu Cari di Sini!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga alias possimus adipisci illum ratione accusamus, exercitationem rem obcaecati inventore commodi quisquam! Adipisci fugiat quam ducimus, cupiditate natus at minima deleniti.</p>
            <a href="/register" class="btn btn-primary tombol">Gabung</a>
          </div>
          <div class="col-7">
            <div class="imgd">
              <img src="style/img/register1.png" class="imdaftar" alt="People">
            </div>
          </div>
        </div>
      </div>

      <!-- endOfDesc -->
    </div>
    <!-- endofContainer -->
      
    <!-- Footer -->
    <div class="footer">
      <section class="fullcredit">
        <section class="sosial">
          <a href="" target="_blank">
            <img src="style/img/ic-ig.svg" alt="Instagram">
          </a>
          <a href="" target="_blank">
            <img src="style/img/ic-fb.svg" alt="Facebook">
          </a>
          <a href="" target="_blank">
            <img src="style/img/ic-twitter.svg" alt="Twitter">
          </a>
        </section>
        <p class="text-center">
        © BelajarYuk, 
        <script>document.write(new Date().getFullYear());</script>
        | <a href="">Kebijakan Privasi</a>
        | <a href="">Ketentuan Penggunaan</a>
      </p>
    </section>
    </div>

    <!-- endOfFooter -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Mine -->
    <script>
      $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop()>50)
      });
    </script>
  </body>
</html>