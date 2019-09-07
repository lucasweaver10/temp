@extends('layouts.shop-layout')

@section('title')
        Weaver English Payment Portal
@endsection

@section('content')
   <div class="container-fluid bg-dark">
    <div class="row justify-content-center">
     <div class="card-deck">



      <!-- Beginning individual course card one -->

          <div class="card" style="width: 24rem; margin-top: 2rem;">
            <div class="card-header"><h5>Course Payment</h5></div>
      <img src="https://weaverenglish.nl/wp-content/uploads/2018/07/general-english-course.PNG" class="card-img-top" alt="weaver english general english course in rotterdam">
              <div class="card-body">
      <h4 class="card-title"></h4>
       <p class="card-text">Monthly access to our Advanced English Course.</p>
       <p class="card-text"></p>
                  <div class="form-group">
             <label for="generalCoursePurchase">Choose your subscription:</label>
              <select class="form-control" id="generalCoursePurchase">
                <option>Unlimited VIP Pass</option>
                <option>Season Pass</option>
                <option>One Month Access</option>
                <option>One Lesson Access</option>
              </select>
                  </div>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
          </div>



        <!-- End individual course card one -->
        <!-- Beginning individual course card two -->

          <div class="card" style="width: 18rem; margin-top: 2rem;">
            <div class="card-header"><h5>Course Payment</h5></div>
      <img src="https://weaverenglish.nl/wp-content/uploads/2018/07/business-english-course.png" class="card-img-top" alt="weaver english general english course in rotterdam">
              <div class="card-body">
      <h4 class="card-title">Intermediate Course Membership</h4>
       <p class="card-text">Monthly access to our Intermediate English Course.</p>
                  <div class="form-group">
             <label for="generalCoursePurchase">Choose your subscription:</label>
              <select class="form-control" id="generalCoursePurchase">
                <option>Unlimited VIP Pass</option>
                <option>Season Pass</option>
                <option>One Month Access</option>
                <option>One Lesson Access</option>
              </select>
                  </div>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
          </div>

        <!-- End individual course card two -->
         <!-- Beginning individual course card three -->

          <div class="card" style="width: 24rem; margin-top: 2rem;">
            <div class="card-header"><h5>Course Payment</h5></div>
      <img src="https://weaverenglish.nl/wp-content/uploads/2018/07/general-english-course.png" class="card-img-top" alt="weaver english general english course in rotterdam">
              <div class="card-body">
      <h4 class="card-title">Beginners Course Membership</h4>
       <p class="card-text">Monthly access to our Beginners English Course.</p>
                  <div class="form-group">
             <label for="generalCoursePurchase">Choose your subscription:</label>
              <select class="form-control" id="generalCoursePurchase">
                <option>Unlimited VIP Pass</option>
                <option>Season Pass</option>
                <option>One Month Access</option>
                <option>One Lesson Access</option>
              </select>
                  </div>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
          </div>

        <!-- End individual course card three -->
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="card">



  </div>

@endsection
