<x-header />

<body>
    <div class="col-md-5 card login-form">
        @if(session()->has('success'))
        <div id="successMessage" class="text-center text-success p-1">
            {{session('success')}}
        </div>
        @endif
        @if(session()->has('error'))
        <div style="color:red;" id="errorMsg" class="text-center p-1">
            {{session('error')}}
            <script>
            setTimeout(function() {
                window.location.href = '{{ route('
                login ') }}'; // redirect to the login page after 2 seconds
            }, 1000);
            </script>
        </div>
        @endif
        <x-input-error :messages="$errors->get('email')" style="list-style:none;" class="text-danger mt-2" />
        <x-input-error :messages="$errors->get('username')" style="list-style:none;" class="text-danger mt-2" />
        <div class="text-center mt-2">
            <!-- <h5>User Login</h5> -->
            <h4>Password Reset Request</h4>
        </div>
        <!-- Login section start -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body text-white">
                <div class="form-group">
                    <label for="email">User Email</label>
                    <div class="input-group mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Enter email address">
                    </div>
                </div>

                <div class="input-group">
                    <button class="form-control btn theme-btn">Send Request</button>
                </div>
        </form>

        <!-- Login section end -->
    </div>
    <x-footer />