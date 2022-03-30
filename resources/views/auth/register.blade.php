@extends('layouts.app')
@section('title')
    <title>Register</title>
@stop
@section('content')

@section('content')
<section class="main container ">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-12 col-mg-6 col-lg-5">
            <div class="my-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="{{asset(Base::$logo)}}" class="w-50" alt="">

                </div>
                <div class="border bg-white rounded-lg shadow-sm">
                    <div class="p-4">
                        <h2 class="text-center font-weight-normal">Create Account</h2>
                        <p class="text-center text-black-50 mb-4">
                            Already have an account?
                            <a href="{{route('login')}}">Sign in here</a>
                        </p>
                        <a href="#" class="btn btn-lg btn-outline-secondary btn-block">
                            <i class="feather-log-in"></i>
                            Sign in with Google
                        </a>
                        <hr>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg" placeholder="First Name">
                                    </div>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
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
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg">
                                @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required>
                                    <label class="custom-control-label text-muted" for="termsCheckbox">
                                        I accept the <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop