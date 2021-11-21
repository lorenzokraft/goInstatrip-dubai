<div class="container margin_60">

    <div class="main_title">
        <h2>Upcoming Tours</h2>
        <p>Explore the World with us</p>
    </div>

    <div class="row">


        <!--DEAL HAS POPULAR  TAG -->
        {{-- <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="tour_container">
                <div class="ribbon_3 popular"><span>Popular</span></div>
                <div class="img_container">
                    <a href="single_tour.html">
                    <img src="img/tour_box_1.jpg" width="800" height="533" class="img-fluid" alt="Image">
                    <div class="short_info">
                        <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>39</span>
                    </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>Arc Triomphe</strong> tour</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div> --}}
        <!-- End col -->


        @foreach ($uaetourdata as $datatour)
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="tour_container">
                <div class="ribbon_3"><span>
                        {{ $datatour->status }}

                    </span>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="img_container">
                    <a href="{{ url('allfixedtours') }}">
                        <img style="height:200px;width:400px;" src="/uaetoursimage/{{ $datatour->image }}" class="img-fluid" alt="Image">
                        {{-- <div class="badge_save">Save<strong>30%</strong></div> --}}


                        <div class="short_info">
                            <i class="icon_set_1_icon-30">
                            </i>{{ $datatour->slug }}<span class="price"><sup>{{\Request::session()->get('currency')}}</sup>{{ $datatour->price }}</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3 class="tour-description">
                        <p class="tour-description-title"><strong>{{ $datatour->title }}</strong></p>
                    </h3>

                    <p class="travel-date"><strong>{{ $datatour->date }}</strong></p>


                    <div class="tour-description">
                        <p style="font-size: 15px!important;
                        text-align: left;"></p>
                        <p>
                            <i class="fas fa-calendar-day">
                            </i>{{ $datatour->days }}
                            <i style="float:right;" class="fas fa-check-circle"></i>
                        </p>
                        <p>
                            <i class="fas fa-plane-departure"></i>FLIGHT INCLUDED
                            <i style="float:right;" class="fas fa-check-circle"></i>
                        </p>
                        <p>
                            <i class="fas fa-hotel"></i>5 STAR HOTEL
                            <i style="float:right;" class="fas fa-check-circle"></i>
                        </p>

                        <p>
                            <i class="fas fa-hamburger"></i>BREAKFAST / TRANSFER(S)
                            <i style="float:right;" class="fas fa-check-circle"></i>
                        </p>
                    </div>

                </div>

            </div><!-- End box tour -->
            <div style="margin-bottom:2%;margin-top:2%"></div>
            {{-- <div style="margin-top:2%;" class="d-grid gap-2" style="width:100%">
                <a href="#" class="btn_1 outline">View Tour</a>
            </div> --}}
        </div><!-- End col -->
        @endforeach


    </div><!-- End row -->

    <p class="text-center nopadding">
        <a href="{{ url('allfixedtours') }}" class="btn_1">View all tours</a>
    </p>
</div>
