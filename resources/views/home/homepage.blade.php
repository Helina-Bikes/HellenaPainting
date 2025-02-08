<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->
        @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
     @include('home.services')
      <!-- services section end -->
      <!-- about section start -->
     @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
     
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Teams</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
   <div class="container">
      <h1 class="choose_taital">Why Choose Us</h1>
      <p class="choose_text">
         At Hellena Painting, we take pride in delivering exceptional painting services that exceed expectations. 
         Here's why clients trust us:
      </p>
      <a href="javascript:void(0);" class="read_more_btn" onclick="toggleReadMore()">Read More</a>

      <!-- Read More Content (Initially Hidden) -->
      <div id="readMoreContent" style="display: none; margin-top: 15px;">
         <p>🎨 <bold>Expert Craftsmanship</bold> – Our skilled painters bring years of experience and precision to every project.</p>
         <p>🖌 <bold>High-Quality Materials</bold> – We use premium paints and finishes to ensure long-lasting beauty and durability.</p>
         <p>🏠 <bold>Customized Solutions</bold> – Whether it’s interior, exterior, or decorative painting, we tailor our services to your needs.</p>
         <p>⏳ <bold>Timely & Reliable</bold> – We value your time and complete projects efficiently without compromising quality.</p>
         <p>💡 <bold>Creative Designs</bold> – From modern aesthetics to classic finishes, we bring creativity and innovation to your space.</p>
         <p>🤝 <bold>Customer Satisfaction</bold> – Your happiness is our priority! We work closely with you to bring your vision to life.</p>
         <p><bold>Let Hellena Painting transform your walls into masterpieces. Because every wall tells a story! 🎨✨</bold></p>
      </div>
   </div>
</div>

<!-- JavaScript (Place Before </body>) -->
<script>
   function toggleReadMore() {
      var content = document.getElementById("readMoreContent");
      var button = document.querySelector(".read_more_btn");

      if (content.style.display === "none" || content.style.display === "") {
         content.style.display = "block"; // Show content
         button.innerText = "Read Less"; // Change button text
      } else {
         content.style.display = "none"; // Hide content
         button.innerText = "Read More"; // Revert button text
      }
   }
</script>

      <!-- choose section end -->
      <!-- footer section start -->
      
     @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>