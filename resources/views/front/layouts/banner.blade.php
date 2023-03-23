<section id="hero">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php 
            $i = 1; 
            $banner = \Helper::getBanners();
            ?>
            @foreach($banner as $slider)
                <div class="carousel-item @if($i==1) active @endif">
                    @php $sliderImg = '/assets/front/img/default_product.png'; @endphp
                    @if(file_exists(public_path('/uploads/banners/').$slider->banner_image))
                    @php $sliderImg = asset('/uploads/banners').'/'.$slider->banner_image; @endphp
                    @endif
                    <img class="slide-img" src="{{$sliderImg}}" class="d-block w-100" alt="Slide">
                    <div class="carousel-caption">
                        <h3>Welcome to <strong>W3esolutions</strong></h3>
                        <h1>We're Creative Agency</h1>
                        <h2>{{$slider->banner_title}}</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <?php $i++;?>
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
