<!DOCTYPE html>
<html lang="en">

<!-- index 19:57:41 GMT -->
@include('layouts.web.style')

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <h3>Lawyer Up</h3>
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
    @include('layouts.web.script')
    @include('layouts.footer')
</body>
</html>
