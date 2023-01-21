@extends('master')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ca_1.JPG" class="d-block w-200" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ca_2.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ca_3.JPG" class="d-block w-100" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
<div class="trending-wrapper">
  <h3>Trending product</h3>
  @foreach($products as $item)
  <div class="trending-item">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{$item['Gallery']}}">
    <div class="">
      <h3>{{$item["name"]}}</h3>

    </div>
    </a>
  </div>
@endforeach
</div>




</div>

@endsection

    