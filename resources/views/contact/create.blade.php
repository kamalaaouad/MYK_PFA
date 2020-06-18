@extends('layouts.layout')

@section('title')
    Contact-nous
    @endsection

    @section('content')
        <!-- Start All Title Box -->
        <div class="all-title-box" style="background-image: url('image/banner-01.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Title Box -->

        <!-- Start Contact Us  -->
        <div class="contact-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="contact-form-right">
                            <h2>GET IN TOUCH</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                            <form action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" placeholder="Your Name" >
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$errors->first('message')}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email"  class="form-control @error('email') is-invalid @enderror" name="email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$errors->first('message')}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control @error('message') is-invalid @enderror"  placeholder="Your Message" rows="6" cols="30" name="message">{{old('message')}}</textarea>
                                            @error('message')
                                            <div class="invalid-feedback">
                                                {{$errors->first('message')}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="submit-button text-center">
                                            <button class="btn hvr-hover"  type="submit">Send Message</button>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="contact-info-left" style="background-image:url('image/instagram/4.jpg')">
                            <h2>CONTACT INFO</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart -->


@endsection
