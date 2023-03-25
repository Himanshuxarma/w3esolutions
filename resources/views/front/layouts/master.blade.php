<!DOCTYPE html>
<html lang="en">
<!-- head-->
@include('front.layouts.head')

<body>

  <!-- ======= Header ======= -->
 @include('front.layouts.header')
  <!-- End Header -->
      
  <!-- ======= Hero Section ======= -->
 @include('front.layouts.banner')
  <!-- End Hero -->

  <main id="main">
@yield('content')
    
    <!-- ======= Contact Section ======= -->
    <?php
    if(Request::is('/')) {
      
    ?>
@include('front.layouts.enquiry')
<?php
    }
    ?>
    
  
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('front.layouts.footer')

  <!-- Vendor JS Files -->
@include('front.layouts.foot')

</body>

</html>