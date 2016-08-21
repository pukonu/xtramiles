@extends("index")

@section("title")
    <title>Generix Care | Generix Care Website</title>
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
                    <li>GenerixCare</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="service-inner">
                        <h2>GenerixCare</h2>
                        <div class="col-md-6">
                            <img class="pull-right ml20" src="{{ asset
                            ('images/pages/services/generix-care-worker-with-elderly-lady-in-market.jpg')
                     }}" width="100%" alt="Generix Clean Services" />
                        </div>
                        <div class="col-md-6 service-list">
                            <div class="col-md-12 service-box">
                                <h2>Personal Care</h2>
                                <ul>
                                    <li>Personal Hygiene and Grooming</li>
                                    <ul>
                                        <li>Bathing, Showering and Dressing</li>
                                        <li>Oral care</li>
                                        <li>Incontinence care</li>
                                    </ul>
                                </ul>

                            </div>
                            <div class="col-md-12 padding_left service-box">
                                <h2>Meal Preparation</h2>
                                <ul>
                                    <li>Preparing healthy, nutritious meals</li>
                                    <li>Help with feeding and drinking</li>
                                    <li>Monitoring food and drink intake</li>
                                    <li>Cleaning up after meals</li>

                                </ul>
                            </div>
                            <div class="col-md-12 padding_left service-box">
                                <h2>Secure Sitting</h2>
                                <ul>
                                    <li>Companionship and help at home</li>
                                    <li>Arranging hobbies, outings and appointments</li>
                                    <li>House and Pet sitting</li>
                                    <li>Handyman and DIY support</li>

                                </ul>
                            </div>
                            <div class="col-md-12 padding_left service-box">
                                <h2>Medication Support</h2>
                                <ul>
                                    <li>Prescription collection</li>
                                    <li>Medication reminders and prompts Reminding and prompting to take
                                        medications</li>
                                    <li>Medication Administration Records (MAR) Chart Updates</li>
                                    <li>Administering eye drops, ear drops and topical creams</li>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop