@extends("index")

@section("title")
    <title>Cleaning Schedule | Generix Care Website</title>
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
                    <li class="active"><a title="Home" href="../{{ action('AppController@index') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Our Services</li>
                    <li>Cleaning Schedule</li>
                </ol>
            </div><!-- PageBreadcrumb Section /- -->

            <!-- Our-services Section -->
            <div id="our-service" class="our-service">
                <div class="col-md-12">

                    <div class="service-inner">
                        <h2>Standard Cleaning Schedule</h2>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td width="138" valign="top"><p><strong>Living Rooms</strong></p></td>
                                <td width="138" valign="top"><p><strong>Entrances/Hallways &amp; StairCases</strong></p></td>
                                <td width="138" valign="top"><p><strong>Kitchens</strong></p></td>
                                <td width="138" valign="top"><p><strong>Bathrooms &amp; Cloakrooms</strong></p></td>
                                <td width="138" valign="top"><p><strong>Bedrooms</strong></p></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="138" valign="top"><ul>
                                        <li>Sweep/vacuum and mop floors as required</li>
                                        <li>Remove any visible cobwebs </li>
                                        <li>Dust and vacuum chairs/sofas,   rearranging any cushions</li>
                                        <li>Wipe down and polish any brass or silver   ware (as requested)</li>
                                        <li>Wipe down and clean mirrors or glass   surfaces</li>
                                        <li>Clean and polish mirrors and   glassware/surfaces</li>
                                        <li>Clean and polish all wooden furniture   surfaces</li>
                                        <li>Clean fireplace surroundings</li>
                                        <li>Wipe down and clean radiators and   skirting boards</li>
                                        <li>Clean and polish picture frames, light   switches and lamp shapes</li>
                                        <li>Clean and polish any window ledges</li>
                                        <li>Empty bins and change bin liners</li>
                                    </ul></td>
                                <td width="138" valign="top"><ul type="disc">
                                        <li>Clean and polish handrails and bannisters</li>
                                        <li>Wipe down and clean radiators and skirting        boards</li>
                                        <li>Clean and polish picture frames, light        switches and lamp shapes</li>
                                        <li>Clean and polish any window ledges</li>
                                    </ul>
                                    <p>&nbsp;</p></td>
                                <td width="138" valign="top"><ul>
                                        <li>Clean gas/electric cooker surface hobs and oven   door</li>
                                        <li>Clean microwave removing stains, food debris and   fingerprint marks </li>
                                        <li>Clean refrigerator and freezer in and out</li>
                                        <li>Clean external surfaces of dishwasher, washing   machine and other appliances</li>
                                        <li>Clean and polish cupboards/drawers, removing   stains and fingerprint marks</li>
                                        <li>Clean and polish worktop surfaces</li>
                                        <li>Wipe clean cooker extractor hood</li>
                                        <li>Clean dishes and kitchen sink including taps and   splashback tiles</li>
                                        <li>Clean all door handles, removing dirt and   fingerprint marks</li>
                                        <li>Clean and dust lampshades and light switches </li>
                                        <li>Empty bins, change bin bags and wipe down bins</li>
                                        <li>Sweep and mop kitchen floor </li>
                                        <li>Load or unload dishwasher and/or washing machine   as requested</li>
                                    </ul>
                                    <p>&nbsp;</p></td>
                                <td width="138" valign="top"><ul>
                                        <li>Clean   all toilet seat and bowl surfaces using disinfectant bleach </li>
                                        <li>Wash   inner bathtub and/or shower cabin surfaces, removing stain and grime</li>
                                        <li>Clean/polish   taps and tiles removing lime scale marks</li>
                                        <li>Wash   down the sink and clean taps</li>
                                        <li>Wipe   down and clean mirrors, glass and chromes</li>
                                        <li>Clean   all tops, surfaces and cabinets</li>
                                        <li>Wipe   down towel rack, folding and rearranging any towels neatly</li>
                                        <li>Clean/vacuum/mop   floors</li>
                                        <li>Empty   bins and change bin liners</li>
                                        <li>Wipe   down any chrome fixtures and polish as necessary</li>
                                        <li>Restock   toiletries as requested (toilet rolls, soap dispensers, etc)</li>
                                    </ul>
                                    <p>&nbsp;</p></td>
                                <td width="138" valign="top"><ul>
                                        <li>Make beds, fluff and rearrange pillows, </li>
                                        <li>Change or straighten sheets and duvet   (as requested)</li>
                                        <li>Dust and polish window ledges, wardrobes   and drawers</li>
                                        <li>Remove any visible cobwebs </li>
                                        <li>Clean all mirrors and glass surfaces,   removing finger print marks</li>
                                        <li>Clean any picture frames, light switches   and lampshades</li>
                                        <li>Dust and wipe down skirting boards</li>
                                        <li>Sweep/vacuum and mop the floor as   required</li>
                                        <li>Empty bins and change bin liners</li>
                                        <li>Fold and put away laundry as required</li>
                                    </ul>
                                    <p>&nbsp;</p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- service-inner /- -->

                </div>
                <!-- col-md-12/- -->
            </div>
            <!-- Our-services Section /- -->
        </div>
    </div>
@stop