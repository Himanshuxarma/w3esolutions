@extends('front.layouts.master')
@section('content')

<section class="project">
    <div class="container">
        <div class="project-headings">
            <h2><span>{{$projects->title}}</span></h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="img-sec float-left">
                    <img src="/assets/front/img/demo.png" class="img-fluid" alt="Responsive Web">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="row">
                    <div class="tech-details mb-2">
                        <h4>Technical Details</h4>
                    </div>
                    <div class="col-12 d-flex tech-detail-row mt-2">
                        <div class="category-sec">
                            <span class="font-weight-bold">Tech Stack</span>
                        </div>
                        <div class="text-right d-flex">
                            <img class="ml-3" src="/assets/front/img/img-icon1.png" alt="img-icons" width="30">
                            <p class="technology-name ml-1">Laravel</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex tech-detail-row mt-2">
                        <div class="category-sec">
                            <span class="font-weight-bold">Design</span>
                        </div>
                        <div class="text-right d-flex">
                            <img class="ml-3" src="/assets/front/img/img-icon1.png" alt="img-icons" width="30">
                            <p class="technology-name ml-1">HTML</p>
                            <img class="ml-3" src="/assets/front/img/img-icon1.png" alt="img-icons" width="30">
                            <p class="technology-name ml-1">CSS</p>
                            <img class="ml-3" src="/assets/front/img/img-icon1.png" alt="img-icons" width="30">
                            <p class="technology-name ml-1">Bootstrap</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex tech-detail-row mt-2">
                        <div class="category-sec">
                            <span class="font-weight-bold">category</span>
                        </div>
                        <div class="text-right d-flex">
                            <img class="ml-3" src="/assets/front/img/img-icon1.png" alt="img-icons" width="30">
                            <p class="technology-name ml-1">E-Commerce</p>
                        </div>
                        <div>
                            <div>
                            </div>
                        </div>
                    </div>
</section>
<section class="description">
    <div class="container">
        <div class="row">
            <div class="discrep-content">
                <h4> {{$projects->title}}. Now with us! Latest Today. Relevant Results</h4>
                <p>{{strip_tags($projects->description)}}</p>


            </div>
        </div>
    </div>
</section>



@endsection
