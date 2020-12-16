<!DOCTYPE html>
<html lang="en">

<!-- index 19:57:41 GMT -->
@include('layouts.lawyer.style')

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <h3>Lexicon Support Services</h3>
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
    @include('layouts.lawyer.script')
    @include('layouts.lawyer.footer')
</body>

<!-- index 19:57:41 GMT -->
</html>
