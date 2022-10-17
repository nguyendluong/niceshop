@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">CONTACT</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="/">Home</a></li>
                        <li>CONTACT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box">
                    <ul>
                        <li>
                            <div class="contact-thumb">
                                <img src="/asset_client/images/location.png" alt="location">
                            </div>
                            <div class="contact-box-detail">
                                <h2 class="contact-title text-uppercase">ADDRESS</h2>
                                <p>DLG tower, Da Nang City, VietNamese.</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-thumb">
                                <img src="/asset_client/images/mail.png" alt="mail">
                            </div>
                            <div class="contact-box-detail">
                                <h2 class="contact-title text-uppercase">Email</h2>
                                <a href="mailto:expoge@exmaple.com">nice.dlg.ad@gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-thumb">
                                <img src="/asset_client/images/admin.png" alt="user">
                            </div>
                            <div class="contact-box-detail">
                                <h2 class="contact-title text-uppercase">Phone</h2>
                                <a href="tel:(+84) 845045468">(+84) 845045468</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="/contact/create" method="POST" enctype=" multipart/form-data">
                @csrf
                <div class="col-md-8">
                    <div class="contact-form-detail">
                        <h2 class="contact-head text-uppercase">LEAVE A MESSAGE</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name='mess_name'  class="form-control" placeholder="Name*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name='mess_email' class="form-control" placeholder="Your Email*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name='mess_phone' class="form-control" placeholder="Phone*" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name='mess' placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-color">submit form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
