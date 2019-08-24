@extends('layouts.shop-layout')

@section('title')
        Checkout
@endsection

@section('content')
<div class="container">
        <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-8">
<form action="https://api.mollie.com/v2/customers/{{request('email')}}/subscriptions" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
                </div>
                <div class="col-2"></div>
</div>
@endsection
