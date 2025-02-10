<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hellena Painting</title>
   <style>
      /* Import Google Font */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

      body {
         font-family: 'Poppins', sans-serif;
         background-color: #f9f9f9;
         margin: 0;
         padding: 0;
      }

      .about_section {
         padding: 80px 0;
         text-align: center;
         background: #fff;
         overflow: hidden;
      }

      .about_taital {
         font-size: 36px;
         font-weight: 600;
         color: #333;
         margin-bottom: 20px;
      }

      .about_text {
         font-size: 18px;
         color: #555;
         max-width: 700px;
         margin: 0 auto;
         line-height: 1.6;
      }

      /* Button Styling */
      .cta_btn {
         display: inline-block;
         margin-top: 20px;
         padding: 12px 25px;
         background: #007bff;
         color: white;
         font-size: 18px;
         font-weight: 500;
         text-decoration: none;
         border-radius: 8px;
         transition: all 0.3s ease;
         box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.3);
      }

      .cta_btn:hover {
         background: #0056b3;
         transform: scale(1.05);
      }

      /* Image Styling */
      .about_img {
         width: 80%;
         max-width: 500px;
         border-radius: 10px;
         box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease-in-out;
      }

      .about_img:hover {
         transform: scale(1.05);
      }

      /* Flex Layout */
      .container {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         align-items: center;
         max-width: 1200px;
         margin: auto;
         gap: 50px;
         padding: 0 20px;
      }

      .text_container {
         max-width: 600px;
         text-align: left;
      }

      /* Fade-in Animation */
      .fade-in {
         opacity: 0;
         transform: translateY(20px);
         transition: opacity 0.8s ease-out, transform 0.8s ease-out;
      }

      .fade-in.visible {
         opacity: 1;
         transform: translateY(0);
      }

   </style>
</head>
<body>

<!-- About Us Section -->
<div id="about_section" class="about_section">
   <div class="container">
      <!-- Text Content -->
      <div class="text_container fade-in">
         <h1 class="about_taital">About Us</h1>
         <p class="about_text"> 
            At Hellena Painting, we believe every wall has a story to tell. With years of experience in professional painting, we bring creativity, precision, and quality to every project.
         </p>
         <p class="about_text">
            Whether it's interior painting, wall designs, or decorative finishes, we transform spaces with vibrant colors and flawless finishes.
         </p>
         
      </div>

      <!-- About Image -->
      <div>
         <img src="images/teamhelena.png" class="about_img ">
      </div>
   </div>
</div>

<script>
   // Fade-in effect when scrolling
   function fadeInOnScroll() {
      var elements = document.querySelectorAll(".fade-in");
      elements.forEach(function(el) {
         var position = el.getBoundingClientRect().top;
         var windowHeight = window.innerHeight;
         if (position < windowHeight - 50) {
            el.classList.add("visible");
         }
      });
   }

   window.addEventListener("scroll", fadeInOnScroll);
   fadeInOnScroll();
</script>

</body>
</html>
