<div class="header_main">
   <div class="mobile_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo_mobile">
            <a href="{{ url('/') }}">
               <img src="{{ asset('images/hellenalogo.png') }}" alt="Hellena Painting Logo">
            </a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
         </div>
      </nav>
   </div>
   <div class="container-fluid">
      <div class="logo">
         <a href="{{ url('/') }}">
            <img src="{{ asset('images/hellenalogo.png') }}" alt="Hellena Painting Logo">
         </a>
      </div>
      <div class="menu_main">
         <ul>
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#about_section">About</a></li>
            <li><a href="#services_section">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact us</a></li>
         </ul>
      </div>
   </div>
</div>
