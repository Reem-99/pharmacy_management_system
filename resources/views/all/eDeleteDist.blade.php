<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Order Show page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
    
      <div class="profile">
        <img src="assets/img/person.png" alt="" class="img-fluid rounded-circle" id="profileimage">
        <h1 class="text-light"><a href="index.html" id="name">Profiles</a></h1>
        
      <nav class="nav-menu">
        <ul>
              <li><a href="{{ url('/all.eDeleteDist') }}"><i class="bx bx-user"></i> <span> Distributors</span></a></li>
              <li><a href="{{ url('/order.showOrder') }}"><i class="bx bx-message-detail"></i> <span> show order</span></a></li>
             
              <li><a href="{{ url('/order.orderPage') }}"><i class="bx bx-plus"></i> <span>save order</span></a></li>
            
              <li><a href="{{ url('/mainPageA') }}"><i class="bx bx-home"></i> Home</a></li>
  
    
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= About Section ======= -->
    @foreach ( $distributors as $dist )
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Distributions</h2>
       </div>
       

          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            
           
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>User Name:</strong> {{ $dist['uname'] }}</li>
                  
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $dist['number'] }}</li>
                  
                </ul>
              </div>
             
              <div>
                <form action="{{ url('/all.eDeleteDist/'.$dist['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                      <input class="btn btn-primary" type="submit" name="submit" value="Delete">
                      </form>
                    </div>
            </div>
            
            
          </div>
        </div>

      </div>
     
            
           
    </section><!-- End About Section -->

    @endforeach  
 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>