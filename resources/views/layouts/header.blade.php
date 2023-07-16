<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Employee Management System')</title>

    <!-- bootstrap cdn CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- flag icon css cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
     <!-- jQuery CDN-->
     <script src="https://code.jquery.com/jquery-3.6.3.js"
                integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous">
            </script>
        <!-- Google chart CDN -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('Assets/css/c3.min.css') }}" type="text/css">
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('Assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/theme1.css') }}" type="text/css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('Assets/css/theme_style.css') }}" type="text/css">
</head>

<body class="main-body font-sans antialiased font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>
    <div id="main_content">
        <!-- App Left-side-menu start -->
        @include('includes.menu.app_menu')
        <!-- App Left-side-menu end -->

        <div class="page">
            <!-- top nav start -->
            @include('includes.nav.nav_menu')
            <!-- top nav end -->
            <div class="section-body mt-3">
                <div class="container-fluid">                   
                    @yield('content')

                    <div class="section-body">
                        <!-- body footer start -->
                        @include('templates.footer.body_footer')
                        <!-- body footer end -->
                    </div>
                </div>
            </div>
            @include('templates.modal.profilePhoto')
            <!-- bootstrap cdn JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
            <!-- FontAwsome JS CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
                integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
                crossorigin="anonymous" referrerpolicy="no-referrer">
            </script>
           


            <!-- Vendor js -->
            <script src="{{asset('Assets/js/lib.vendor.bundle.js')}}"></script>
            <!-- counterUp js -->
            <script src="{{asset('Assets/js/counterup.bundle.js')}}"></script>
            <!-- Core JS -->
            <script src="{{asset('Assets/js/core.js')}}"></script>
            <script src="{{asset('Assets/js/project-index.js')}}"></script>
            <script src="{{asset('Assets/js/donught.js')}}"></script>
            <script src="{{asset('Assets/js/ajaxQuery.js')}}"></script>

            <script>
            $(document).ready(function() {
                //success message autohide
                setTimeout(function() {
                    $(".errorMsg").fadeOut('slow')
                }, 2000);

                 // Handle country code selection
  $(".dropdown-item").click(function() {
    var countryCode = $(this).data("code");
    var countryFlag = $(this).data("flag");

    // Update phone code display
    $("#phoneCode").text(countryCode);

    // Update flag icon
    $("#countryDropdown").find("span").removeClass().addClass("flag-icon flag-icon-" + countryFlag);
  });
            });
            </script>
</body>

</html>