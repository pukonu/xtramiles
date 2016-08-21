@extends("index")

@section("title")
    <title>Generix Care Plus | Generix Care Website</title>
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
                    <li>GenerixCare Plus</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="service-inner">
                            <h2>GenerixCare Plus</h2>
                            <img class="pull-left mb20" src="{{ asset
                            ('images/pages/services/generix-care-people-plus.jpg')
                     }}" width="100%" alt="Generix Clean Services" />
                            <div class="col-md-12 service-list">
                                <div class="col-md-6 service-box">
                                    <h2>Personal Care</h2>
                                    <ul>
                                        <ul>
                                            <li>Home cleaning, home care and support post-hospital discharge </li>
                                            <li>Respite care</li>
                                            <li>Specialist care - Provision of domestic assistance, personal care and companionship for clients living with dementia or Alzheimer&rsquo;s and their families</li>
                                            <li>Companionship/Live-in Support</li>
                                            <ul>
                                                <li>Companionship and conversation</li>
                                                <li>Arranging appointments and travel arrangements</li>
                                                <li>Planning visits, outings, club meetings and social events</li>
                                                <li>Assisting with clothing selection</li>
                                                <li>Participating in hobbies and crafts</li>
                                                <li>Help with reading</li>
                                                <li>Accompanying to appointments</li>
                                            </ul>
                                        </ul>
                                    </ul>
                                    <p>Our live-in service offers a practical alternative to residential care, allowing for continuous support on an ongoing basis as required.</p>
                                    <p>&nbsp;</p>
                                </div>
                                <div class="col-md-6 service-box">
                                    <h2>Funding Your Care</h2>
                                    <p>There are a variety of options available to you and your family to support funding care at home. Your first port of call should be your local authority&rsquo;s Adult Social Care Team. They should to conduct a holistic assessment of your needs at home at no cost to you and discuss care and funding options with you. Within the current social care frameworks you may be eligible to receive care via: </p>
                                    <ul>
                                        <li>State funding</li>
                                        <li>Direct payments</li>
                                        <li>Independent Living Fund (I.L.F.)</li>
                                        <li>Private funding (self-paying)</li>
                                    </ul>
                                    <p>Whether your care is funded through private or public funds, GenerixCare makes no distinction and will deliver the highest quality home care service tailored to your individual requirements.<br />
                                        If you would like to receive a quote for your care at home service based on your individual care needs, please <a href="{{ action('AppController@contact') }}">contact us</a></p>
                                </div>
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