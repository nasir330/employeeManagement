<x-header />

<body>
   <div class="row d-flex justify-content-center">
   <div class="col-md-9 notification-board">
        <div class="card p-2">
            <div class="text-center">
                <!-- <h5>User Login</h5> -->
                <h4>Forgotten Password</h4>
            </div>
            <div class="card-body text-white text-center">
                <p class="mt-3">A new password reset-link has been sent to your email.</p>
                <p class="mb-4">
                    If you do not receive an email please
                    <a href="{{route('password.request')}}"> try again </a> or contact
                    support.
                </p>
            </div>
        </div>
    </div>
   </div>
    <x-footer />