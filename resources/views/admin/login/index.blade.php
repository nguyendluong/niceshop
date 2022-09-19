@extends('admin.layouts.master')
@section('content')
<form class="form-horizontal form-simple" action="{{ route('admin.login') }}" method="post">
    @csrf
    <section class="login pt-100">
        <div class="container">
            <div class="billing-details">
                <h2 class="checkout-title text-uppercase text-center mb-30">LOGIN</h2>
                <form class="checkout-form">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your Password"
                            required>
                    </div>
                    <div class="login-btn-g">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-color right-side">Log In</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a title="Forgot Password" class="link forgot-password mtb-20" href="#">Forgot your
                            password?</a>
                    </div>
                    <div class="new-account text-center mt-20">
                        <span>Don't have an account?</span>
                        <a class="link" title="Create New Account" href="register.html">Create New Account</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</form>
@endsection