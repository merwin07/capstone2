<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haven Campsite Liwliwa</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Haven Campsite Resort</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        // Initially hide all answers
        $('.answer').hide();
  
        // Add a click event to the 'toggle' class to toggle the answer
        $('.toggle').click(function() {
          // Find the associated answer element using next()
          var answer = $(this).next('.answer');
          // Toggle the answer's visibility
          answer.slideToggle();
        });
      });
    </script>

  
    <!-- Favicons -->
    <link href="web/asset/img/favicon.png" rel="icon">
    <link href="web/asset/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="web/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="web/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="web/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="web/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="web/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="web/asset/checkroom-css/bootstrap.min.css" />
  
    <!-- Template Main CSS File -->
    <link href="web/asset/css/main.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="web/asset/checkroom-css/style.css" />

     <!-- Icons font CSS-->
     <link href="web/asset/form-vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="web/asset/form-vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


    <!-- Vendor CSS-->
    <link href="web/asset/form-vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="web/asset/form-vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

</head>
<body>
    <!-- Navigation Bar -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index');}}" class="logo d-flex align-items-center">
        <h1>Haven Campsite Liwliwa<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('index');}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('accommodations');}}">Accommodations</a></li>
              <li><a href="{{route('events');}}">Events</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('contacts');}}">Contact and Location</a></li>
              <li><a href="{{route('faqs');}}">FAQs</a></li>
            </ul>
          </li>
          <li><a href="{{route('booknow');}}" class="active">Book Now</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/asset/img/events/event-banner.png');"></div>      
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade"></div>
      
            

    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form action="{{route ('date.create')}}" method="post">
              @csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" name="checkIn" min="{{ date('Y-m-d') }}" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check out</span>
										<input class="form-control" type="date" name="checkOut"  min="{{ date('Y-m-d') }}" required>
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">No of rooms</span>
										<select class="form-control" name="noRoom">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<select class="form-control" name="adult">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Children</span>
										<select class="form-control" name="children">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div> -->
							<div class="form-btn">
								<button class="submit-btn">Check room availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
  </main>

  <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Haven Campsite Resort.</h3>
              <p>
                Sitio Liwliwa, San Felipe <br>
                Zambales, Philippines<br><br>
                <strong>Phone:</strong><a href="tel:09177069136"> 0917 706 9136</a><br>
                <strong>Email:</strong><a href="mailto:beachhavencampsite@gmail.com"> beachhavencampsite@gmail.com</a><br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://www.facebook.com/havencampsiteliwliwa/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/havencampsiteliwliwa/?hl=en" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->
  
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Navigation</h4>
            <ul>
            <li><a href="{{route('index');}}">Home</a></li>
              <li><a href="{{route('contacts');}}">Contact Us</a></li>
              <li><a href="{{route('faqs');}}">FAQs</a></li>
              <li><a href="{{route('booknow');}}">Book Now</a></li>
            </ul>
          </div><!-- End footer links column-->
  
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="{{route('accommodations');}}">Accomodations</a></li>
              <li><a href="{{route('events');}}">Events</a></li>
            </ul>
          </div><!-- End footer links column-->
        </div>
      </div>
    </div>
  
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Haven Campsite Beach Resort</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="#">ange-LATE-o</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>