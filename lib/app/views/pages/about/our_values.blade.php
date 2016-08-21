@extends("index")

@section("title")
    <title>Our Values | Generix Care Website</title>
@stop

@section("content")
    <!-- PageTitle Section -->
    <div class="container">
        <div class="row">
            <div id="page-title" class="page-title">
                <h2>About Us</h2>
            </div><!-- PageTitle Section /- -->

            <!-- PageBreadcrumb Section -->
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active"><a title="Home" href="./">Home</a></li>
                    <li>Pages</li>
                    <li>About Us</li>
                    <li>Our Values</li>
                </ol>
            </div>
        </div>
    </div><!-- PageBreadcrumb Section /- -->


    <div class="container">
        <div class="col-md-12">
            <h3>Our Values</h3>
            <div class="service-list">
                <div class="col-md-4 col-sm-6 col-xs-12 service-box">
                    <img class="pull-left mb20" src="{{ asset('images/pages/about/generix-care-worker-helps-man-on-walking-platform.jpg')
                     }}" width="100%" alt="Image
            here" />
                    <h2>A genuine interest in delivering high quality care:</h2>
                    <ul class="icon-list">
                        <li>We are passionate about delivering holistic, person-centred care.</li>
                        <li>Our commitment to our clients is to put them first and deliver the services to the highest quality that meets their needs.</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-box">
                    <img class="pull-left mb20" src="{{ asset('images/pages/about/generix-care-worker-holds-elderly-woman-closely.jpg')
                     }}" width="100%" alt="Image
            here" />
                    <h2>Developing our staff to achieve their full potential</h2>
                    <ul class="icon-list">

                        <li>We go to great lengths to find the right people, people dedicated to providing great care with full vetting by the Disclosure and Barring Service (DBS) </li>
                        <li>We take great pride in sourcing best-in-class training for our people and helping them fulfill their career ambitions while they work with us </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-box">
                    <img class="pull-left mb20" src="{{ asset('images/pages/about/generix-care-worker-with-two-elderly-couple.jpg')
                     }}" width="100%" alt="Image
            here" />
                    <h2>Making a difference in the communities we serve</h2>
                    <hr>
                    <ul class="icon-list">
                        <li>We believe in assisting our clients engage with the community, maintaining active, healthy
                            and independent lifestyles as much as possible</li>
                        <li>We work in partnership with voluntary organisations as well as private and statutory providers
                            of care to ensure seamless care provision our clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop