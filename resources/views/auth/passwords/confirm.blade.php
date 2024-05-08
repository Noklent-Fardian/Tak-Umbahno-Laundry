@extends('layouts.blank')

@php
    $image = \App\Models\image::orderBy('created_at')->first();
    try {
        $imgSignUp = $image->sign_up;
    } catch (\Exception $e) {
        $imgSignUp = '';
    }
@endphp

@section('title', "Confirm Password -")

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
                <div class="mb-5">
                    <h2 class="mb-0" style="letter-spacing: 3px">{{ __('Please confirm your password before continuing.') }}.</h2>

                    <hr class="border border-teal my-3">

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="my-5">
                            <div class="form-group">
                                <label for="password" class="">{{ __('Password') }} <span class="text-danger">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn bg-teal border border-white text-white shadow px-5">
                                {{ __('Confirm Password') }}
                            </button>
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
</div>
@endsection
