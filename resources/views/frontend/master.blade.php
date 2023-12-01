<!doctype html>
<html lang="en">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.style')
</head>

<body class="template-index index-demo2 modal-popup-style">
<!-- Page Loader -->
<div id="pre-loader"><img src="{{asset('/')}}frontend/assets/images/loader.gif" alt="Loading..." /></div>
<!-- End Page Loader -->

<!--Page Wrapper-->
<div class="page-wrapper">

    @include('frontend.includes.header')
    <!--Body Container-->
    <div id="page-content">
        @yield('body')
    </div>
    <!--End Body Container-->
    @include('frontend.includes.footer')
    @include('frontend.includes.settings')
    @include('frontend.includes.script')

</div>
<!--End Page Wrapper-->
</body>
</html>
