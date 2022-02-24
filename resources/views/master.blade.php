<!DOCTYPE html>
<html lang="en">

@include('include.header')


<body>


  <!-- ======= Header ======= -->
 
@include('include.topbar')

  <!-- ======= Hero Section ======= -->
    @yield('content')

  

  <!-- ======= Footer ======= -->
  @include('include.footer')


 
<!-- <div id="bottom">
    <button id="bot_open" class="btn btn-primary btn-rounded">Button</button>
  </div> -->
  <!-- Vendor JS Files -->
    @include('include.footer_script')

<!-- /GetButton.io widget -->

</body>

</html>
