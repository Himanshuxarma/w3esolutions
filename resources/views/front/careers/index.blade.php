@extends('front.layouts.master')
@section('content')
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Career</h2>
            <!-- <h3>Career <span>Us</span></h3> -->
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atquevitae autem.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="{{route('careersSave')}}" method="post" role="form" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"placeholder="Your Full Name" data-rule="minlen:4"data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="phone" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Your Phone" data-rule="phone" data-msg="Please enter a valid phone" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="Your Profile Image"data-rule=""  />
                            <div class="validate"></div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            
                            <select class="form-control" name="experience" id="experience" >
                                <option value="">Experience</option>
                                <option value="0-1">0-1</option>
                                <option value="1-3">1-3</option>
                                <option value="3-5">3-5</option>
                                <option value="5years">More Then 5 Years</option>
                            </select>
                            <!-- <div class="validate"></div> -->
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="file" class="form-control" name="resume" id="resume" placeholder="Your Resume" />
                            <!-- <div class="validate"></div> -->
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            
                           <select class="form-control" name="contact_form" id="contact_form">
                            <option value="">Your How You Hand About Us By</option>
                            <option value="friend">A friend</option>
                            <option value="linkedin">Linkedin</option>
                            <option value="facebook">Facebook</option>
                            <option value="contestant">Contestant</option>
                            <option value="other8">Other</option>
                           </select>
                            <!-- <div class="validate"></div> -->
                        </div>
                      
                    </div>
                  
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="5" data-rule="required"  placeholder="Description"></textarea>
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
