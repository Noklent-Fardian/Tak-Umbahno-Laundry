@extends('layouts.blank')


@section('title', 'Login -')

@section('css')
    <style>
        #row {
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("assets/img/bg.jpg");

        }

        #card{
            min-height: 100vh;
            border-radius: 0;
        }
    </style>
@endsection

@section('content')
    @include('components.sweet-alert')
    <div class="row justify-content-end m-0 p-0" id="row">
        <div class="col-sm-12 col-md-12 col-lg-6 m-0 p-0">
            <div class="d-flex justify-content-center flex-column bg-white border border-teal shadow px-5 py-3" id="card">
                <div class="mb-5">
                    <h2 class="mb-0" style="letter-spacing: 3px">Login.</h2>
        
                    <hr class="border border-teal my-3">
        
                    <p class="mb-0 text-capitalize">
                        Belum mempunyai akun?
                        <a href="https://maps.app.goo.gl/N78ynb9y42GWg84h9" class="text-info">
                            Silakan datang ke toko kami
                        </a>
                    </p>
        
                    <form method="POST" action="/login">
                        <div class="my-5">
                            @csrf
                            <div class="form-group my-3">
                                <label for="email" class="">{{ __('E-Mail') }} <span class="text-danger">*</span></label>
                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="form-group my-3">
                                <label for="password" class="">{{ __('Password') }} <span class="text-danger">*</span></label>
                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
        
                        <div class="btn-getstarted">
                            <input type="submit" value="Login" class="btn bg-teal text-white border shadow px-5" >
                        </div>
        
                    </form>
                    
                </div>
                <div class="">
                    @if (Route::has('password.request'))
                        <span>
                            {{ __('Forgot Your Password?') }}
                            <a class="text-info" href="{{ route('password.request') }}">
                                Reset here.
                            </a>
                        </span>
                    @endif 
                </div>
            </div>
        </div>
    </div>
@endsection
