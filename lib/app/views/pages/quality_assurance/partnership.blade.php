@extends("index")

@section("title")
    <title>Partnership | Generix Care Website</title>
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
                    <li>Partnerships</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->
        </div>

        <div class="col-md-12">
            <h2>Partnerships and Alliances</h2>
            <h4>&nbsp;</h4>
            <div class="col-md-4">
                <blockquote class="testimonial-blockquote">
                    <div class="col-md-12 block-content">
                        <p><img src="{{ asset ('images/qa/UK-home-care-association-logo.png') }}" class="align-right"> We are registered with the United Kingdom Homecare Association (UKHCA) - the professional association of home care providers by promoting high standards of care and providing representation with national and regional policy-makers and regulators.</p>
                    </div>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial-blockquote">
                    <div class="col-md-12 block-content">
                        <p><img src="{{ asset ('images/qa/luton-demencia-action-alliance-logo.png') }}" class="align-right"> We are members of the <a href="http://www.dementiaaction.org.uk/local_alliances/4449_luton_dementia_action_alliance">Luton Dementia Action Alliance</a> to ensure best practice in dementia care for our clients. We have signed up to our local dementia action alliance and have an action plan that aims to transform the quality of life of people with dementia and their carers and continue to work towards becoming a ‘dementia friendly community’</p>
                    </div>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial-blockquote">
                    <div class="col-md-12 block-content">
                        <p><img src="{{ asset ('images/qa/keech-hospital-care-logo.png') }}" class="align-right"> The Keech Hospice provide our carers with fantastic training support including the The ABC End of Life Care Education Programme which is in line with the Gold Standard Framework. Our carers also have access to placements at the Hospice Intensive Palliative Unit.</p>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
@stop