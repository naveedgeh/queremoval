@extends('frontend.layout.masterlayout')
@section('Title')
Contact Us
@endsection
@section('mainbody')
<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1>Contact Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>

</section><!-- #page-title end -->





<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
                ============================================= -->
                <div class="col-lg-6">

                    <div class="fancy-title title-border">
                        <h3>Send us an Email</h3>
                    </div>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="{{url('/sendmail')}}" method="post">
                                    @csrf
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                                    @error('name')
                                        <span style="color:red;">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                                @error('email')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
                                 @error('phone')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                                   </div>

                                <div class="w-100"></div>

                               
                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                                @error('message')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div><!-- Contact Form End -->

                <!-- Google Map
                ============================================= -->
                <div class="col-lg-6 min-vh-50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.54103885942!2d-0.09369858435932413!3d51.5583144148004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c7fca310527%3A0x6960d93c9955b87f!2sCatherall%20Rd%2C%20Highbury%20East%2C%20London%20N5%202LD%2C%20UK!5e0!3m2!1sen!2s!4v1612870164901!5m2!1sen!2s" width="100%" height="80%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
                    
                    
                    </div><!-- Google Map End -->
            </div>

            <!-- Contact Info
            ============================================= -->
            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Our Address<span class="subtitle">Catherall road
London
N5 2LD
United Kingdom</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Speak to Us<span class="subtitle">020 8123 7369</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-mail"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Email Us<span class="subtitle">info@queremoval.com</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-twitter2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info End -->

        </div>
    </div>
</section><!-- #content end -->

@endsection