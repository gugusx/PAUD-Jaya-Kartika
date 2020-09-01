@extends('layouts.app')
@section('title','PAUD Jaya Kartika')
@section('content')

<style>
.ml1 {
  font-weight: 800;
  font-size: 3.5em;
  color: #6eaa5e
}

.ml1 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml1 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml1 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #fff;
  transform-origin: 0 0;
}

.ml1 .line1 { top: 0; }
.ml1 .line2 { bottom: 0; }
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="beranda/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="beranda/8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>

<div class="container" style="padding: 0px 15px 50px;">
<div class="row">
  <div class="card" style="border-color: #6eaa5e">
<div class="card-body">
<h4 class="ml1" style="text-align: center">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Selamat datang di Website PAUD Jaya Kartika</span>
    <span class="line line2"></span>
  </span>
</h4>

<script>
 // Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
</div>
  </div>
  </div>

</div>




@endsection