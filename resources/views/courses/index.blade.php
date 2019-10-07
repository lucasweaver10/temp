@extends('layouts.layout')
@section('title')
        Rotterdam English Courses | Weaver English
@endsection
@section('content')
<div class="container-fluid bg-white">
  <div class="row justify-content-center pt-3">
    <div class="col-lg-12 text-center">
    <h1>Rotterdam English Courses</h1>
    <p class="lead">Find the English course that fits your schedule and needs.</p>
    </div>
  </div>
  <div class="row pb-5 justify-content-center">
    <div class="card-deck justify-content-center">
@foreach($courses as $course)
      <div class="col-lg-4 no-gutters align-content-center" style="margin-left: -15px; margin-right: -15px;">
        <div class="card" style="width: 24rem; margin-top: 2rem;">
        <img src="/images/{{ $course->image }}" class="card-img-top" alt="weaver english general english course in rotterdam">
            <div class="card-body">
              <h4 class="card-title">{{ $course->name }}</h4>
              <p class="card-text">{{ $course->day }}</p>
              <p class="card-text">{{ $course->description }}</p>
            </div>
            <div class="card-footer">
              <a href="/courses/{{ $course->id }}" class="btn btn-primary">VIEW COURSE</a>
            </div>
        </div>
      </div>
@endforeach
    </div>
  </div>
  <div class="row mt-5 align-content-center">
    <div class="col-lg-6 col-sm-12">
      <h2>Convenient Location</h2>
      <p>Rotterdam's most convenient location for English courses. Located right next to Rotterdam Central Station, you can reach your course
        via car, train, metro, tram, or bike.</p>
    </div>
    <div class="col-lg-6 col-sm-10 align-content-right g-map">
        <div class="card" style="width: 28rem; height: 24rem;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.581874721026!2d4.466963315350575!3d51.92333928802719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434b318fa5bd5%3A0x50418520688d5fdb!2sWeaver+English!5e0!3m2!1sen!2snl!4v1566041624375!5m2!1sen!2snl"
                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
    </div>
  </div>
  <!-- CTA -->
   <div class="row my-5 justify-content-center">
      <div class="col-12 col-md-auto text-center">
        <h2>Join Your English Course Today</h2>
          <p class="lead">Ready to start improving your English? Contact us today and we'll respond within 10 minutes.</p>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Request Information</a>
      </div>
    </div>
  <!-- End CTA -->
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Request Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="name" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="name" class="form-control" id="lastName" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll respond via email within 10 minutes.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
</div>
@endsection
