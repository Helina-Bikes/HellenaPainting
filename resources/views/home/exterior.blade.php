@extends('home.default')



@section('content')
<div class="interior_section layout_padding">
   <div class="container-fluid">
      <div class="row">
         <!-- Text Section -->
         <div class="col-md-6">
            <div class="interior_taital_main">
               <h1 class="interior_taital">Exterior Painting</h1>
               <p class="interior_text"> 
               At Hellena Painting, we understand that the exterior of your property is the first thing people see. That’s why we specialize in providing durable and eye-catching exterior painting services to enhance your home or business's curb appeal. Whether you're looking to refresh your exterior or completely transform the look of your building, our team of skilled painters is here to help.

We use top-quality paints and advanced techniques to ensure your exterior is protected and looks beautiful for years to come. Our experienced painters carefully prepare surfaces and apply coatings that withstand the elements, from harsh sunlight to heavy rain, ensuring long-lasting results.

Our range of exterior painting services includes everything from painting your house's façade, trim, and shutters, to staining decks and fences. We take pride in delivering a flawless finish that enhances the architectural features of your property while adding a fresh new look.



                  <br><br>
                  We also offer color consultation to help you choose the perfect shades to complement your property’s design and surroundings. Whether you prefer bold and vibrant hues or soft and subtle tones, we’ll work with you to select the ideal color palette for your home or commercial space.

With our commitment to quality, reliability, and customer satisfaction, we guarantee your exterior painting project will exceed your expectations. Let us help you make a lasting impression with a professionally painted exterior.

                
               </p>
            </div>
         </div>

         <!-- Image Section -->
         <div class="col-md-6">
            <div class="row">
                <!-- First Image -->
                <div class="col-12 mb-3">
                    <img src="{{ asset('images/exterrior.png') }}" class="exterrior_img w-100" alt="Interior Painting 1">
                </div>

                <!-- Second Image -->
                <div class="col-12">
                    <img src="{{ asset('images/helowner.png') }}" class="exterrior_img w-100" alt="Interior Painting 2">
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
