@extends('layouts.app')
@section('title','PAUD Jaya Kartika')
@section('content')

<div class="container" style="padding: 60px 15px 50px">
<hr>
<div class="row">
  <div class="col-sm-8" style="padding-bottom: 20px">
  <div class="card" style="border-color: #6eaa5e">
    <div class="card-header" style="text-align: center; background-color:#6eaa5e"><h4><b>Sejarah Berdirinya Lembaga Pendidikan Jaya Kartika</b></h4></div>
    <div class="card-body" style="text-align: justify">
    Lembaga Pendidikan Jaya Kartika mula-mula hanya sebuah Bimbingan Belajar yang dirintis sejak 1 Agustus 2010, ketika itu Ibu Sri Handayani, S.Pd., M.Pd.  menjadi Nara Sumber Tingkat Nasional Pendidikan Luar Sekolah (PLS), berkat ajang prestasi Tutor Paket B dan C Tingkat Nasional dan mendapat penghargaan dari Menteri Pendidikan Nasional Prof. Dr. Bambang Sudibyo, M.B.A.  pada tahun 2006. Dari pengalaman keliling Indonesia dan khususnya Provinsi Jawa Tengah maka beliau tergerak hatinya ingin mendirikan sebuah sekolah Pendidikan Anak Usia Dini (PAUD) karena pada usia Golden Age perlunya sebuah pendidikan dasar yang baik. 
    <br><br>
    Anak-anak sekitarnya pada usia Golden Age banyak yang ditinggalkan kedua orang tuanya bekerja, mereka kurang mendapatkan perhatian bahkan kasih sayang dari kedua orang tuanya. Maka dari itu memantapkan niat Ibu Sri Handayani untuk mendirikan PAUD di tempat tinggalnya. Kemudian pada 17 Maret 2011  diresmikan Lembaga Pendidikan Jaya Kartika oleh Kepala UPT PUD, NFI, dan SD Kecamatan Jaten Ibu Nurini Retno Hartati, S.H., M.M. dan dihadiri semua masyarakat dusun Karang Rejo, Desa Ngringo, Kecamatan Jaten, Kabupaten Karanganyar. Dan Alhamdulillah sampai sekarang Paud Jaya Kartika diminati banyak masyarakat disekitarnya bahkan sampai di luar kecamatan Jaten dan luar Kabupaten Karanganyar.
    </div>
</div>
  </div>
  <div class="col-sm-4">
  <div class="card" style="border-color: #6eaa5e">
  <a href="{{route('visimisi')}}">
  <div class="card-body">
    <h4 class="card-text" style="text-align:center; color: #6eaa5e"><b> Visi dan Misi</b> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h4>
  </div></a>
</div>
<br>
  <div class="card" style="border-color: #6eaa5e">
  <a href="{{route('struktur')}}"><img src="/profil/struktur.jpg" class="card-img-top" alt="..." width="auto">
  <div class="card-body" style="background-color: #6eaa5e">
    <p class="card-text" style="text-align:center; color:black"><b> Struktur Organisasi PAUD Jaya Kartika</b></p>
  </div></a>
</div>
  </div>
</div>
</div>

@endsection