@extends('front.layouts.master')
@section('content')
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Client Review</h2>
            <h3>Review <span>&</span> Ratting</h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atquevitae autem.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="{{route('reviewsSave')}}" method="post" role="form" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>

                        <div class="col-md-6 form-group">
                            <input type="file" class="form-control" name="image" id="image"placeholder="Your Profile Image" data-rule="" />
                            <div class="validate"></div>
                        </div>
                    </div>




                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="5" data-rule="required" placeholder="Description"></textarea>
                        <div class="validate"></div>
                    </div>

                    <div class="rating">
                        <input type="radio" name="rating" id="star10" value="5">
                        <label for="star10" class="full"></label>

                        <input type="radio" name="rating" id="star9" value="4.5">
                        <label for="star9" class="half"></label>

                        <input type="radio" name="rating" id="star8" value="4">
                        <label for="star8" class="full"></label>

                        <input type="radio" name="rating" id="star7" value="3.5">
                        <label for="star7" class="half"></label>

                        <input type="radio" name="rating" id="star6" value="3">
                        <label for="star6" class="full"></label>

                        <input type="radio" name="rating" id="star5" value="2.5">
                        <label for="star5" class="half"></label>

                        <input type="radio" name="rating" id="star4" value="2">
                        <label for="star4" class="full"></label>

                        <input type="radio" name="rating" id="star3" value="1.5">
                        <label for="star3" class="half"></label>

                        <input type="radio" name="rating" id="star2" value="1">
                        <label for="star2" class="full"></label>

                        <input type="radio" name="rating" id="star1" value="0.5">
                        <label for="star1" class="half"></label>
                    </div>
                    <p class="rating-value">Your Feedback</p>
                    <!-- <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
@endsection
