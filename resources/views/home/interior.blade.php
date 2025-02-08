@extends('home.default')

@section('body_class', 'interior-bg')

@section('content')
<div class="interior_section layout_padding">
   <div class="container-fluid">
      <div class="row">
         <!-- Text Section -->
         <div class="col-md-6">
            <div class="interior_taital_main">
               <h1 class="interior_taital">Interior Painting</h1>
               <p class="interior_text"> 
               At Hellena Painting, we specialize in creating vibrant, inviting, and stylish interiors. Whether you're looking for a fresh new look or want to add a splash of color to your home or office, our skilled painters can help.

We focus on precision, quality, and craftsmanship to transform your space. From walls to ceilings, we ensure every corner is painted to perfection using high-quality paints and techniques.



                  <br><br>
                  Our team brings your vision to life with a variety of finishes, ensuring that every room is not only visually stunning but also reflects your personal style. Whether you're aiming for a modern, minimalist look, or a more classic and traditional feel, our expertise allows us to cater to your exact preferences.

From the initial consultation to the final touch-up, we work closely with you to select colors, textures, and finishes that will suit the ambiance of your space. Our meticulous attention to detail ensures that even the smallest areas are painted to perfection.

Whether you need to update a single room or an entire building, we are committed to delivering exceptional results that enhance the atmosphere and aesthetic appeal of your interiors. Let us help you turn your space into a place you’ll love.

                
               </p>
            </div>
         </div>

         <!-- Image Section -->
         <div class="col-md-6">
            <div class="row">
                <!-- First Image -->
                <div class="col-12 mb-3">
                    <img src="{{ asset('images/interior3.png') }}" class="interior_img w-100" alt="Interior Painting 1">
                </div>

                <!-- Second Image -->
                <div class="col-12">
                    <img src="{{ asset('images/interior4.png') }}" class="interior_img w-100" alt="Interior Painting 2">
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
