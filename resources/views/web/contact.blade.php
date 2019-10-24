@extends('layouts.web')
@section('title')
Contact Us
@endsection
@section('headerimage')

{{url('web/img/blog-img/bg3.jpg')}}
@endsection
@section('content')

 <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Get in Touch</h5>
                        <!-- Contact Form -->
                        <form action="" method="post">
							{{csrf_field()}}
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
								   <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="text" name="phone" id="phone" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your Phone</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





@endsection

