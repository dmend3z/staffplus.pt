@extends("site.app")
@section("title")
    STAFF PLUS
@endsection

@section("css")
    <style type="text/css">
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
@section("content")

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ asset('assets/site/images/slider/banner.jpg') }});">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="color: #000;text-shadow: 0 3px 6px rgba(0,0,0,0.2)">Exceed all expectations</h1>
                                    <h2 class="animation animated-item-2" style="color: #000; text-shadow: 0 3px 6px rgba(0,0,0,0.2); margin: 18px 0; font-weight: 400;">People Operations simplified. Everything modern HR teams need to onboard, manage and grow their people.</h2>
                                    <form id="sign-up-form-1" method="post" class="form-inline animation animated-item-3" action="{{ route("signup") }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control input-lg" required="required" placeholder="Your Email"/>
                                        </div>
                                        <input type="submit" name="submit" class="input-lg btn btn-primary" value="TRY NOW!"/>
                                    </form>
                                    <h2 class="animation animated-item-2"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->


    <section id="feature" >
        <!-- START THE FEATURETTES -->

     <!-- Icon Blocks -->
     <section class="g-py-100">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
              <!-- Icon Blocks -->
              <div class="text-center">
                <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                    <img src="{{ asset('assets/site/images/people.svg') }}" style="width: 200px">
                  </span>
                <h3 class="h5 g-color-gray-dark-v2 g-font-weight-1000 text-uppercase mb-3" style="font-size: 25px;"><strong>Human resource management   </strong>          </h3>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
              <!-- Icon Blocks -->
              <div class="text-center">
                <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                    <img src="{{ asset('assets/site/images/finance.svg') }}" style="width: 200px">
                  </span>
                <h3 class="h5 g-color-gray-dark-v2 g-font-weight-1000 text-uppercase mb-3" style="font-size: 25px;"><strong>Finance</strong></h3>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
              <!-- Icon Blocks -->
              <div class="text-center">
                <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                    <img src="{{ asset('assets/site/images/it.svg') }}" style="width: 200px">
                  </span>
                <h3 class="h5 g-color-gray-dark-v2 g-font-weight-1000 text-uppercase mb-3" style="font-size: 25px;"><strong>Attendance management  </strong>         </h3>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Icon Blocks -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    </section><!--/#feature-->



    <section id="partner">
        <div class="container">
            <div class="center">
                <h2 style="color: #000">Clients</h2>
                <p class="lead" style="color: #000">Power up Humaans by connecting it to the tools you love                </p>
            </div>

            <div class="partners">
                <div class="row">
                    <div class="col-md-offset-1 col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partner.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partner.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partner.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partner.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partner.png') }}"></div>
                </div>
            </div>--}}
        </div><!--/.container-->
    </section><!--/#partner-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Try STAFF+ today                        </h2>
                        <p class="lead"> <b>No setup fees.
                        </b> No long-term commitments.<br> <em>Free for 30 days | No credit card needed | Cancel any time </em></p>
                        <form id="sign-up-form-1" method="post" class="form-inline" action="{{ route("signup") }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control input-lg" required="required" placeholder="Insert your email"/>
                            </div>
                            <input type="submit" name="submit" class="input-lg btn btn-primary" value="TRY NOW"/>
                        </form></div>
                </div>
            </div>
        </div>
    </section>
@endsection
