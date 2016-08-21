@extends("index")

@section("title")
    <title>About Us | Generix Care Website</title>
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
            </ol>
        </div>
    </div>
</div><!-- PageBreadcrumb Section /- -->

<!-- About Section -->
<div class="container">
    <div id="about-section" class="about-section">
        <h2>About Us</h2>
        <div class="col-md-12 col-sm-12 about-block padding_left">
            <img class="pull-left mr25" src="{{ asset('images/pages/about/generix-care-worker-helping-woman.jpg') }}" width="320" height="360" alt="Image
            here" />
            <blockquote>
                <p>GenerixCare Luton is an independent home care provider with a simple mission: we want to help
                    people do more, feel better and enjoy life!</p>
                    <p>As more and more people live longer, with increasingly complex health and social care needs,
                    GenerixCare aims to provide that extra pair of hands you and/or your loved ones need at home…
                    to help you do more, feel better and enjoy life!</p>
                    <p>We offer a range of home care and support packages which vary according to client needs –
                    from domestic cleaning packages; personal care and social support; to intensive home care and
                    social support for clients with long term conditions such as dementia or as required, clients at
                    the end of their life’s journey.
                </p>
            </blockquote>
        </div>
    </div>
</div>
<!-- About Section /- -->
@stop