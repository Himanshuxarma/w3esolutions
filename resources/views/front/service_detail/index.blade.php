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

<section class="logo-imgs">
   <div class="container">
      <div class="row text-center">
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <div class="logoimg-sec">
               <img src="/assets/front/img/slid-1.png" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
            <img src="/assets/front/img/slid-2.png" class="img-fluid" alt="">
         </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
         <img src="/assets/front/img/slid-3.jpg" class="img-fluid" alt="">
      </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-4.jpg" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-5.jpg" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-1 col-md-1 col-sm-1"></div>
   </div>
   </div>
</section>

<section class="logo-imgs">
   <div class="container">
      <div class="row text-center">
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <div class="logoimg-sec">
               <img src="/assets/front/img/slid-6.png" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
            <img src="/assets/front/img/slid-7.png" class="img-fluid" alt="">
         </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
         <img src="/assets/front/img/slid-8.png" class="img-fluid" alt="">
      </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-9.png" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-10.jpg" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-1 col-md-1 col-sm-1"></div>
   </div>
   </div>
</section>

<section class="logo-imgs">
   <div class="container">
      <div class="row text-center">
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <div class="logoimg-sec">
               <img src="/assets/front/img/slid-11.png" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
            <img src="/assets/front/img/slid-12.png" class="img-fluid" alt="">
         </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
         <img src="/assets/front/img/slid-11.png" class="img-fluid" alt="">
      </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-11.png" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-2 col-2"">
         <div class=" logoimg-sec">
      <img src="/assets/front/img/slid-11.png" class="img-fluid" alt="">
   </div>
   </div>
   <div class="col-lg-1 col-md-1 col-sm-1"></div>
   </div>
   </div>
</section>

<section id="services-group" class="testimonials-group">
   <div class="container">
      <div class="section-title">
         <h2>Testimonals</h2>
         <h3>Client <span>Reviews</span></h3>
      </div>
      <div class="row">
         <div class="testimonials-slider review-slider owl-carousel owl-theme">
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
                     <div class="client-name">Jaswant singh</div>
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

<section class="ser-top-slider">
   <div class="container">
      <div class="section-title">
         <h2>Projects</h2>
         <h3>Similar <span>Projects</span></h3>
      </div>
      <div class="ser-carousels project-slider owl-carousel owl-theme">
         @foreach($projects as $project)
         <div class="item">
            <div class="ser-contant">
            @php $projectImg = '/assets/front/img/default_product.png'; @endphp
                    @if(file_exists(public_path('/uploads/projects/').$project->image))
                    @php $projectImg = asset('/uploads/projects').'/'.$project->image; @endphp
                    @endif
               <img src="{{$projectImg}}" class="similarprojects" alt="card-img">
               <h5>{{$project->title}}</h5>
               
               <p>{{ strlen(strip_tags($project->description) < 100 ) ? substr(strip_tags($project->description), 0, 30).' ...' : strip_tags($project->description)}}</p>
               <a href="{{route('projectDetails',$project->id)}}" title="View Detail">View Detail</a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@endsection