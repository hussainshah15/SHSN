@extends('master')
@section('content')
  <h3 style="text-align: center;"> Search Results</h3>
  @foreach($products as $item)
  <div class="searched-item" style="text-align: center;">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{$item['Gallery']}}">
    <div class="">
      <h2>{{$item["name"]}}</h2>
      <h6>{{$item["Discription"]}}</h6>
      

    </div>
    </a>
  </div>
@endforeach  





@endsection

    