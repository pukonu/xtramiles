@extends("index")

@section("title")
    <title>Areas We Cover | Generix Care Website</title>
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
                    <li>Area We Cover</li>
                </ol>
            </div>
        </div>
    </div><!-- PageBreadcrumb Section /- -->

    <!-- Why Choose us Section -->
    <div class="container">
        <div id="why-choose-us" class="why-choose-us">
            <div class="col-md-12 why-choose-us-inner">
                <h2>Areas We Cover</h2>
                <img class="pull-left mb20" src="{{ asset('images/pages/about/generix-map-graphic.jpg')
                     }}" width="100%" alt="Image
            here" />
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Luton</td>
                        <td>Dunstable</td>
                        <td>Ampthill</td>
                        <td>Apsley End</td>
                    </tr>
                    <tr>
                        <td>Breachwood Green</td>
                        <td>Barton</td>
                        <td>Biggleswade</td>
                        <td>Billington</td>
                    </tr>
                    <tr>
                        <td>Caddington</td>
                        <td>Charlton</td>
                        <td>Cockernhoe</td>
                        <td>Codicote</td>
                    </tr>
                    <tr>
                        <td>Clophill</td>
                        <td>Cheddington</td>
                        <td>Eaton Bray</td>
                        <td>Eddlesborough</td>
                    </tr>
                    <tr>
                        <td>Flitwick</td>
                        <td>Graveley</td>
                        <td>Great Wymondley</td>
                        <td>Harlington</td>
                    </tr>
                    <tr>
                        <td>Harpenden</td>
                        <td>Hitchin</td>
                        <td>Houghton Regis</td>
                        <td>Hockliffe</td>
                    </tr>
                    <tr>
                        <td>Hexton</td>
                        <td>Kimpton</td>
                        <td>Higham Gobion</td>
                        <td>Ickleford</td>
                    </tr>
                    <tr>
                        <td>Kings Walden</td>
                        <td>Leighton Buzzard</td>
                        <td>Lilley</td>
                        <td>Offley</td>
                    </tr>
                    <tr>
                        <td>Pepperstock</td>
                        <td>Pulloxhill</td>
                        <td>Pirton</td>
                        <td>Pitstone</td>
                    </tr>
                    <tr>
                        <td>Peter's Green</td>
                        <td>Shillington</td>
                        <td>Sharpenhoe</td>
                        <td>St. Ippolitts</td>
                    </tr>
                    <tr>
                        <td>Streatley</td>
                        <td>Silsoe</td>
                        <td>Steppingley</td>
                        <td>Slip End</td>
                    </tr>
                    <tr>
                        <td>Studham</td>
                        <td>Stanbridge</td>
                        <td>Totternhoe</td>
                        <td>Toddington</td>
                    </tr>
                    <tr>
                        <td>Tebworth</td>
                        <td>Upper Sundon</td>
                        <td>Westoning</td>
                        <td>Whitwell</td>
                    </tr>
                    <tr>
                        <td>Whipsnade</td>
                        <td>Wootten</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Why Choose us Section /- -->

@stop