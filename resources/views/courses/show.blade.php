@extends('layouts.layout')

@section('title')
{{ $course->name }}

@endsection

@section('content')
<div class="container-fluid bg-white">

  <div class="row py-3 home-callout-2">

    <div class="col-4 my-auto">
        <div class="card" style="width: 26rem; z-index: 2; margin-left: 10%;">
            <div class="card-body">
              <h2 class="card-title">{{ $course->name }}</h2>
              <p class="lead card-text">{{ $course->description }}</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Day: {{ $course->day }}</li>
                <li class="list-group-item">Time: {{ $course->time }}</li>
                <li class="list-group-item">Size: {{ $course->size }} students</li>
                <li class="list-group-item">Length: {{ $course->length }}</li>
                <li class="list-group-item">Price: €{{ $course->price }} per month</li>
              </ul>
              <a href="#" class="btn btn-primary btn-lg mt-3">Register</a>
            </div>
          </div>
    </div>

    <div class="col-8">
      <div class="card bg-dark text-white" style="margin-left: -10%; z-index: 1; border: 0px;">
      <img src="/images/{{ $course->image }}" class="card-img" alt="english courses" style="object-fit: cover; max-height: 36rem;">
          <div class="card-img-overlay">
          </div>
      </div>
    </div>

  </div>

    <div class="row py-5">
      <div class="col-3">
        <h2>Course focus:</h2>
        <p class="lead">This course is designed to help you speak better English quickly by correcting your most common mistakes.</p>
      </div>
      <div class="col-9">
        <div class="card-deck">
          <div class="card">
            <img src="/images/english-course-classroom-rotterdam.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Grammar & Tenses</h3>
                <p class="card-text">Using the right tense can be one of the most difficult parts of speaking English.
                  We explain the tenses in a way that's easy to understand so you can finally feel confident using them.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
          </div>
          <div class="card">
            <img src="/images/weaver english private lessons.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Vocabulary</h3>
                <p class="card-text">Do you struggle to find the right words when speaking English? This course focuses
                  on teaching you useful new words that you will use every day.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
          </div>
          <div class="card">
            <img src="/images/ielts course weaver english.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Speaking Ability</h3>
                <p class="card-text">Practice practice practice. That's what we help you do to improve your English speaking
                  skills. Build confidence and finally feel comfortable speaking English.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
          </div>
        </div>
      </div>
    </div>
<div class="row course-cta" style="z-index: 1;"></div>
<div class="row" style="margin-top: -5%; z-index: 2;">
  <div class="col-3"></div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
        <h2>Premium English Courses</h2>
          <p>Discover why students from over 30 countries have chosen Weaver English for their English courses.</p>
          <button class="btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Request Info</button>
        </div>
      </div>

    </div>
  <div class="col-3"></div>
</div>

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
                  <label for="exampleInputPassword1">First Name</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
