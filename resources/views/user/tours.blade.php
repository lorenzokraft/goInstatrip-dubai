<!DOCTYPE html>
<html lang="en">
<base href="/public">
@include('user/include.head')

<body class="datepicker_mobile_full">
    <!-- Remove this class to disable datepicker fudyll on mobile -->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    @include('user/include/menu')
    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('uaetoursimage/' . $data->image) }}"
        data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{ $data->title }}</h1>
                        <span>{{ $data->date }}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                class="icon-smile"></i><small>(75)</small></span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">

                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_1_icon-4"></i>5 Star Hotel</li>
                            <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                            <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                            <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                            <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                        </ul>
                    </div>


                    <!-- Map button for tablets/mobiles -->
                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                    data-src="{{ asset('uaetoursimage/' . $data->image) }}"
                                    data-small="{{ asset('uaetoursimage/' . $data->image) }}"
                                    data-medium="{{ asset('uaetoursimage/' . $data->image) }}"
                                    data-large="{{ asset('uaetoursimage/' . $data->image) }}"
                                    data-retina="{{ asset('uaetoursimage/' . $data->image) }}">
                            </div>


                        </div>
                        <div class="sp-thumbnails">
                            <img alt="Image" class="sp-thumbnail" src="{{ asset('uaetoursimage/' . $data->image) }}">


                        </div>
                    </div>


                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>About the Tour</h4>
                            <p>
                                {{ $data->ldesc }}
                            </p>
                            <h4>What's included</h4>


                            <div class="row">
                                <div class="col-md-6">

                                    @php
                                        $data1 = DB::table('inclusions')
                                            ->where('uaeproduct_id', $data->id)
                                            ->get();
                                    @endphp


                                    <ul class="list_ok">
                                        @foreach ($data1 as $incl)
                                            <li>{{ $incl->inclusion }}</li>
                                        @endforeach
                                    </ul>

                                </div>


                            </div>

                            <!-- End row  -->
                        </div>
                    </div>

                    <hr>
                    @php
                        $data1 = DB::table('itineries')
                            ->where('uaeproduct_id', $data->id)
                            ->get();
                    @endphp

                    <ul class="cbp_tmtimeline">
                        @foreach ($data1 as $incl)
                            <li>
                                <time class="" datetime="09:30"><span
                                        style="font-size: 1.2rem;">{{ $incl->meetupday }} </span> <span></span>
                                </time>
                                <div class="cbp_tmicon timeline_icon_point"></div>
                                <div class="cbp_tmlabel">

                                    <h2><span></span>{{ $incl->tourday }}</h2>
                                    <p>{{ $incl->itinerydesc }}. </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>



                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Reviews </h3>
                            <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                                review</a>
                        </div>
                        <div class="col-lg-9">
                            <div id="general_rating">11 Reviews
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End general_rating -->
                            <div class="row" id="rating_summary">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Position
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Tourist guide
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Price
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Quality
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row -->
                            <hr>
                            <div class="review_strip_single">
                                <img src="img/avatar1.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single">
                                <img src="img/avatar3.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single last">
                                <img src="img/avatar2.jpg" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                    interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                    ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->
                        </div>
                    </div>
                </div>
                <!--End  single_tour_desc-->

                <aside class="col-lg-4">
                    <form action="{{ url('cart') }}" method="post" id="tocheckout">
                        @csrf
                        <div class="box_style_1 expose">
                            <h3 class="inner">- Booking -</h3>
                            <div class="">
                                <div id="price_single_main">
                                    per person
                                    <span id="book-total"><sup>{{ \Request::session()->get('currency') }}</sup>
                                        {{ $data->price }}</span>
                                </div>
                            </div>
                            @csrf
                            <!--Travellers Adon-->
                            <input name="tour_id" hidden value="{{ $data->id }}">
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">SELECT NUMBERS OF TRAVELLERS</label>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                    </div>
                                    <select id="persons-select" name="persons_select" class="form-select"
                                        aria-label="Default select example" style="width: 225px;
                                        height: 35px;
                                        padding: 5px;">
                                        @foreach (DB::table('addoninclusions')->where('product_id', $data->id)->get()
    as $addon)
                                            @php
                                                $addondetails = DB::table('addons')
                                                    ->where('id', $addon->addon_id)
                                                    ->first();
                                            @endphp

                                            @if ($addondetails->type == 'persons-select')
                                                <option value="{{ $addondetails->value }}">{{ $addondetails->title }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <br>
                            </div>
                            <br>


                            <!--Insurance Adon -->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">ADD-ON {{ \Request::session()->get('currency') }} 100 PER TRAVELLER FOR TRAVEL
                                    INSURANCE</label>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                    </div>
                                    <select name="insurance_select" id="insurance-select" style="width: 225px;
                                height: 35px;
                                padding: 5px;">
                                        <option value="">-- Please Select--</option>

                                        @foreach (DB::table('addoninclusions')->where('product_id', $data->id)->get()
    as $addon)
                                            @php
                                                $addondetails = DB::table('addons')
                                                    ->where('id', $addon->addon_id)
                                                    ->first();
                                            @endphp

                                            @if ($addondetails->type == 'insurance-select')
                                                <option value="{{ $addondetails->value }}">{{ $addondetails->title }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                            </div>
                            <br>
                            <!-- INFANTS-->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">INFANT(LESS THAN 2 YEARS OLD){{ \Request::session()->get('currency') }} 400 FOR WHOLE
                                    TRIP</label>
                                <div class="col-6">
                                    <div class="form-group">

                                        <select id="seat-select" name="seat_select" style="width: 225px;
                                    height: 35px;
                                    padding: 5px;">
                                            <option value="">-- Please Select--
                                            </option>

                                            @foreach (DB::table('addoninclusions')->where('product_id', $data->id)->get()
    as $addon)
                                                @php
                                                    $addondetails = DB::table('addons')
                                                        ->where('id', $addon->addon_id)
                                                        ->first();
                                                @endphp

                                                @if ($addondetails->type == 'seat-select')
                                                    <option value="{{ $addondetails->value }}">
                                                        {{ $addondetails->title }} </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <!-- Extral Activities -->
                            <div class="row">
                                <label style="text-align:;margin-left:15px;margin-right:12px;
                            ">Extral Avtivities[Optional]</label>
                                <br>
                                <br>
                                @foreach (DB::table('addoninclusions')->where('product_id', $data->id)->get()
    as $addon)
                                    @php
                                        $addondetails = DB::table('addons')
                                            ->where('id', $addon->addon_id)
                                            ->first();
                                    @endphp

                                    @if ($addondetails->type == 'addon-select1')
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label style="text-align:;margin-left:15px;margin-right:12px;font-size:14px;
                                        margin-top:7px;">Body
                                                        Massage </label>

                                                    <div class="numbers-row addon1">
                                                        <input type="text" value="0" id="addon-select1"
                                                            class="qty2 form-control" name="addon_select1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endif
                                @endforeach


                                @if ($addondetails->type == 'addon-select2')
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label style="text-align:;margin-left:15px;margin-right:12px;font-size:14px;
                                        margin-top:7px;">SPA treatment
                                                </label>

                                                <div class="numbers-row addon2 ">
                                                    <input type="text" value="0" id="addon-select2"
                                                        class="qty2 form-control" name="addon_select2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @foreach (DB::table('addoninclusions')->where('product_id', $data->id)->get()
    as $addon)
                                    @php
                                        $addon = DB::table('addons')
                                            ->where('id', $addon->addon_id)
                                            ->first();
                                    @endphp

                                    @if ($addon->state == 'extra')

                                        <div class="col-12">
                                            <label>{{ $addondetails->title }}</label>
                                            <div class="form-group">
                                                <select id="extraAddons" name="seat_select" style="width: 225px;
                                            height: 35px;
                                            padding: 5px;">
                                                    <option value="">-- Please Select--
                                                    </option>

                                                    <option value="{{ $addondetails->value }}">
                                                        {{ $addondetails->title }} </option>

                                                </select>



                                            </div>

                                        </div>
                                    @endif
                                @endforeach



                            </div>



                            <button class="btn_full" type="submit">Add to Cart</button>

                            <button type="button" class="btn_full book" type="button">Book & Proceed to
                                checkout</button>

                        </div>
                    </form>
                    <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->
    <!--  footer Info  -->
    @include('user/include.footerinfo')
    <!-- End footer -->
    <!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_set_1_icon-78"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
                <div class="text-center">
                    Don’t have an account? <a href="javascript:void(0);">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new
                        preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1">
                    </div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                        <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name_review" id="name_review" type="text" placeholder="Your name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="lastname_review" id="lastname_review" type="text"
                                        placeholder="Your last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email_review" id="email_review" type="email" placeholder="Your email"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <select class="form-control" name="position_review" id="position_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tourist guide</label>
                                    <select class="form-control" name="guide_review" id="guide_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <select class="form-control" name="price_review" id="price_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select class="form-control" name="quality_review" id="quality_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                            <textarea name="review_text" id="review_text" class="form-control" style="height:100px"
                                placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control"
                                placeholder="Are you human? 3 + 1 =">
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal review -->

    <!--  footer Info  -->
    @include('user/include.footerinfo')
    <!-- End footer -->


    @include('user/include.footerscript')
    <script src="js/jquery.sliderPro.min.js"></script>

    <!-- Date and time pickers -->
    <script>
        $('input.date-pick').daterangepicker({
            autoUpdateInput: true,
            singleDatePicker: true,
            autoApply: true,
            minDate: new Date(),
            showCustomRangeLabel: false,
            locale: {
                format: 'MM-DD-YYYY'
            }
        }, function(start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                'DD-MM-YYYY') + ' (predefined range: ' + label + ')');
        });
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>

    <script>
        const seat_price = 400;
        const insurance_price = 100; // make
        const addon1_price = 100;
        const addon2_price = 100;
        const person_price = {{ $data->price }};



        let book_data = {
            persons: person_price,
            seat: 0,
            addon1: 0,
            addon2: 0,
            extraaddon: 0,
            insurance: 0
        };


        function calculateTotal() {
            let total = book_data.persons + book_data.seat + book_data.insurance + book_data.addon1 + book_data.addon2 +
                book_data.extraaddon;
            $("#book-total").html(numberWithCommas(total));
        }

        $("#persons-select").change(function() {

            let value = Number($(this).val());
            if (isNaN(value) || value <= 0) {
                book_data = {
                    ...book_data,
                    persons: person_price
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                persons: value
            };
            calculateTotal();

        });





        $("#insurance-select").change(function() {

            let value = Number($(this).val());




            book_data = {
                ...book_data,
                insurance: value
            };
            calculateTotal();

        });

        $("#seat-select").change(function() {

            let value = Number($(this).val());
            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    seat: 0
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                seat: value
            };
            calculateTotal();

        });



        $('body').on('click', '.addon1 .inc', function() {
            let value = $('#addon-select1').val();

            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    addon1: 0
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                addon1: addon1_price * value
            };
            calculateTotal();
        });



        $('body').on('click', '.addon1 .dec', function() {
            let value = $('#addon-select1').val();

            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    addon1: 0
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                addon1: addon1_price * value
            };
            calculateTotal();
        });

        $('body').on('click', '.addon2 .inc', function() {
            let value = $('#addon-select2').val();
            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    addon2: 0
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                addon2: value
            };
            calculateTotal();
        });

        $('body').on('click', '.addon2 .dec', function() {
            let value = $('#addon-select2').val();
            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    addon2: 0
                };
                calculateTotal();
                return;
            }

            book_data = {
                ...book_data,
                addon2: value
            };
            calculateTotal();
        });

        const buttons = document.querySelectorAll('#extraAddons');
        buttons.forEach(button => button.addEventListener('change', checkVal, false));

        function checkVal() {
            var value = Number(this.value);
            if (isNaN(value)) {
                book_data = {
                    ...book_data,
                    extraaddon: 0
                };
                calculateTotal();
                return;
            }
            console.log(value)
            book_data = {
                ...book_data,
                extraaddon: value
            };
            calculateTotal();



        }

        //done
        function numberWithCommas(x) {
            x = x.toString();
            var pattern = /(-?\d+)(\d{3})/;
            while (pattern.test(x))
                x = x.replace(pattern, "$1,$2");
            return x;
        }
    </script>

    <script>
        $('.book').on('click', function(e) {
            e.preventDefault();
            var formAction = "{{ url('/') }}/submitBook";
            $('#tocheckout').attr('action', formAction);
            $("#tocheckout").submit();
        });
    </script>
</body>


</html>
