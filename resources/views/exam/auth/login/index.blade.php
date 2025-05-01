<x-exam title="Login">
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">

        <img class="shape-1" src="{{asset('exam')}}/assets/images/shape/shape-5.png" alt="shape">
        <img class="shape-2" src="{{asset('exam')}}/assets/images/shape/shape-6.png" alt="shape">
        <img class="shape-3" src="{{asset('exam')}}/assets/images/shape/shape-7.png" alt="shape">

        <img class="shape-4" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">
        <img class="shape-5" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">

        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Login Form</h2>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Login & Register Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrapper">
                <div class="row gx-5 justify-content-center">
                    <!-- Login & Register Box Start -->
                    <div class="login-register-box col-5">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title">Login</h2>
                        </div>
                        @error('credentials')
                        <p class="text-danger lead">{{$message}}</p>
                    @enderror
                    <!-- Section Title End -->
                        <div class="login-register-form">
                            <form action="{{route('post.login')}}" method="POST">
                                @csrf
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                    @error('username')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="single-form form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-heading-color w-100">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-exam>