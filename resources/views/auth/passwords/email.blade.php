@extends('layouts.blank')

@php
    $image = \App\Models\image::orderBy('created_at')->first();
    try {
        $img = $image->login;
    } catch (\Exception $e) {
        $img = '';
    }
@endphp

@section('title', 'Reset Password -')

@section('css')
    <style>
        #row {
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{url('storage/'.$img)}}")
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
                <div class="">
                    <h2 class="mb-0" style="letter-spacing: 3px">{{__('Reset Password')}}.</h2>

                    <hr class="border border-teal mt-3">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="my-5">
                            <div class="form-group">
                                <label for="email" class="">{{ __('E-Mail Address') }} <span class="text-danger">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="">
                            <button type="submit" class="btn bg-teal border border-white text-white shadow px-5">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
