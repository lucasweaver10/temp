@extends('layouts.layout')
@section('title')
        English Courses in Rotterdam | Weaver English
@endsection
@section('content')
<div class="container-fluid bg-white">
  <div class="row py-5">
    <div class="col-lg-4 col-sm-12 my-auto">
        <div class="card" style="width: 26rem; z-index: 2;">
            <div class="card-body">
              <h2 class="card-title">Find the right English course for you</h2>
              <p class="card-text">Find the course that will help you improve the English skills you need.</p>
            <form method="POST" action="/courses">
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Courses:</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>General English</option>
                        <option>Business English</option>
                        <option>IELTS Prep</option>
                        <option>Private Lessons</option>
                        <option>In-Company Lessons</option>
                      </select>
                    </div>
              </form>
              <a href="#" class="btn btn-primary btn-lg">View Course</a>
            </div>
          </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card bg-dark text-white" style="margin-left: -15%; z-index: 1; border: 0px;">
            <img src="/images/english-courses-weaver-english.jpeg" class="card-img" alt="english courses" style="object-fit: cover; max-height: 24rem;">
            <div class="card-img-overlay">
            </div>
        </div>
    </div>
  </div>
<div class="row py-5">
  <div class="col-lg-3 col-sm-12">
    <h2>Premium English courses customized to your level</h2>
    <p class="lead">Our English courses are designed to help you improve quickly and achieve your specific goals.</p>
  </div>
  <div class="col-lg-9 col-sm-12">
    <div class="card-deck">
      <div class="card mt-2">
        <img src="/images/english-course-classroom-rotterdam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Group Courses</h3>
          <p class="card-text">Group General & Business English courses that provide you with plenty of
              chances to practice and improve your speaking.</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card mt-2">
        <img src="/images/weaver-english-private-lessons.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Private Lessons</h3>
          <p class="card-text">Private one-to-one lessons are the best way to imporve the specific English
              skills you need.</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card mt-2">
        <img src="/images/ielts course weaver english.jpg" class="card-img-top" alt="ielts courses rotterdam">
        <div class="card-body">
          <h3 class="card-title">IELTS Exam Prep</h3>
          <p class="card-text">The most specialized IELTS prep course in all of Rotterdam. Learn everything you need to know to pass the IELTS exam.</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row text-center py-5">
    <div class="col-lg-12 justify-content-center">
        <h2>Improve Your English in a Way That Will Last</h2>
        <p class="lead">Improve quickly while building good English speaking habits that last for years.</p>
    </div>
    <div class="col-12 align-center">
            <iframe src="https://player.vimeo.com/video/318047417" width="100%" height="420" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
</div>
<div class="row py-5">
    <div class="col-lg-3 col-sm-12">
      <h2>Why Weaver English?</h2>
      <p class="lead">Fun English lessons that help you improve quickly.</p>
    </div>
    <div class="col-lg-9 col-sm-12">
      <div class="card-deck">
        <div class="card mt-2">
          <img src="/images/flexible course schedules.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Flexible Schedules</h3>
            <p class="card-text">We know you're busy. Our flexible English course schedules were designed with busy professionals in mind.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/convenient location.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Convenient Location</h3>
            <p class="card-text">Located in the heart of Rotterdam, right next to Central Station. Just seconds away from train, metro, and tram.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card mt-2">
          <img src="/images/comfortable classrooms 2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Comfortable Classrooms</h3>
            <p class="card-text">Huge boardrooms, super-comfortable chairs, large TV-screens, and delicious cappuccinos all waiting for you.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row justify-content-center py-5">
    <div class="row">
            <div class="col-12 text-center">
                <h2>Find the Right Course for You</h2>
                <p class="lead">Our English courses are designed to help you improve quickly and achieve your specific goals.</p>
            </div>
    </div>
    <!-- Courses Section -->
    <div class="row justify-content-center home-course-block-one-2">
      <div class="card-deck">
        <!-- Beginning individual course card one -->
             <div class="card" style="width: 24rem; margin-top: 2rem;">
                <img src="/images/group english course rotterdam.jpg" class="card-img-top" alt="weaver english general english course in rotterdam">
                      <div class="card-body">
                        <h4 class="card-title">Advanced General English Course</h4>
                        <p class="card-text">Monthly access to our Advanced English Course.</p>
                      </div>
                      <div class="card-footer">
                          <a href="#" class="btn btn-primary">LEARN MORE</a>
                       </div>
              </div>
           <!-- End individual course card one -->
           <!-- Beginning individual course card two -->
            <div class="card" style="width: 24rem; margin-top: 2rem;">
              <img src="/images/fun group english lessons.jpg" class="card-img-top" alt="weaver english general english course in rotterdam">
                    <div class="card-body">
                          <h4 class="card-title">Intermediate General English Course</h4>
                          <p class="card-text">Monthly access to our Intermediate English Course.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">LEARN MORE</a>
                    </div>
            </div>
           <!-- End individual course card two -->
            <!-- Beginning individual course card three -->
          <div class="card" style="width: 24rem; margin-top: 2rem;">
            <img src="/images/beginners english courses.jpg" class="card-img-top" alt="weaver english general english course in rotterdam" style="object-fit: cover;">
                <div class="card-body">
                      <h4 class="card-title">Beginners General English Course</h4>
                          <p class="card-text">Monthly access to our Beginners English Course.</p>
                 </div>
                      <div class="card-footer">
                            <a href="#" class="btn btn-primary">LEARN MORE</a>
                      </div>
            </div>
           <!-- End individual course card three -->
          </div>
        </div>
      <div class="row justify-content-center home-course-block-two-2">
      <div class="card-deck">
        <!-- Beginning individual course card four -->
      <div class="card" style="width: 24rem; margin-top: 2rem;">
          <img src="/images/business english course 2.jpeg" class="card-img-top" alt="weaver english business english course in rotterdam">
                <div class="card-body">
                  <h4 class="card-title">Business English Course</h4>
                  <p class="card-text">Monthly access to our Advanced English Course.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                 </div>
        </div>
     <!-- End individual course card four -->
     <!-- Beginning individual course card five -->
      <div class="card" style="width: 24rem; margin-top: 2rem;">
        <img src="/images/ielts course weaver english.jpg" class="card-img-top" alt="weaver english ielts prep course in rotterdam">
              <div class="card-body">
                    <h4 class="card-title">IELTS Exam Prep Course</h4>
                    <p class="card-text">Monthly access to our Intermediate English Course.</p>
              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn-primary">LEARN MORE</a>
              </div>
      </div>
     <!-- End individual course card five -->
      <!-- Beginning individual course card six -->
    <div class="card" style="width: 24rem; margin-top: 2rem;">
      <img src="/images/private english lessons 2 zoomed.jpeg" class="card-img-top" alt="weaver english private lessons">
          <div class="card-body">
                <h4 class="card-title">Private Lessons</h4>
                    <p class="card-text">Monthly access to our Beginners English Course.</p>
           </div>
                <div class="card-footer">
                      <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
      </div>
     <!-- End individual course card six -->
      </div>
    </div>
        <!-- End Courses Section -->
    </div>
    <div class="row py-5 justify-content-center">
      <div class="col-12 col-md-auto text-center">
        <h2>Join Your English Course Today</h2>
          <p class="lead">Ready to start improving your English? Contact us today and we'll respond within 10 minutes.</p>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Request Information</a>
      </div>
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
