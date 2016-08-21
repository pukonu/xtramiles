@extends("index")

@section("title")
    <title>Workforce Development | Generix Care Website</title>
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
                    <li>Workforce Development</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">

                <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="service-inner">
                            <div class="col-md-5">
                                <img class="pull-left mr20 mt20" src="{{ asset
                                ('images/pages/quality-assurance/generix-care-workforce-development-2.jpg')
                         }}" width="100%" alt="GenerixCare Workforce Development" />
                            </div>
                            <div class="col-md-7">
                                <h3>Workforce Development</h3>
                                <p>We provide a robust induction training programme for all of our carers based on the standards jointly set by Skills for Care, Health Education England and Skills for Health in the <u>Care Certificate </u>(hyperlink to page - <a href="http://www.skillsforcare.org.uk/Standards/Care-Certificate/Care-Certificate.aspx">http://www.skillsforcare.org.uk/Standards/Care-Certificate/Care-Certificate.aspx</a><strong>)</strong></p>
                                <p>Our carers undertake hands-on training courses in moving and handling, work-based shadowing as well as specialist placements at the Keech Hospice (Palliative &amp; End of Life care). <br />
                                    We are committed to having more Dementia Champions among our workforce to support our commitment to our local Dementia Action Alliance</p>
                                <p>Alongside training and workforce development programmes, we are also committed to paying our carers the National Living Wage as a minimum. </p>
                                <p>Our views on investing in our people is simply this - &ldquo;high-performing companies strive to create a great place for great people to do great work&rdquo;- <strong><em>Marilyn C. Nelson</em></strong></p>
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