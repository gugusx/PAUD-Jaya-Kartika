@extends('layouts.app')
@section('title','PAUD Jaya Kartika')
@section('content')

<div class="container" style="padding: 60px 15px 230px">
<hr>

<div class="row">
    <div class="col-sm-3" style="padding-bottom: 20px">
        @foreach($search_pages as $search_page)
<div class="card" style="border-color: #6eaa5e">
<a href="{{$search_page->url}}">
<div class="card-header">{{$search_page->name}}</div>
  </a>
</div>
@endforeach
</div>

</div>

</div>

@endsection