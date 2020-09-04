<!DOCTYPE html>
<html lang="en">

@include('layouts/admin/style')

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts/admin/header')

        @include('layouts/admin/sidebar')
 
        
        @yield('content')

        <footer class="footer">
            © 2018 Lexicon Support Services
        </footer>

    </div>
    @include('layouts/admin/script')
</body>

</html>