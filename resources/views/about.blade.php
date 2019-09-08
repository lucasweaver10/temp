@extends('layouts.layout')
@section('title')
        About Weaver English | Weaver English
@endsection
@section('content')
<div class="row py-5 home-callout-2">
  <div class="col-4 my-auto">
    <div class="card" style="width: 26rem; z-index: 2;">
      <div class="card-body">
        <h2 class="card-title">Premium English Courses for All Levels</h2>
        <p class="card-text">Find out how Weaver English can help you reach your goals of improving your English.</p>
      <form>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Courses:</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Mission</option>
          <option>Teachers</option>
          <option>Location</option>
          <option>Goals</option>
          <option>Teaching Style</option>
        </select>
      </div>
      </form>
        <a class="btn btn-primary" href="#mission">Go to Section</a>
      </div>
    </div>
  </div>
  <div class="col-8">
    <div class="card bg-dark text-white" style="margin-left: -15%; z-index: 1; border: 0px;">
      <img src="/images/english courses weaver english.jpeg" class="card-img" alt="english courses" style="object-fit: cover; max-height: 24rem;">
      <div class="card-img-overlay">
      </div>
    </div>
  </div>
</div>
<div class="row py-5" style="height: 30rem;" id="mission">
  <div class="col">
    <h2>Mission</h2>
    <p>Learn about our mission.</p>
  </div>
  <div class="col">
  </div>
</div>
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Teachers</h2>
    <p>Learn about our teachers.</p>
  </div>
  <div class="col">
  </div>
</div>
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Location</h2>
    <p>Learn about our location.</p>
  </div>
  <div class="col">
  </div>
</div>
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Goals</h2>
    <p>Learn about our goals.</p>
  </div>
  <div class="col">
  </div>
</div>
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Teaching Style</h2>
    <p>Learn about our teaching style.</p>
  </div>
  <div class="col">
  </div>
</div>

</div>
@endsection
