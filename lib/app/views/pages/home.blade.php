@extends("index")

@section("title")
    <title>xtramiles - Home Page</title>
@stop

@section("content")

<!--Featured Slider-->
<section class="row featured_events">
    <div class="item">
        <img src="{{ asset ('images/pages/home-1.png') }}" alt="">
        <div class="row caption m0">
            <div class="caption_row">
      <div class="container">
        <div class="event_box featured_event_box row m0">
          <div class="event_meta row m0">
            <div class="label label-default pull-left">featured</div>
            <div class="pull-right days_left">31 days left</div>
          </div>
          <h4 class="event_link"><a href="single-event.html">THE 26,000 MUDU PROJECT</a></h4>
          <p>A journey of a thousand miles starts with a step, this project starts with donating a mudu of grain</p>
          <div class="row fund_raises m0">
            <div class="pull-left raised amount_box">
              <h6>raised</h6>
              <h2>N3,500K</h2>
            </div>
            <div class="pull-left goal amount_box">
              <h6>goal</h6>
              <h2>N13,000K</h2>
            </div>
          </div>
          <div class="row m0 text-center">
            <a href="#donate_box" class="btn-primary">donate now</a>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>

    <div class="item">
        <img src="http://themedesigner.in.dimgx.net/demo/Helping-Hands/images/featured-slider.jpg" alt="">
        <div class="row caption m0">
            <div class="caption_row">
      <div class="container">
        <div class="event_box featured_event_box row m0">
          <div class="event_meta row m0">
            <div class="label label-default pull-left">featured</div>
            <div class="pull-right days_left">193 days left</div>
          </div>
          <h4 class="event_link"><a href="single-event.html">GIVE EDUCATION TO THE ONE’S WHO REALLY NEEDED</a></h4>
          <p>Phasellus in egestas libero, et congue lacus. Cras vel lacus nisi. Duis nulla metus, tincidunt at tortor.</p>
          <div class="row fund_raises m0">
            <div class="pull-left raised amount_box">
              <h6>raised</h6>
              <h2>$65,360</h2>
            </div>
            <div class="pull-left goal amount_box">
              <h6>goal</h6>
              <h2>$124,500</h2>
            </div>
          </div>
          <div class="row m0 text-center">
            <a href="#donate_box" class="btn-primary">donate now</a>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
</section>

<!--Our Casuses-->
<section class="row our_casuses">
    <div class="container">
        <div class="row sectionTitle text-center">
            <h6 class="label label-default">our causes</h6>
            <h3>JOIN US IN MAKING A DIFFERENCE</h3>
        </div>
        <div class="row">
            <div class="causes_carousel">
                <div class="item">
                    <div class="images_row row m0">
                        <div id="causes_carousel_inner" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active"><img src="{{ asset ('images/pages/project-26000-mudu.png') }}" alt=""></div>
                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#causes_carousel_inner" data-slide-to="0" class="active"></li>
                                <li data-target="#causes_carousel_inner" data-slide-to="1"></li>
                            </ol>
                        </div>
                        <a href="#donate_box" class="btn-primary">donate now</a>
                    </div>
                    <div class="cause_excepts row m0">
                        <h4 class="cuase_title"><a href="single-cause.html">THE 26,000 MUDU PROJECT</a></h4>
                        <p>We seek to provide the total grain need for 100 persons in an IDP camp within a year.</p>
                        <div class="row fund_progress m0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="26.9" aria-valuemin="0" aria-valuemax="100">
                                    <div class="percentage"><span class="counter">26.9</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row fund_raises m0">
                            <div class="pull-left raised amount_box">
                                <h6>raised</h6>
                                <h3>N3,500K</h3>
                            </div>
                            <div class="pull-left goal amount_box">
                                <h6>goal</h6>
                                <h3>N13,000K</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="images_row row m0">
                        <div class="item active"><img src="{{ asset ('images/pages/project-sap.png') }}" alt=""></div>
                        <a href="#donate_box" class="btn-primary">donate now</a>
                    </div>
                    <div class="cause_excepts row m0">
                        <h4 class="cuase_title"><a href="single-cause.html">SKILL ACQUISITION PROGRAM (SAP)</a></h4>
                        <p>The program is designed to empower IDP persons with skills for self sustainability and craft</p>
                        <div class="row fund_progress m0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="percentage"><span class="counter">0</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row fund_raises m0">
                            <div class="pull-left raised amount_box">
                                <h6>raised</h6>
                                <h3>N0</h3>
                            </div>
                            <div class="pull-left goal amount_box">
                                <h6>goal</h6>
                                <h3>N16,560K</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="images_row row m0">
                        <div class="item active"><img src="{{ asset ('images/pages/project-one-tshirt-per-child.png') }}" alt=""></div>
                        <a href="#donate_box" class="btn-primary">donate now</a>
                    </div>
                    <div class="cause_excepts row m0">
                        <h4 class="cuase_title"><a href="single-cause.html">ONE T-SHIRT PER CHILD</a></h4>
                        <p>One t-shirt per child program will deliver a 100,000 t-shirts to kids in the first year.</p>
                        <div class="row fund_progress m0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="percentage"><span class="counter">0</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row fund_raises m0">
                            <div class="pull-left raised amount_box">
                                <h6>raised</h6>
                                <h3>N0</h3>
                            </div>
                            <div class="pull-left goal amount_box">
                                <h6>goal</h6>
                                <h3>N2,000K</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="images_row row m0">
                        <div class="item active"><img src="{{ asset ('images/pages/project-old-people.png') }}" alt=""></div>
                        <a href="#donate_box" class="btn-primary">donate now</a>
                    </div>
                    <div class="cause_excepts row m0">
                        <h4 class="cuase_title"><a href="single-cause.html">SENIOR CITIZEN PROGRAM</a></h4>
                        <p>The senior citizen program is built to help senior persons have a comfortable live in an IDP camp.</p>
                        <div class="row fund_progress m0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                    <div class="percentage"><span class="counter">68</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row fund_raises m0">
                            <div class="pull-left raised amount_box">
                                <h6>raised</h6>
                                <h3>N0</h3>
                            </div>
                            <div class="pull-left goal amount_box">
                                <h6>goal</h6>
                                <h3>N100,000K</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
