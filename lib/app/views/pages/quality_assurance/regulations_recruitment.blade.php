@extends("index")

@section("title")
    <title>Regulations and Recruitment | Generix Care Website</title>
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
                    <li>Regulations &amp; Recruitment</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="col-md-4">
                        <div class="service-inner">
                            <h3>Regulation</h3>
                            <ul>
                                <li>GenerixCare is registered with and inspected by the Care Quality Commission <u>(CQC)</u>.<strong> (Please put in a link to our page on the CQC website </strong><a href="http://www.cqc.org.uk/location/1-2155383702/contact"><strong>http://www.cqc.org.uk/location/1-2155383702/contact</strong></a><strong> </strong></li>
                            </ul>
                            <ul>
                                <li>GenerixCare is also a member of the United Kingdom Homecare Association&nbsp;(UKHCA) - the professional association of home care providers by promoting high standards of care and providing representation with national and regional policy-makers and regulators.&nbsp;                        </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img class="pull-right ml20" src="{{ asset
                            ('images/pages/quality-assurance/generix-care-compliance.jpg')
                     }}" width="100%" alt="Generix Compliance" />
                    </div>

                    <div class="col-md-4">
                        <div class="service-inner">
                            <h3>Recruitment</h3>
                            <ul>
                                <li>
                                    We place a high premium on delivering the best quality care and support services; and this starts right from the point of recruitment. Our staff are referenced and fully vetted by the Disclosure and Barring Service (DBS)</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop