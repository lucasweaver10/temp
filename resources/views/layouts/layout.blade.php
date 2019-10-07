<!DOCTYPE HTML>

<html lang = "en">

<head profile="http://weaverenglish.nl/profile">
<link rel="icon"
      type="image/png"
      href="/images/weaver english favicon.png">

  <title>@yield('title', 'Weaver English')</title>

  <meta charset = "UTF-8" />

<!-- CSS -->

<link rel="stylesheet" type"text/css" href="{{ mix('/css/app.css') }}">

<!-- Latest compiled and minified CSS-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- CSS -->

<link rel="stylesheet" type"text/css" href="{{ mix('/css/app.css') }}">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

<!-- FONTS -->

<link rel="stylesheet" href="https://use.typekit.net/qpq5ghp.css">

<!-- JS -->


<!-- Video Animation -->
<script>
function deferVideo() {

  //defer html5 video loading
$("video source").each(function() {
  var sourceFile = $(this).attr("data-src");
  $(this).attr("src", sourceFile);
  var video = this.parentElement;
  video.load();
  // uncomment if video is not autoplay
  //video.play();
});

}
window.onload = deferVideo;

</script>



</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <a class="navbar-brand" href="/">
    <img src="/images/weaver english logo.svg" width="60" height="60" class="d-inline-block align-top" alt="weaver english logo">
  </a>
  <button href="/" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="/courses">COURSES</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="/about">ABOUT</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="/shop">SHOP</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-cta">
       <li class="nav-item">
           <a class="nav-link" href="/login">LOGIN</a>
        </li>
       <li class="nav-item">
           <a class="nav-link" href="/register">REGISTER</a>
       </li>
       <form class="form-inline">
         <a href="/contact" class="btn btn-primary ml-lg-3" role="button">CONTACT</a>
       </form>
    </ul>
  </div>
</nav>
<!-- End Navbar -->
  @yield('content')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('css/app.css') }}"></script>
<!-- Footer -->
<div class="container-fluid footer light justify-content-center">
  <div class="row py-5">
    <div class="col-lg-3 col-sm-0"></div>
    <div class="col-lg-2 col-sm-3">
      <h5>Contact</h5>
      <p>Weaver English<br>
      Stationsplein 45, A4.004<br>
      3013AK Rotterdam, NL<br>
      <a href="tel:0103075864">010-3075864</a></p>
    </div>
    <div class="col-lg-2 col-sm-3">
      <h5>Courses</h5>
        <ul class="list-unstyled justify-content-center">
            <li>
              <a href="#">General English Course</a>
            </li>
            <li>
              <a href="#">Business English Course</a>
            </li>
            <li>
              <a href="#">IELTS Exam Course</a>
            </li>
            <li>
              <a href="#" tabindex="-1" aria-disabled="true">Private Lessons</a>
            </li>
            <li>
              <a href="#">In-Company Lessons</a>
            </li>
          </ul>
    </div>
    <div class="col-lg-2 col-sm-3">
      <h5>About Us</h5>
        <ul class="list-unstyled justify-content-center">
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Reviews</a>
          </li>
          <li>
            <a href="#">Our Teachers</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          <li>
            <a href="#">Terms & Conditions</a>
          </li>
        </ul>
    </div>
    <div class="col-lg-3 col-sm-0"></div>
  </div>
  <div class="row justify-content-center py-2">
    <div class="col-12 justify-content-center text-center">
     <p>© 2019 Weaver English, All Rights Reserved | KVK: 65435079</p>
    </div>
  </div>
</div>
<!-- End Footer -->
</body>
</html>
