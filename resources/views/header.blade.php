<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KALA -
    {{ ucfirst($page) }}
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets1/img/favicon.png" rel="icon"> --}}
  {{-- <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="/assets/images/log2.png" alt="" class="img-fluid"></a> --}}
      </div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a
          @if($page=="home")
          class="active"
          @endif
           href="{{route('index')}}">Home</a></li>
          <li><a
          @if($page=="about")
          class="active"
          @endif
            href="{{route('about')}}">About</a></li>
          <li><a
          @if($page=="services")
          class="active"
          @endif
            href="{{route('services')}}">Services</a></li>
          <li><a
          @if($page=="team")
          class="active"
          @endif
            href="{{route('team')}}">Team</a></li>
          <li><a
          @if($page=="contact")
          class="active"
          @endif
            href="{{route('contact')}}">Contact Us</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
