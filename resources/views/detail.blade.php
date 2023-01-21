@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class ="col-sm-6">
            <img class="detail-img" src="{{$product['Gallery']}}" alt="">


        </div>
        <div class ="col-sm-6">
            <a href="\">HomePage</a>
            <h2>Name:{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Details:{{$product['Discription']}}</h4>
            <h4>Category:{{$product['category']}}</h4>
            <br><br>
    <form action="/add_to_cart" method="POST">
    <input type="hidden" name="product_id" value="{{$product['id']}}">
    @csrf
    <button class="btn btn-success" >Add to cart </button>
    

    </form>
            <br><br>
            <button class="btn btn-primary">Buy now</button>
    
        </div>
    </div>
</div>
@endsection

    