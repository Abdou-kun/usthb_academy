@extends('layouts.layout')

@section('title', 'Login')

@section('css', asset('css/style_login.css'))

@section('content')
<div class="wrapper">
    <div class="card">
        <form action="#" class="d-flex flex-column">
            <img class='center' src="{{ asset('img/usthb_logo.png') }}" alt="logo"/>
            <div class="d-flex align-items-center input-field my-3 mb-4"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username" required class="form-control"> </div>
            <div class="d-flex align-items-center input-field mb-4"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="Password" required class="form-control" id="pwd"> <button class="btn" onclick="showPassword()"> <span class="fas fa-eye-slash"></span> </button> </div>
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between">
                <div class="d-flex align-items-center"> <label class="option"> <span class="text-light-white">Remember Me</span> <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
                <div class="mt-sm-0 mt-3"><a href="#">Forgot password?</a></div>
            </div>
            <div class="my-3"> <input type="submit" value="Login" class="btn btn-primary"> </div>
            <div class="mb-3"> <span class="text-light-white">Don't have an account?</span> <a href="#">Sign Up</a> </div>
        </form>
    </div>
</div>
@endsection
