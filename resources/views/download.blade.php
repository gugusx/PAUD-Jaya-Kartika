@extends('layouts.app')
@section('title','PAUD Jaya Kartika')
@section('content')

<div class="container" style="padding: 60px 15px 50px">
<hr>
<h3 style="text-align: center">Download</h3>
<hr>

<div class="row">
<div class="col-sm-4">
  <div class="card" style="border-color: #6eaa5e">
  
  <div class="card-body">
  <a href="{{url('dokumen/BROSUR_JK.pdf')}}" target="_blank"> <h5 class="card-text" style="text-align:center; color: #6eaa5e"><i class="fa fa-download" aria-hidden="true"></i><b> Brosur Jaya Kartika</b> </h5>
  </a></div>
</div>
<br>
  
  </div>

</div> <br>
<hr>
</div>


@endsection