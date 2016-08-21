@extends("index")

@section("title")
    <title>Generix Clean | Generix Care Website</title>
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
                    <li>Generix Clean</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="service-inner">
                        <h2>GenerixClean</h2>
                        <div class="col-md-12 col-sm-12 col-xs-12 service-content padding_left">
                            <p class="drop-cap"><img class="pull-right ml20" src="{{ asset
                            ('images/pages/services/generix-clean-services.jpg')
                     }}" width="320" alt="Generix Clean Services" />
                                Our housekeeping and cleaning services are designed to meet your needs, preferences and
                                can be tailored to meet your requirements.
                            <p>We offer fully flexible cleaning schedules on a one-off or regular basis with the
                                same cleaner.</p>
                            <p>Our domestic cleaning staff are CRB checked, fully insured and trained and certified
                                in wet/damp cleaning techniques, health and safety and infection control.</p>
                            <p>We take a lot of pride in providing a high quality service and offer fully
                                guaranteed packages.</p>
                            <p>If you’re not happy with the clean, you only need to let us know immediately and we
                                will rectify things as quickly as possible.</p>
                            Our domestic cleaning package covers all requested tasks on our <a href="{{ action('AppController@services_cleaning') }}">Standard Cleaning Schedule</a> available here (link to Standard Cleaning Schedule as PDF)
                            Our domestic cleaners can also help with any other tasks you may require such as running errands, grocery shopping, help with appointments and social outings, house and pet sitting.
                            </p>
                        </div>
                    </div><!-- service-inner /- -->

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop