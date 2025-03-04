<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     @include('home.homecss')
   </head>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

   <body>
      <div class="header_section">
        @include('home.header')
        @include('home.banner')
      </div>
    
     @include('home.services')
     @include('home.about')
   <div class="team_section layout_padding">
   <div class="container">
      <h1 class="team_title"style="padding-top: 40px;">Meet Our Talented Teams</h1>
      <p class="team_intro">
         At Hellena Painting, our teams are the backbone of our success. We believe in bringing together the best talent to deliver exceptional results for every project. Let’s introduce you to the experts who make your spaces beautiful!
      </p>
      <div class="team_section_2">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="team_main">
                     <div class="box_left">
                        <p class="team_text">Our expert painter, Deng, is known for his impeccable attention to detail. With years of experience, he transforms every corner of your home into a masterpiece. His passion for color and design helps bring every client’s vision to life.</p>
                     </div>
                     <div class="box_right">
                        <div class="team_taital_left">
                           <div class="team_img"><img src="images/ownerr.png" alt="Team Member 1" class="small-team-img"></div>
                           <div class="team_role"><img src="images/quick-icon.png" alt="Team Icon"></div>
                        </div>
                        <div class="team_taital_right">
                           <h4 class="team_name">Leek Deng</h4>
                           <p class="team_role_title">Master Painter</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
   <div class="team_main">
      <div class="box_left">
         <p class="team_text">Our lead designer, has a keen eye for style and innovation. Her creativity inspires the team to push boundaries and deliver outstanding results that perfectly match our clients’ needs and desires.</p>
      </div>
      <div class="box_right">
         <div class="team_taital_left">
            <div class="team_img">
               <img src="images/helenastaff.png" alt="Team Member 2" class="small-team-img">
            </div>
            <div class="team_role">
               <img src="images/quick-icon.png" alt="Team Icon">
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
      <div id="readMoreContent" style="display: none; margin-top: 15px; font_size: 100px;">
         <p>🎨 <strong>Expert Craftsmanship</strong> – Our skilled painters bring years of experience and precision to every project.</p>
         <p>🖌 <strong>High-Quality Materials</strong> – We use premium paints and finishes to ensure long-lasting beauty and durability.</p>
         <p>🏠 <strong>Customized Solutions</strong> – Whether it’s interior, exterior, or decorative painting, we tailor our services to your needs.</p>
         <p>⏳ <strong>Timely & Reliable</strong> – We value your time and complete projects efficiently without compromising quality.</p>
         <p>💡 <strong>Creative Designs</strong> – From modern aesthetics to classic finishes, we bring creativity and innovation to your space.</p>
         <p>🤝 <strong>Customer Satisfaction</strong> – Your happiness is our priority! We work closely with you to bring your vision to life.</p>
         <p><strong>Let Hellena Painting transform your walls into masterpieces. Because every wall tells a story! 🎨✨</strong></p>
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
            <p class="copyright_text">2025 All Rights Reserved. </p>
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