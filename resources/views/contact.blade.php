@extends('layouts.layout')
@section('title')
        Contact Us | Weaver English
@endsection
@section('content')
<div class="container-fluid bg-white">
  <div class="row py-3">
    <div class="col d-flex justify-content-center">
      <div class="card align-content-center" style="width: 36rem;">
          <div class="card-body">
            <h1>Contact Us</h1>
            <p>Contact us and we'll reply by email within 1 hour with more information.</p>
              <form>
                <div class="form-group">
                  <label for="exampleInputPassword1">First Name</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="First name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Which course are you interested in?</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>General English</option>
                        <option>Business English</option>
                        <option>IELTS</option>
                        <option>Private Lessons</option>
                        <option>In-Company Lessons</option>
                      </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Message</label>
                  <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your message here (optional)."></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
