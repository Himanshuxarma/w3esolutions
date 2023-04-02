@extends('front.layouts.master')
@section('content')
<style>
    .img {
        border-radius: 50%;
    }

</style>
<!-- ======= About Section ======= -->
{{!! $aboutPage->description !!}}
<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title ">
            <h2>Services</h2>
            <h3>We do offer awesome <span>Services</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas
                atque vitae autem.</p>
        </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

                <div class="icon-box">
                    @php $serviceImg = '/assets/front/img/service.png'; @endphp
                    @if(file_exists(public_path('/uploads/services/').$service->image))
                    @php $serviceImg = '/uploads/services/'.$service->image; @endphp
                    
                    @endif
                    <div class="icon"><img class="" src="{{$serviceImg}}" alt="{{$service->title}}" width="50px"height="50px" /></div>

                    <h4 class="title"> <a href="{{route('serviceDetails',$service->id)}}">{{$service->title}}</a></h4>
                    <p class="description">{{ strlen(strip_tags($service->description) < 100 ) ? substr(strip_tags($service->description), 0, 50).' ...' : strip_tags($service->description)}} </p>
                </div>


            </div>
            @endforeach

        </div>
    </div>


</section>
<!-- End Services Section -->

<!-- ======= Testimonial Section ======= -->
<section id="testimonials" class="services ">
    <div class="container">

        <div class="section-title">
            <h2>Testimonial</h2>
            <h3>Our valuable client<span> reviews</span></h3>
            <p>Ut possimus qui ut W3esloutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
            @foreach($testimonials as $data)
            <div class=" col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">

                <div class="icon-box ">
                    @php $testimonialImg = '/assets/front/img/testimonials.png'; @endphp
                    @if(file_exists(public_path('/uploads/testimonials/').$data->image))
                    @php $testimonialImg = asset('/uploads/testimonials').'/'.$data->image; @endphp
                    @endif
                    <div class="icon"><img class="img" src="{{$testimonialImg}}" alt="{{$data->title}}" width="100px" height="100px" /></div>

                    <h4 class="title"><a href="{{route('reviewsDetails')}}">{{$data->title}}</a></h4>
                    <p class="description">{{ strlen(strip_tags($data->description) < 100 ) ? substr(strip_tags($data->description), 0, 50).' ...' : strip_tags($data->description)}} </p>
                    <a href="javascript:void(0);" class="btn-get-started scrollto">Read More</a>
                </div>


            </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Testimonial Section -->

<!-- ======= Cta Section ======= -->
<section class="download-app">
    <div class="container">
        <div class="row align-items-center row-reverse">
            <div class="col-xs-7 col-md-7 col-sm-12">
                <h2>Download our App</h2>
                <h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.</p>
                <a class="btn align-middle" href="javascript:void(0);">Play Store</a> <a class="btn align-middle" href="javascript:void(0);">App Store</a>
            </div>

            <div class="col-xs-5 col-md-5 col-sm-12 text-center">
                <img class="iphone-frame" src="assets/front/img/iphone14-frame.png" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- End Cta Section -->
<!-- ======= projects Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Project</h2>
            <h3>Check our <span>Project</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas
                atque vitae autem.</p>
        </div>

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


        <div class="row portfolio-container">
            @foreach($category as $data)
            @php $projects = \Helper::getProjectsByCategory($data->id); @endphp
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item {{$data->name}}">
                @php $productImg = '/assets/front/img/default_product.png'; @endphp
                @if(file_exists(public_path('/uploads/projects/').$project->image))
                @php $productImg = asset('/uploads/projects').'/'.$project->image; @endphp
                @endif
                <img src="{{$productImg}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{$project->title}}</h4>
                    <!-- <p>App</p> -->
                    <!-- <a href="assets/front/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a> -->
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
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
            <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">
            @foreach($faqs as $faq)

            <li>
                <a data-toggle="collapse" class="" href="#faq{{$faq->id}}">{{$faq->question}}? <i
                        class="icofont-simple-up"></i></a>
                <div id="faq{{$faq->id}}" class="collapse show" data-parent=".faq-list">
                    <p>
                       {{$faq->answer}}.
                    </p>
                </div>
            </li>
            @endforeach

      
        </ul>

    </div>
</section>
<!-- End F.A.Q Section -->

<!-- ======= Employee Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <h2>Employee</h2>
            <h3>Our Hardworking <span>Employee</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

            @foreach($employees as $data)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        @php $employeeImg = '/assets/front/img/Singh-Shaab.jpg'; @endphp
                        @if(file_exists(public_path('/uploads/employees/').$data->photo))
                        @php $employeeImg = asset('/uploads/employees').'/'.$data->photo; @endphp
                        @endif
                        <img src="{{$employeeImg}}" class="myimg" alt="">
                        <div class="social">
                            <a href="javascript:void(0);"><i class="icofont-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="icofont-facebook"></i></a>
                            <a href="javascript:void(0);"><i class="icofont-instagram"></i></a>
                            <a href="javascript:void(0);"><i class="icofont-linkedin"></i></a>
                        </div>
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
</section>
<!-- End Employee Section -->
@endsection
