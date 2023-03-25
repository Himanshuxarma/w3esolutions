<?php 
$settings = Helper::getSettings();?>
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <h3>Contact <span>Us</span></h3>
            <p>Ut possimus qui ut W3esolutions culpa velit eveniet modi omnis est adipisci expedita at voluptas atquevitae autem.</p>
        </div>

        <div>
        <iframe style="border:0; width: 100%; height: 400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.170611350155!2d75.66844471471805!3d26.96149596447953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4d00f4b65531%3A0xdfb30754519e72f0!2sW3esolutions%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1679569712696!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>{{$settings->address}}</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$settings->email}}</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 - {{$settings->phone1}}</p>
                        <p>+91 - {{$settings->phone2}}</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action=" {{route('contactsSave')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="full_name" class="form-control" id="full_name"placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                       
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="phone"  minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Your phone"data-rule="phone" data-msg="Please enter a valid phone" />
                            <div class="validate"></div>
                        </div>
                    <div class=" col-md-6 form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
        </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"data-msg="Please write something for us" placeholder="Message"></textarea>
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
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

</script>
