@extends('layouts.layout')

@section('title', 'Register')

@section('css')
<link href='{{ asset('css/style_login.css') }}' rel='stylesheet'/>
@endsection

@section('content')

<div class="wrapper">
    <div class="card">

        <form action="{{ route('register') }}" class="d-flex flex-column" method="POST">
            @csrf

            <a class='center' href="{{ route('welcome') }}"><img class='center' src="{{ asset('img/usthb_logo.png') }}" alt="logo"/></a>
            <div class="d-flex align-items-center input-field my-3 mb-4">
                <span class="far fa-user p-2"></span>
                <input type="text" placeholder="Username" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <span class='invalide-feedback' role='alert'>
                    {{ $message }}
                </span>
            @enderror

            <div class="d-flex align-items-center input-field mb-4">
                <span class="fas fa-lock p-2"></span>
                <input type="email" placeholder="email" required class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            </div>

            @error('email')
                <span class='invalide-feedback' role='alert'>
                    {{ $message }}
                </span>
            @enderror

            <div class="d-flex align-items-center input-field mb-4">
                <span class="fas fa-lock p-2"></span>
                <input type="password" placeholder="Password" required class="form-control @error('password') is-invalid @enderror" id="pwd" name="password" value="{{ old('password') }}">
            </div>

            @error('password')
                <span class='invalide-feedback' role='alert'>
                    {{ $message }}
                </span>
            @enderror

            <div class="d-flex align-items-center input-field mb-4">
                <span class="fas fa-lock p-2"></span>
                <input type="password" placeholder="Confirme Password" required class="form-control @error('password') is-invalid @enderror" id="pwd" name="password_confirmation" value="{{ old('password') }}">
            </div>

            @error('password')
                <span class='invalide-feedback' role='alert'>
                    {{ $message }}
                </span>
            @enderror

            <div class="d-sm-flex align-items-sm-center justify-content-sm-between">
                {{-- <div class="d-flex align-items-center"> <label class="option"> <span class="text-light-white">Remember Me</span> <input type="checkbox" checked> <span class="checkmark"></span> </label> </div> --}}
                {{-- <div class="mt-sm-0 mt-3"><a href="#">Forgot password?</a></div> --}}
            </div>
            <div class="my-3"> <input type="submit" value="Register" class="btn btn-primary"> </div>
            <div class="mb-3"> <span class="text-light-white">You have an account?</span> <a href="{{ route('login') }}">Sign In</a> </div>
        </form>

    </div>
</div>
@endsection

