<!DOCTYPE html>
<html lang="en">

@include('layouts.training.style')
<body>
    <div class="page-wrapper">
        <div class="preloader">
            <div class="preloader-inner">
                <h3>Lawyer Up Services</h3>
            </div>
        </div>
        <!-- end preloader -->
      
       @yield('head')
       @yield('banner')
        <!-- CONTENT  -->
        @yield('content')
        <!-- END CONTENT -->
    </div>
    <!-- end of page-wrapper -->
    @include('layouts.training.script')
    @include('layouts.training.footer')
</body>
</html>
