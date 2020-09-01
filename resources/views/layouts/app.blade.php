<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('logo/logo-paud.png')}}">

 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Font Awesome Icon -->
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

 <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <style>

body {
  display: flex;
  flex-direction: column;
  margin:0px;
}


.page-container {
  position: relative;
  min-height: 100vh;
}

.content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

.social-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.social-bar a {
  display: block;
  text-align: center;
  padding: 15px;
  transition-duration: 0.5s;
  color: white;
  font-size: 16px;
  width: 25px;
}

.social-bar a:hover {
  background-color: teal;
  padding: 15px 25px;
}

.facebook {
  background: #3B5998;
  color: white;
}

.instagram{
  background:orangered;
  color: white;
}


</style>

    <title>@yield('title')</title>

    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white">
<a class="navbar-brand" href="#">
    <img src="/logo/logo-paud.jpg" width="auto" height="60px"  class="d-inline-block align-top" alt=""> <img src="/logo/logo-text.png" width="300px" height="50px" class="d-inline-block" style="padding-top: 5px" alt=""> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">Beranda </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarProfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarProfil">
          <a class="dropdown-item" href="{{route('sejarah')}}">Sejarah Singkat</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('visimisi')}}">Visi dan Misi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('struktur')}}">Struktur Organisasi</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarProgram" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarProgram">
          <a class="dropdown-item" href="{{route('KB')}}">KB (Kelompok Bermain)</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('TPA')}}">TPA (Taman Penitipan Anak)</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Eks')}}">Ekstrakurikuler</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarGaleri" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Galeri
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarGaleri">
          <a class="dropdown-item" href="{{route('Foto')}}">Foto</a>
        
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Download')}}">Download</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('bukutamu')}}">Buku Tamu</a>
      </li>
    </ul>
    <form class="form-inline" action="{{route('cari')}}" method="get">
      @csrf
      <input class="form-control w-75" type="search" placeholder="Cari halaman..." name="cari" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" style="float: inline-end;margin-left:5px" type="submit">Cari</button>
    </form>
  </div>
</nav>

<main class="py-4"> 

            <div id="page-container">
   <div id="content-wrap">
   @yield('content')
   </div>
   
   @include('layouts.footer')
   
 </div> 
        </main>

        <div class="social-bar">
  <a href="https://www.facebook.com/pages/Paud-Jaya-Kartika/1317782601651125?ref=br_rs" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.instagram.com/paudjayakartika/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a> 
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>