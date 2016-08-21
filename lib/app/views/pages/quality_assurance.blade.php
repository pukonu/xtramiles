@extends("index")

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
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="col-md-8">
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
                
                <div class="col-md-12">

                    <div class="col-md-8">
                   	  <div class="service-inner">
                        <h3>Workforce Development</h3>
                        <p>We provide a robust induction training programme for all of our carers based on the standards jointly set by Skills for Care, Health Education England and Skills for Health in the <u>Care Certificate </u>(hyperlink to page - <a href="http://www.skillsforcare.org.uk/Standards/Care-Certificate/Care-Certificate.aspx">http://www.skillsforcare.org.uk/Standards/Care-Certificate/Care-Certificate.aspx</a><strong>)</strong></p>
                          <p>Our carers undertake hands-on training courses in moving and handling, work-based shadowing as well as specialist placements at the Keech Hospice (Palliative &amp; End of Life care). <br />
                            We are committed to having more Dementia Champions among our workforce to support our commitment to our local Dementia Action Alliance</p>
                          <p>Alongside training and workforce development programmes, we are also committed to paying our carers the National Living Wage as a minimum. </p>
                          <p>Our views on investing in our people is simply this - &ldquo;high-performing companies strive to create a great place for great people to do great work&rdquo;- <strong><em>Marilyn C. Nelson</em></strong></p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                   	  <div class="service-inner">
                        <h3>Monitoring and Feedback</h3>
                        <p>We maintain a work cycle of continuous improvement - conducting audits, staff reviews and appraisals, spot checks and unannounced visits to ensure services are delivered to the highest standards at all times.<br />
                        We welcome feedback from our clients and their relatives and will adopt these in improving the quality of our services</p></div>
                    </div>

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
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