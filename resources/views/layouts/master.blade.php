<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  @include('dashboard.dashinclude.header')
</head>

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    @include('dashboard.dashinclude.main_menu')

    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @include('dashboard.dashinclude.nav')
  <!-- Loading ends -->
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
 
    @yield('body')
    <!-- *************
				************ Main container end *************
				************* -->


  </div>
  </div>
  <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
@include('dashboard.dashinclude.js')
@yield('js')
</body>
</html>