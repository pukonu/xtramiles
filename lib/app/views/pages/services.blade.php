@extends("index")

@section("title")
    <title>Services | Generix Care Website</title>
@stop

@section("content")
    <div class="container">
        <div class="row">
            <!-- PageTitle Section -->
            <div id="page-title" class="page-title">
                <h2>Our Services</h2>
            </div>
            <!-- PageTitle Section /- -->

            <!-- PageBreadcrumb Section -->
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active"><a title="Home" href="{{ action('AppController@index') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Our Services</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <!-- Service List -->
                    <div class="col-md-12 service-list">
                        <div class="col-md-4 col-sm-6 service-box">
                            <img class="pull-left mb20" src="{{ asset('images/pages/services/generix-clean-services.jpg')
                                 }}" width="100%" alt="Image
                        here" />
                            <h2>GenerixClean</h2>
                            <hr>
                            <ul class="icon-list list-unstyled">
                                <li>Domestic/Residential Cleaning</li>
                                <li>Housekeeping Services</li>
                                <li>Laundry and Ironing</li>
                                <li>One-Off & Spring Cleaning</li>
                            </ul>

                        </div>
                        <div class="col-md-4 col-sm-6 padding_left service-box">
                            <h2>GenerixCare</h2>
                            <hr>
                            <ul class="icon-list list-unstyled">
                                <li>Personal Care – grooming & hygiene</li>
                                <li>Meal Preparation</li>
                                <li>Assistance with feeding and drinking</li>
                                <li>Assistance with medications</li>
                                <li>Arranging hobbies and social outings</li>
                            </ul>
                            <img class="pull-left mv20" src="{{ asset
                            ('images/pages/services/generix-care-worker-delivering-meal-to-elderly.jpg')
                                 }}" width="100%" alt="Image
                        here" />
                        </div>
                        <div class="col-md-4 col-sm-6 padding_left service-box">
                            <img class="pull-left mb20" src="{{ asset('images/pages/services/generix-care-hand-holding.jpg')
                                 }}" width="100%" alt="Image
                        here" />
                            <h2>GenerixCare Plus</h2>
                            <hr>
                            <ul class="icon-list list-unstyled">
                                <li>Respite Care</li>
                                <li>Dementia Care</li>
                                <li>Alzheimer’s Care</li>
                                <li>Post-Hospital Discharge Support</li>
                                <li>Day & Night Sitting</li>
                                <li>Companionship & Live-In Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Service List /- -->

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop