@extends("index")

@section("title")
    <title>Contact Us | Generix Care Website</title>
@stop

@section("content")
    <div class="container">
        <div class="row ">
            <!-- PageTitle Section -->
            <div id="page-title" class="page-title">
                <h2>Contact Us</h2>
            </div>
            <!-- PageTitle Section /- -->

            <!-- PageBreadcrumb Section -->
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active"><a title="Home" href="{{ action('AppController@index') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Contact Us</li>
                </ol>
            </div>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.2166554797673!2d-0
                .3896750487272841!3d51.911758179603964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                .1!3m3!1m2!1s0x487649de832a1969%3A0xff9722bc16d11d64!2sBasepoint+Business+%26+Innovation+Center!5e0
                !3m2!1sen!2s!4v1446932192451" width="100%" height="320" frameborder="0" style="border:0"
                        allowfullscreen></iframe>
            </div>

            <!-- PageBreadcrumb Section /- -->
            <!--<div class="col-md-8 contact-add-form">
                <div class="contact-form">
                    <h2>Contact Form</h2>
                    <p>Complete the enquiry form below and we will be in touch as soon as possible.</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-sm-3 control-label" data-toggle="tooltip"
                                   data-placement="top" title="Your Name">Name*</label>
                            <div class="col-md-8 col-sm-9">
                                <input type="text" class="form-control" id="name" name="contact-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 col-sm-3 control-label" data-toggle="tooltip"
                                   data-placement="top" title="Your Email">Email*</label>
                            <div class="col-md-8 col-sm-9">
                                <input type="email" class="form-control" id="email" name="contact-email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-sm-3 control-label" data-toggle="tooltip"
                                   data-placement="top" title="Contact Number">Phone*</label>
                            <div class="col-md-8 col-sm-9">
                                <input type="email" class="form-control" id="phone" name="contact-phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="col-md-4 col-sm-3 control-label" data-toggle="tooltip"
                                   data-placement="top" title="Subject">Subject*</label>
                            <div class="col-md-8 col-sm-9">
                                <input type="text" class="form-control" id="subject" name="contact-subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="col-md-4 col-sm-3 control-label" data-toggle="tooltip"
                                   data-placement="top" title="Your Message">Your Message*</label>
                            <div class="col-md-8 col-sm-9">
                                <textarea class="form-control" rows="5"  id="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 col-sm-3 control-label" data-toggle="tooltip" data-placement="top" title="Send Copy to Yourself">Send Copy to Yourself</label>
                            <div class="checkbox">
                                <input type="checkbox">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Email" id="btn_submit" class="btn-default login-btn"
                                   style="margin-left: 15px;">
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </form>
                </div>
            </div><!-- Col-md-6 /- -->
            <div class="col-md-4 col-sm-12">
                <div class="col-md-12 contact-details">
                    <div class="contact-detail-inner">
                        <h2>Office Address</h2>
                        <p>Suite C7 Basepoint Business Centre</p>
                        <p>110 Butterfields, Great Marlings</p>
                        <p>Luton</p>
                        <p>LU2 8DL</p>
                        <ul class="icon-list">
                            <li><i class="fa fa-phone"></i>Tel: 01582433754</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@generixcare.co
                            .uk">info@generixcare.co.uk</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Details /- -->
            </div><!-- Col-md-6 /- -->
        </div>
        <div class="row">
        </div>
    </div>
@stop