<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0" style="padding-right: 45%">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="{{ asset('public/user/assets/img/logo.svg') }}" width= "100%"alt="" class="img-fluid"></a>
      </h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/product')}}">Product</a></li>
          <li><a href="{{url('/category')}}">Category</a></li>
          <li><a href="{{url('/connect')}}">Contact</a></li>
          <li><a href="{{url('/aboutus')}}">About Us</a></li>
          <li><a href="{{url('/login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        
      </div>

    </div>

  </header>