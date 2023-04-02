<?php $settings = Helper::getSettings();?>
<header id="header" class="fixed-top inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{url('/')}}"> <span style="color:#e43c5c;">W3e</span>solutions</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{url('/')}}" class="logo mr-auto">
                        @php
                        $logo = !empty($settings) && !empty($settings->front_logo) ? $settings->front_logo : '';
                        @endphp
        <img src="/uploads/settings/{{$logo}}" alt="{{$logo}}" class="img-fluid"></a> -->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <?php
    if(Request::is('/')) {
      ?>
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#portfolio">Project</a></li>
                <li><a href="#team">Employee</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{route('careersDetails')}}">Career</a></li>
                <?php
    } else {
      ?>
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <?php
    }
    ?>
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
