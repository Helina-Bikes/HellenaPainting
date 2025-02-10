<div id="about_section" class="about_section layout_padding">
   <div class="container-fluid">
      <div class="row">
         <!-- Left Column: About Us Text -->
         <div class="col-md-6">
            <div class="about_taital_main">
               <h1 class="about_taital">About Us</h1>
               <p class="about_text"> 
                  At Hellena Painting, we believe every wall has a story to tell. With years of experience in professional painting, we bring creativity, precision, and quality to every project.
               </p>

               <!-- Hidden Content (Initially Hidden) -->
               <div id="aboutMoreContent" style="display: none;">
                  <p>Whether it's interior painting, wall designs, or decorative finishes, we transform spaces with vibrant colors and flawless finishes.</p>
                  <p>Our team of skilled painters is dedicated to delivering exceptional results, ensuring every brushstroke adds beauty and elegance to your home or business.</p>
                  <p>We use high-quality materials, modern techniques, and a passion for perfection to make your vision a reality.</p>
                  <p><strong>Let us bring color to your world—because at Hellena Painting, every wall speaks art. 🎨✨</strong></p>
               </div>

               <!-- Read More Button -->
               <div class="readmore_bt">
                  <a href="javascript:void(0);" id="toggleAboutBtn">Read More</a>
               </div>
            </div>
         </div>

         <!-- Right Column: Image -->
         <div class="col-md-6 padding_right_0">
            <div><img src="images/teamhelena.png" class="about_img"></div>
         </div>
      </div>
   </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function() {
      var content = document.getElementById("aboutMoreContent");
      var button = document.getElementById("toggleAboutBtn");

      button.addEventListener("click", function() {
         if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
            button.textContent = "Read Less"; // Change button text
         } else {
            content.style.display = "none";
            button.textContent = "Read More";
         }
      });
   });
</script>
