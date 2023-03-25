<?php 
$settings = Helper::getSettings();?>
<footer id="footer">
    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>W3esolutions</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="javascript:void(0);">Ramesh Singh Shekhawat</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            @php
              $TwitterLink = isset($settings) && !empty($settings->twitter_link) ? $settings->twitter_link:'javascript:void(0);';
              $FBLink = isset($settings) && !empty($settings->facebook_link) ? $settings->facebook_link :'javascript:void(0);';
              $LinkedinLink = isset($settings) && !empty($settings->likedin_link) ? $settings->likedin_link:'javascript:void(0);';
            @endphp
            <a href="{{$TwitterLink}}" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{$FBLink}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{$settings->instagram_link}}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <!-- <a href="{{$settings->Snapchat_link}}" class="snapchat "><i class="bx bxl-snapchat"></i></a> -->
            <a href="{{$LinkedinLink}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="javascript:void(0);" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
