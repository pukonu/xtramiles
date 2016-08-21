@extends("index")

@section("title")
    <title>Monitoring and Feedback | Generix Care Website</title>
@stop

@section("content")
    <div class="container">
        <div class="row">
            <!-- PageTitle Section -->
            <div id="page-title" class="page-title">
                <h3>Our Services</h3>
            </div>
            <!-- PageTitle Section /- -->

            <!-- PageBreadcrumb Section -->
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active"><a title="Home" href="{{ action('AppController@index') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Quality Assurance</li>
                    <li>Monitoring and Feedback</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">

                <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="service-inner">
                            <!--<div class="col-md-5">
                                <img class="pull-left mr20 mt20" src="{{ asset
                                ('images/pages/quality-assurance/generix-care-feedback.jpg')
                         }}" width="100%" alt="GenerixCare Workforce Development" />
                            </div>-->
                            <div class="col-md-7">
                            <h3>Monitoring and Feedback</h3>
                            <p>We maintain a work cycle of continuous improvement - conducting audits, staff reviews and appraisals, spot checks and unannounced visits to ensure services are delivered to the highest standards at all times.<br />
                                We welcome feedback from our clients and their relatives and will adopt these in improving the quality of our services</p></div>
                            </div>
                    </div>

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop