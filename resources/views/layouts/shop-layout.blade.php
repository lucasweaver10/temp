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

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>

<!-- FONTS -->

<link rel="stylesheet" href="https://use.typekit.net/qpq5ghp.css">

<script src="https://kit.fontawesome.com/ebf0c5af4b.js"></script>

<!-- JS -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('css/app.css') }}"></script>
<script>document.getElementById("checkoutButton").addEventListener("click", redirectToCheckout);</script>

<!-- Stripe -->
<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');
</script>
<!-- End Stripe -->

</head>
<body>
<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg">
  <a class="navbar-brand" href="/">
    <img src="/images/weaver english logo.svg" width="60" height="60" class="d-inline-block align-top" alt="weaver english logo">
  </a>
  <div class="collapse navbar-collapse">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
         <li class="navbar-item">
            <a class="nav-item nav-link" href="/shop">SHOP</a>
         </li>
       </ul>
       <ul class="navbar-nav ml-auto nav-cta">
        <li class="navbar-item mr-5">
            <a href="/cart">
              <i class="fas fa-shopping-cart"></i>
              <div class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</div>
            </a>
          </li>
           <li>
            <form class="form-inline">
            <button class="btn btn-primary ml-lg-0" type="button" id="checkoutButton">CHECKOUT</button>
          </form>
           </li>
       </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

  @yield('content')


</body>
</html>
