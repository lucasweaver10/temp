@extends('shop-layout')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<div class="container">
    @if(Session::has('cart'))
        <div class="row py-5">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <h4><strong>{{ $product['item']['name'] }}</strong></h4>
                                <span class="label label-success">€{{ $product['price'] }}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toogle" data-toggle="dropdown">Edit</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reduce by 1</a></li>
                                        <li><a href="#">Reduce All</a></li>
                                    </ul>
                                </div>
                                <span class="badge">{{ $product['qty'] }}</span>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
</div>
@endsection