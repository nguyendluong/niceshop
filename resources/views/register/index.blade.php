@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">REGISTER</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<form class="form-horizontal form-simple" action="/register" method="post">
        @csrf
<section class="login pt-100">
    <div class="container">
        <div class="billing-details">
            <h2 class="checkout-title text-uppercase text-center mb-30">CREATE ACCOUNT</h2>
            <form class="checkout-form">
            <div class="form-group">
                    <label class="form-label">Email</label>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Enter your Password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input id="" type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>


                <div class="login-btn-g">
                    <div class="row">

                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-color right-side">Sign up</button>
                        </div>
                    </div>
                </div>
                <div class="new-account text-center mt-20">
                    <span>Already have an account with us</span>
                    <a class="link" title="Create New Account" href="/login">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</form>
</section>
@endsection

@section('js')

@endsection

