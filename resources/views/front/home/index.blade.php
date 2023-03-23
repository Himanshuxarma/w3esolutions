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
                    @php $serviceImg = '/assets/front/img/default_product.png'; @endphp
                    @if(file_exists(public_path('/uploads/services/').$service->image))
                    @php $serviceImg = asset('/uploads/services').'/'.$service->image; @endphp
                    @endif
                    <div class="icon"><img class="" src="{{$serviceImg}}" alt="{{$service->title}}" width="50px"
                            height="50px" /></div>

                    <h4 class="title"> <a href="{{route('serviceDetails',$service->id)}}">{{$service->title}}</a></h4>
                    <p class="description">{{$service->description}} </p>
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
            <h3>We do offer awesome <span>Testimonial</span></h3>
            <p>Ut possimus qui ut W3esloutions culpa velit eveniet modi omnis est adipisci expedita at voluptas
                atque vitae autem.</p>
        </div>

        <div class="row">
            @foreach($testimonials as $data)
            <div class=" col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">

                <div class="icon-box ">
                    @php $testimonialImg = '/assets/front/img/testimonials.png'; @endphp
                    @if(file_exists(public_path('/uploads/testimonials/').$data->image))
                    @php $testimonialImg = asset('/uploads/testimonials').'/'.$data->image; @endphp
                    @endif
                    <div class="icon"><img class="img" src="{{$testimonialImg}}" alt="{{$data->title}}" width="100px"
                            height="100px" /></div>

                    <h4 class="title"> <a href="{{route('serviceDetails',$service->id)}}">{{$data->title}}</a></h4>
                    <p class="description">{{$data->description}} </p>
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
                <a class="btn align-middle" href="#">Play Store</a> <a class="btn align-middle" href="#">App Store</a>
            </div>

            <div class="col-xs-5 col-md-5 col-sm-12 text-center">
                <img class="iphone-frame" src="assets/front/img/iphone-frame.png" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- End Cta Section -->
<!-- ======= Portfolio Section ======= -->
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
</section><!-- End Portfolio Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
            <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

            <li>
                <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i
                        class="icofont-simple-up"></i></a>
                <div id="faq1" class="collapse show" data-parent=".faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                        curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc
                    faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                        laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                        pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                        dui.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
                    pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
                <div id="faq3" class="collapse" data-parent=".faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                        elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                        pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                        elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio LiveMeetUpsr orci dapibus. Aliquam
                    eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
                <div id="faq4" class="collapse" data-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                        laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                        pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                        dui.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et
                    tortor consequat? <i class="icofont-simple-up"></i></a>
                <div id="faq5" class="collapse" data-parent=".faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante
                        in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum
                        est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel
                    pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
                <div id="faq6" class="collapse" data-parent=".faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer
                        malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor
                        sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo
                        sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa
                        enim nec.
                    </p>
                </div>
            </li>

        </ul>

    </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <h2>Employee</h2>
            <h3>Our Hardworking <span>Employee</span></h3>
            <p>Ut possimus qui ut LiveMeetUpsribus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                atque vitae autem.</p>
        </div>

        <div class="row">

            @foreach($employees as $data)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        @php $employeeImg = '/assets/front/img/default_product.png'; @endphp
                        @if(file_exists(public_path('/uploads/employees/').$data->photo))
                        @php $employeeImg = asset('/uploads/employees').'/'.$data->photo; @endphp
                        @endif
                        <img src="{{$employeeImg}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{$data->name}}</h4>
                        <span>{{$data->job_profile}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Team Section -->


@endsection
