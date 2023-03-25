@extends('front.layouts.master')
@section('content')
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Client Review</h2>
            <h3>Review <span>Us</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atquevitae autem.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="full_name" class="form-control" id="full_name"placeholder="Your Full Name" data-rule="minlen:4"data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="phone" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Your phone" data-rule="phone" data-msg="Please enter a valid phone" />
                            <div class="validate"></div>
                        </div>
                        <div class=" col-md-6 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
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
