@extends('layouts.blank')

@php
    $image = \App\Models\image::orderBy('created_at')->first();
    try {
        $imgSignUp = $image->sign_up;
    } catch (\Exception $e) {
        $imgSignUp = '';
    }
@endphp

@section("title", 'Reset Password -')

@section('css')
    <style>
        #row {
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{url('storage/'.$imgSignUp)}}")
        }

        #card{
            min-height: 100vh;
            border-radius: 0;
        }
    </style>
@endsection

@section('content')
@include('components.sweet-alert')
    <div class="row justify-content-start m-0 p-0" id="row">
        <div class="col-sm-12 col-md-12 col-lg-6 m-0 p-0">
            <div class="d-flex justify-content-center flex-column bg-white border border-teal shadow px-5 py-3" id="card">
                <div class="">
                    <h2 class="mb-0" style="letter-spacing: 3px">{{ __('Reset Password') }}.</h2>

                    <hr class="border border-teal my-3">

                    <form method="POST" action="{{ route('password.update') }}" id="form">
                        @csrf
                        
                        <div class="my-5">

                            <input type="hidden" name="token" value="{{ $token }}">
    
                            <div class="form-group">
                                <label for="email" class="">{{ __('E-Mail Address') }} <span class="text-danger">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="password" class="">{{ __('Password') }} <span class="text-danger">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="">
                            <button id="btn-sign-up" type="submit" class="btn bg-teal border border-white text-white shadow px-5">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(() => {
            $('#btn-sign-up').click((e) => {

                e.preventDefault();

                let password = $('#password').val();
                let passwordConfirm = $('#password-confirm').val();

                if(password != passwordConfirm) {
                    swal("Opps!!!", "Password Not Match", 'warning');
                } else {
                    if(password.length <= 8) {
                        swal("Warning", "Password to short, please make password at least 8 characters", "warning");
                    } else {
                        $('#form').submit();
                    }
                }
            });
        });
    </script>
@endsection

