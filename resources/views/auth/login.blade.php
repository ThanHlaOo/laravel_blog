@extends('layouts.app')
@section('title')
    <title>Login</title>
@stop
@section('content')

<section class="main container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-12 col-md-12 col-lg-5">
            <div class="my-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="{{asset(Base::$logo)}}" class="w-50" alt="">

                </div>
                <div class="border bg-white rounded-lg shadow-sm">
                    <div class="p-4">
                        <h2 class="text-center font-weight-normal">Sign In</h2>
                        <p class="text-center text-black-50 mb-4">
                            Don't have an account yet?
                            <a href="{{route('register')}}">Sign up here</a>
                        </p>
                        <a href="#" class="btn  btn-outline-secondary text-center ">
                            <i class="feather-log-in"></i>
                            Sign in with Google
                        </a>
                        <hr>
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>User Name</label>
                                <input type="text" name="email" class="form-control form-control-lg">
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control form-control-lg">
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                    <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button> -->
                            <div class="mb-3">
                                <div class="">
                                    <button type="submit" class="btn btn-primary me-3">
                                        {{ __('Login') }}
                                    </button>

                                    <a href="{{route('facebookRedirect')}}" class="btn btn-outline-primary">Login With Facebook</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection