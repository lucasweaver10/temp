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
<div class="row my-5" style="height: 30rem;" id="mission">
   <div class="col-lg-4">
    <h2>Mission</h2>
    <p>Our mission is to help you achieve your goals by providing the most enjoyable learning experience possible for all of our students, from registration to course completion.</p>
  </div>
  <div class="col-lg-8">
     <div class="card-deck">
        <div class="card mt-2">
          <img src="/images/comfortable classrooms 2.jpeg" class="card-img-top" alt="english teacher rotterdam weaver english kate">
          <div class="card-body">
            <h3 class="card-title">Customer Service</h3>
            <p class="card-text">We pride ourselves on our American-style customer service. We treat our students like valued members of the Weaver English family.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/convenient location.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Customized Lessons</h3>
            <p class="card-text">We don't use textbooks in our classes. Every class gets evaluated and taught according to a custom lesson plan made by your teacher.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
  </div>

</div>
<div class="row my-10" style="height: 30rem;">
  <div class="col-lg-2">
    <h2>Teachers</h2>
    <p>Meet our Rotterdam English teachers.</p>
  </div>
  <div class="col-lg-10">
     <div class="card-deck">
        <div class="card mt-2">
          <img src="/images/kate steckmest.jpeg" class="card-img-top" alt="english teacher rotterdam weaver english kate">
          <div class="card-body">
            <h3 class="card-title">Kate</h3>
            <p class="card-text">Kate is an American teacher from Portland, Oregon, USA. She has taught in Australia, New Zealand, Rotterdam & Canada. Her specialty is pronouncation.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/kate steckmest.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Jesslyn</h3>
            <p class="card-text">Jesslyn is a Canadian teacher with experience teaching in Italy and the Netherlands. Her specialty is grammar and Academic English.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/kate steckmest.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Sarah</h3>
            <p class="card-text">Sarah is Irish and has taught extensively in Spain and the Netherlands. Her specialty is vocabulary and word choice.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
  </div>

</div>
<div class="row mt-5 align-content-center">
    <div class="col-lg-6 col-sm-12">
      <h2>Convenient Location</h2>
      <p>The most convenient location for English courses in Rotterdam. Located right next to Rotterdam Central Station, you can reach your course via car, train, metro, tram, or bike.</p>
    </div>
    <div class="col-lg-6 col-sm-10 align-content-right g-map">
        <div class="card" style="width: 28rem; height: 24rem;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.581874721026!2d4.466963315350575!3d51.92333928802719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434b318fa5bd5%3A0x50418520688d5fdb!2sWeaver+English!5e0!3m2!1sen!2snl!4v1566041624375!5m2!1sen!2snl"
                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
    </div>
  </div>
<div class="row my-5" style="height: 30rem;">
  <div class="col">
    <h2>Teaching Style</h2>
    <p>Our unique teaching style combines relevance and repitition to enable you to learn English in a way that will have you speaking English confidently for years.</p>
  </div>
  <div class="col-lg-8">
     <div class="card-deck">
        <div class="card mt-2">
          <img src="/images/comfortable classrooms 2.jpeg" class="card-img-top" alt="english teacher rotterdam weaver english kate">
          <div class="card-body">
            <h3 class="card-title">Relevant Course Content</h3>
            <p class="card-text">Our lessons are always relevant to real-world topics that you will use every day. Our course content is custom-tailored to make sure you will learn the words and skills that you need to succeed in your daily life.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/convenient location.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Repition & Muscle Memory</h3>
            <p class="card-text">We know you make mistakes, that's why you're here. Our method is to fix your mistakes by helping you build new habits that help you to use English mistake-free on a day-to-day basis.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- CTA -->
   <div class="row mt-5 justify-content-center">
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
