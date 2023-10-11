@extends('front.layouts.master')
@section('content')

<!-- ======= About Section ======= -->
{!! $aboutPage->description !!}
<!-- End About Section -->

<!-- ======= Services Section ======= -->
@if(!empty($services) && count($services) > 0)
<section id="services" class="services">
    <div class="container">
        <div class="section-title ">
            <h2>Services</h2>
            <h3>We do offer awesome <span>Services</span></h3>
            <p> Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
        <div class="ser-carousels service-slider owl-carousel owl-theme">
            @foreach($services as $service)
            <div class="item">
            <div class="item myclass">
            <div class="d-flex  mb-5 ">
                <div class="icon-box">
                    @if(!empty($service->image))
                        @php $serviceImg = asset('/uploads/services').'/'.$service->image; @endphp
                    @else
                        @php $serviceImg = '/assets/front/img/service.png'; @endphp
                    @endif
                    
                    <div class="icon"><img class="myimg" src="{{$serviceImg}}" alt="{{$service->title}}" width="50px"height="50px" /></div>
                    <h4 class="title"> <a href="{{route('serviceDetails',$service->id)}}">{{$service->title}}</a></h4>
                    <p class="description">{{ strlen(strip_tags($service->description) < 100 ) ? substr(strip_tags($service->description), 0, 52).' ...' : strip_tags($service->description)}} </p>
                </div>
            </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- End Services Section -->

<!-- ======= Testimonial Section ======= -->
@if(!empty($testimonials) && count($testimonials) > 0)
<section id="testimonials" class="services ">   
    <div class="container">
        <div class="section-title">
            <h2>Testimonial</h2>
            <h3>Our valuable client<span> reviews</span></h3>
            <p>Ut possimus qui ut W3esloutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
        <div class="ser-carousels project-slider owl-carousel owl-theme">
            @foreach($testimonials as $data)
            <div class=" d-flex mb-5 ">
                <div class="icon-box ">
                     @if(!empty($data->image))
                        @php $testimonialImg = asset('/uploads/front/testimonials').'/'.$data->image; @endphp
                    @else
                        @php $testimonialImg = '/assets/front/img/testimonials.png'; @endphp
                    @endif
                    <div class="icon"><img class="testiminilasimg" src="{{$testimonialImg}}" alt="{{$data->title}}"  /></div>
                    <h4 class="title"><a href="{{route('reviewsDetails')}}">{{$data->title}}</a></h4>
                    <span>
                        
                         @for($i=1; $i<=$data->rating; $i++)
                    <span style="color: orange;"class="fa fa-star"></span>
                    @endfor
                       </span>
                    <p class="description">{{ strlen(strip_tags($data->description) < 100 ) ? substr(strip_tags($data->description), 0, 55).' ...' : strip_tags($data->description)}} </p>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- End Testimonial Section -->

<!-- ======= projects Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Project</h2>
            <h3>Check our <span>Project</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas
                atque vitae autem.</p>
        </div>
        @if(!empty($category) && count($category) > 0)
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                     @foreach($category as $data)
                    <li data-filter=".{{$data->name}}">{{$data->name}}</li>
                    @endforeach

                </ul>
            </div>
        </div>
        @endif


        <div class="row portfolio-container">
            @foreach($category as $data)
            @php $projects = \Helper::getProjectsByCategory($data->id); @endphp
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item {{$data->name}}">
                @if(!empty($project->image))
                    @php $productImg = asset('/uploads/projects').'/'.$project->image; @endphp
                @else
                    @php $productImg = '/assets/front/img/team/default.jpg'; @endphp
                @endif
                <img src="{{$productImg}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{$project->title}}</h4>
                    <a href="{{route('projectDetails',$project->id)}}" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>



    </div>
</section>

<!-- End projects Section -->

<!-- ======= F.A.Q Section ======= -->
@if(!empty($faqs) && count($faqs) > 0)
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
            <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">
            @foreach($faqs as $faq)

            <li>
                <a data-toggle="collapse" class="collapsed" href="#faq{{$faq->id}}">{{$faq->question}} <i class="icofont-simple-up"></i></a>
                <div id="faq{{$faq->id}}" class="collapse" data-parent=".faq-list">
                    <p>
                       {{$faq->answer}}.
                    </p>
                </div>
            </li>
            @endforeach

      
        </ul>

    </div>
</section>
@endif
<!-- End F.A.Q Section -->

<!-- ======= Employee Section ======= -->
@if(!empty($employees) && count($employees) > 0)
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <h2>Employee</h2>
            <h3>Our Hardworking <span>Employee</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
            <div class="ser-carousels project-slider owl-carousel owl-theme">
                @foreach($employees as $data)
                    <div class="item">
                        <div class="member">
                            <div class="member-img">
                                @if(!empty($data->photo))
                                @php $employeeImg = asset('/uploads/employees').'/'.$data->photo; @endphp
                                @else
                                @php $employeeImg = '/assets/front/img/team/employee_default.jpg'; @endphp
                                @endif
                                <img src="{{$employeeImg}}" class="" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{$data->name}}</h4>
                                <span>{{$data->job_profile}}</span>
                                <span>Experience {{$data->total_exp}} Years</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endif
<!-- End Employee Section -->
@endsection
