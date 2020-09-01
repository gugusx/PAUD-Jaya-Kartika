@extends('layouts.app')
@section('title','PAUD Jaya Kartika')
@section('content')

<div class="container" style="padding: 60px 15px 50px">
<hr>
<div class="card" style="border-color: #6eaa5e" >
<div class="card-header" style="background-color: #6eaa5e"><h2 style="text-align: center; text-decoration:underline">Isi Buku Tamu</h2>
</div>
<div class="card-body" style="padding: 10px">
<form method="post" action="{{route('sendEmail')}}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input placeholder="Masukkan Nama Anda" type="text" style="border-color: #6eaa5e" class="form-control" name="nama" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input placeholder="Masukkan Email Anda" type="email" style="border-color: #6eaa5e" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input placeholder="Masukkan Alamat Anda" type="text" style="border-color: #6eaa5e" class="form-control" name="alamat" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Komentar (Opsional)</label>
    <textarea placeholder="Berikan komentar Anda" class="form-control" style="border-color: #6eaa5e" name="komentar" rows="4"></textarea>
  </div>
  </div>
<div class="card-footer" style="text-align: center"> <button name="send" type="submit" class="form-control btn" style="background-color: #6eaa5e"><b> Kirim</b></button></div>
@include('sweetalert::alert')
</form>

</div>
</div>

@endsection