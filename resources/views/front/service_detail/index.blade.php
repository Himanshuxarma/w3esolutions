@extends('front.layouts.master')
@section('content')

@if(!empty($services) ? $services: '')
<section id="services" class="services ">
    <div class="container">
        <div class="section-title text-left mb-2">
            <div class="serve-content d-flex align-items-center">
                @if(!empty($services->image))
                    @php $serviceImg = asset('/uploads/services').'/'.$services->image; @endphp
                @else 
                    @php $serviceImg = '/assets/front/img/team/default.jpg'; @endphp
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
@endif

@if(!empty($techstacks) && count($techstacks) > 0)
<section class="logo-imgs">
    <div class="container">
        <div class="row">
         @foreach($techstacks as $data)
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-4">
                <div class="logoimg-sec">
                    @if(!empty($data->tech_icon))
                        @php $techstackImg = asset('/uploads/techstacks').'/'.$data->tech_icon; @endphp
                    @else
                         @php $techstackImg = '/assets/front/img/team/default.jpg'; @endphp
                    @endif
                    <img src="{{$techstackImg}}" class="img-fluid" alt="{{$data->technology}}">
                </div>
            </div>
            @endforeach
        </div>
        
    </div>

</section>
@endif


@if(!empty($testimonials) && count($testimonials) > 0)
<section id="testimonials" class="testimonials-group">
    <div class="container">
        <div class="section-title">
            <h2>Testimonals</h2>
            <h3>Client <span>Reviews</span></h3>
        </div>
        <div class="row">
            <div class="testimonials-slider review-slider owl-carousel owl-theme">
               @foreach($testimonials as $review)
                <div class="item">
                    <div class="contant-group w-100 d-flex align-items-center">
                        <div class="img-sec">
                            @if(!empty($review->image))
                                @php $testimonialImg = asset('/uploads/front/testimonials').'/'.$review->image; @endphp
                            @else
                                @php $testimonialImg = '/assets/front/img/testimonials.png'; @endphp
                   
                            @endif
                            <img src="{{$testimonialImg}}" alt="{{$review->title}}">
                        </div>
                        <div class="content-sec">
                            <div class="rating">
                              @for($i=1;$i<=$review->rating; $i++)
                              <span style="color: orange;"class="fa fa-star"></span>
                                @endfor
                             
                            </div>
                            <div class="client-name">{{$review->title}}</div>
                            <div class="comment">
                                <p><i style="color:#e43c5c" class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;&nbsp; 
                                 {{ strlen(strip_tags($review->description) < 100 ) ? substr(strip_tags($review->description), 0, 200).' ...' : strip_tags($review->description)}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endif

@if(!empty($projects) && count($projects) > 0)
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
                    @if(!empty($project->image))
                        @php $projectImg = asset('/uploads/projects').'/'.$project->image; @endphp      
                    @else
                        @php $projectImg = '/assets/front/img/team/default.jpg'; @endphp
                    @endif
                    <img src="{{$projectImg}}" class="similarprojects" alt="card-img">
                    <h5>{{$project->title}}</h5>

                    <p>{{ strlen(strip_tags($project->description) < 100 ) ? substr(strip_tags($project->description), 0, 30).' ...' : strip_tags($project->description)}}
                    </p>
                    <a href="{{route('projectDetails',$project->id)}}" title="View Detail">View Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
