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
       
        <!-- Login section start -->
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="card-body text-white">
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">User Email</label>
                    <div class="input-group mb-2">
                        <input class="form-control" type="email" name="email" value="{{$request->email}}" required autofocus>
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group mb-2">
                        <input class="form-control" type="password" name="password" required>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="input-group mb-2">
                        <input class="form-control" type="password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="input-group">
                    <button class="form-control btn theme-btn">Reset Password</button>
                </div>
        </form>

        <!-- Login section end -->
    </div>
    <x-footer />