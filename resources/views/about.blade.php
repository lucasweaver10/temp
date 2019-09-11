@extends('layouts.layout')
@section('title')
        About Weaver English | Weaver English
@endsection
@section('content')
<div class="row py-5 home-callout-2">
  <div class="col-4 my-auto">
    <div class="card" style="width: 26rem; z-index: 2;">
      <div class="card-body">
        <h2 class="card-title">A premium experience for all of our students</h2>
        <p class="card-text">Learn why Weaver English is different from any English school you've ever experienced.</p>
      <form>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Go-to Section:</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Mission</option>
          <option>Teachers</option>
          <option>Location</option>
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
      <img src="/images/english-courses-weaver-english.jpeg" class="card-img" alt="english courses" style="object-fit: cover; max-height: 24rem;">
      <div class="card-img-overlay">
      </div>
    </div>
  </div>
</div>
<div class="row py-5" style="height: 30rem;" id="mission">
  <div class="col">
    <h2>Mission</h2>
    <p>Our mission is to provide the most enjoyable experience possible for all of our students, from registration to course completion.</p>
  </div>
  <div class="col">
  </div>
</div>
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Teachers</h2>
    <p>Meet our teachers.</p>
  </div>
  <div class="col">
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
<div class="row py-5" style="height: 30rem;">
  <div class="col">
    <h2>Teaching Style</h2>
    <p>Learn about our unique teaching style.</p>
  </div>
  <div class="col">
  </div>
</div>

</div>
@endsection
