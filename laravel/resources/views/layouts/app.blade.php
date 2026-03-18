<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>AsiaCarTrade</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      <link href="https://fonts.googleapis.com/..." rel="stylesheet">

  </head>
  <body class="d-flex flex-column h-100">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar" id="mainNavbar">
        <div class="container">
          <a class="navbar-brand" href="{{ route('my_home') }}">
           <img src="{{ asset('images/Asiacar_Logo.png') }}" class="navbar_logo" alt="AsiaCarTrade"></a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
          </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-uppercase fw-bold">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('my_home') ? 'active' : '' }}" href="{{ route('my_home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about_us') ? 'active' : '' }}" href="{{ route('about_us') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('my_store') ? 'active' : '' }}" href="{{ route('my_store') }}">Store</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link {{ request()->routeIs('my_services.*') ? 'active' : '' }}" href="{{ route('my_services') }}" id="servicesDropdown">Services</a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li><a class="dropdown-item nav-link {{ request()->routeIs('my_trade') ? 'active' : '' }}" href="{{ route('my_trade') }}">Trade</a></li>
                <li><a class="dropdown-item nav-link {{ request()->routeIs('my_bid') ? 'active' : '' }}" href="{{ route('my_bid') }}">Bid</a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('my_blog') ? 'active' : '' }}" href="{{ route('my_blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('my_careers') ? 'active' : '' }}" href="{{ route('my_careers') }}">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

      <div class="main">
          @yield('content')
      </div>


  <footer class="footer mt-auto bg-black text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h1 class="text-uppercase text-danger  border-end border-danger border-2 py-5 pt-5 ">Contact Us</h1>
        </div>
          
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <div>
          <ul class="list-unstyled mb-0 ">
            <li class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start">
              <i class="fab fa-facebook fs-4 text-danger me-3" style="width: 35px; text-align: center;"></i>
              <a href="https://www.facebook.com/share/1863wcpDbk/?mibextid=wwXIfr" class="text-white text-decoration-none contact-link">AsiaCar Trade INC.</a>
            </li>

            <li class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start">
              <i class="fas fa-envelope fs-4 text-danger me-3" style="width: 35px; text-align: center;"></i>
              <a href="mailto:asiacartrade2025@gmail.com" class="text-white text-decoration-none contact-link">asiacartrade2025@gmail.com</a>
            </li>

            <li class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start">
              <i class="fab fa-tiktok fs-4 text-danger me-3" style="width: 35px; text-align: center;"></i>
              <a href="https://www.tiktok.com/@asiacarstrade" class="text-white text-decoration-none contact-link">AsiaCar Trade INC.</a>
            </li>

            <li class="d-flex align-items-center justify-content-center justify-content-md-start">
              <i class="fas fa-phone fs-4 text-danger me-3" style="width: 35px; text-align: center;"></i>
              <a href="tel:09171043664" class="text-white text-decoration-none contact-link">0917 104 3664</a>
            </li>
          </ul>
        </div>
      </div>
        

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start justify-content-center justify-content-md-start">
                <i class="fas fa-map-marker-alt fs-4 text-danger me-2 mt-0" style="width: 35px; text-align: center;"></i>
                <address class="mb-0 text-start">
                  <a href="https://maps.google.com/?q=AsiaCar+Trade+Inc" target="_blank" class="text-white text-decoration-none contact-link" style="line-height: 1.6;">
                    <strong>AsiaCar Trade INC.</strong><br>
                    1504, Jollibee Plaza Condominium,<br>
                    F Ortigas Jr. Road, San Antonio<br>
                    City of Pasig, 1600
                  </a>
                </address>
                
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <div class="d-flex justify-content-center">
              <img src="{{ asset('images/Asiacar_Logo.png') }}" alt="AsiaCarTrade" width="250">
            </div>
          </div>
        
      </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>