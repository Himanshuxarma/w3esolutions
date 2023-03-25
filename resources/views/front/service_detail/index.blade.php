@extends('front.layouts.master')
@section('content')
<section id="services" class="services">
   <div class="container">
      <div class="section-title text-left mb-2">
         <div class="serve-content d-flex align-items-center">
         @php $serviceImg = '/assets/front/img/default_product.png'; @endphp
                    @if(file_exists(public_path('/uploads/services/').$services->image))
                    @php $serviceImg = asset('/uploads/services').'/'.$services->image; @endphp
                    @endif
            <img src="{{$serviceImg}}" alt="{{$services->title}}" width="40px" height="40px">
            <h3 class="ml-2 mb-2"> <span>{{$services->title}}</span></h3>
         </div>
      </div>
      <div class="row">
         
         <div class="col-12">
         <p>{{$services->description}}</p>
            
         </div>
      </div>
   </div>
</section>
<section id="testimonials" class="testimonials-group">
   <div class="container">
      <div class="section-title">
         <h2>Testimonals</h2>
         <h3>Client2 <span>Reviews</span></h3>
      </div>
      <div class="row">
         <div class="testimonials-slider owl-carousel owl-theme">
            <div class="item">
               <div class="contant-group w-100 d-flex align-items-center">
                  <div class="img-sec">
                     <img src="/assets/front/img/team/team-1.jpg" alt="sliding">
                  </div>
                  <div class="content-sec">
                     <div class="rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                     </div>
                     <div class="client-name">Ramesh Singh</div>
                     <div class="comment">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="contant-group w-100 d-flex align-items-center">
                  <div class="img-sec">
                     <img src="/assets/front/img/team/team-1.jpg" alt="sliding">
                  </div>
                  <div class="content-sec">
                     <div class="rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                     </div>
                     <div class="client-name">Suresh Kumar</div>
                     <div class="comment">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="contant-group w-100 d-flex align-items-center">
                  <div class="img-sec">
                     <img src="/assets/front/img/team/team-1.jpg" alt="sliding">
                  </div>
                  <div class="content-sec">
                     <div class="rating">
                     <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                     </div>
                     <div class="client-name">Parth singh</div>
                     <div class="comment">
                        <p>Contrary to popular belief Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </div>
   </div>
   </div>
</section>

@endsection