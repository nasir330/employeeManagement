<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Aero Admin Template')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Favicon-->
    <link rel="icon" href="{{url('Assets/img/favicon.ico')}}" type="image/x-icon">
    <!-- bootstrap cdn CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="{{asset('Assets/css/bootstrap.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> -->
    <!-- FontAwsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme CSS -->
    <!-- <link rel="stylesheet" href="{{asset('Assets/css/footable.bootstrap.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('Assets/css/style.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('Assets/css/custom.css')}}">

</head>

<body class="theme-blush">
    <!-- Right Icon menu Sidebar -->
    <div class="navbar-right">
        <ul class="navbar-nav">           
            <li>
                <a href="javascript:void(0);" class="js-right-sidebar" title="Setting">
                    <i class="smartIcon fa-solid fa-gear zmdi-hc-spin"></i>
                </a>
            </li>         
        </ul>
    </div>
    <!-- left sidebar -->
  
    <!-- right sidebar -->
   @include('testSidebar');
    <!-- main content start -->
    @yield('content')


    <!-- bootstrap cdn JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="{{asset('Assets/js/bootstrap.bundle.js')}}"></script> -->
    <!-- FontAwsome JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="{{asset('Assets/js/jquery.min.js')}}"></script>

    <!-- Bundle JS -->
    <!-- <script src="{{asset('Assets/js/libscripts.bundle.js')}}"></script> -->
    <script src="{{asset('Assets/js/custom.js')}}"></script>
    <!-- <script src="{{asset('Assets/js/mainscripts.bundle.js')}}"></script> -->
    <script src="{{asset('Assets/js/vendorscripts.bundle.js')}}"></script>
    <!-- <script src="{{asset('Assets/js/footable.bundle.js')}}"></script> -->
    <!-- <script src="{{asset('Assets/js/footable.js')}}"></script> -->
    <script src="{{asset('Assets/js/searchContacts.js')}}"></script>
    <script src="{{asset('Assets/js/ajaxFormSubmit.js')}}"></script>
</body>

</html>