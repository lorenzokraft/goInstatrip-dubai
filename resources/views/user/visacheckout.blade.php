<!DOCTYPE html>
<html lang="en">

<!-- Head-->
<base href="/public">
<!-- CUSTOM CSS -->
<link href="css/shop.css" rel="stylesheet">
@include('user/include.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>

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


    <!--Menu-->
    @include('user/include/menu')
    <!-- Header================================================== -->

    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="170">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1> checkout</h1>
                <p></p>
            </div>
        </div>
    </section>
    <!-- End Section -->

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

        <div class="container margin_60">
            <div class="checkout-page">

                <ul class="default-links">
                    <li>Exisitng Customer? <a href="#">Click here to login</a>
                    </li>
                </ul>
                <form role="form" action="{{ route('stripe.postVisa') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    <input type="hidden" name="checkout_type" value="visa">

                    @csrf
                    <input type="hidden" name="checkout_type" value="visa">
                    <div class="row">
                        <div class="col-lg-7">

                            <div class="billing-details">
                                <div class="shop-form">

                                    <div class="default-title">
                                        <h2>Billing Details</h2>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>First name <sup>*</sup>
                                            </label>
                                            <input type="text" name="f-name" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Last name <sup>*</sup>
                                            </label>
                                            <input type="text" name="l-name" value="" placeholder="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Email Address <sup>*</sup>
                                            </label>
                                            <input type="email" name="email" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Phone <sup>*</sup>
                                            </label>
                                            <input type="text" name="phone_number" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Address <sup>*</sup>
                                            </label>
                                            <input type="text" name="address" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Country <sup>*</sup>
                                            </label>
                                            <select name="country" class="form-control">
                                                <option>United Kingdom (UK)</option>
                                                <option>Pakistan</option>
                                                <option>USA</option>
                                                <option>CANADA</option>
                                                <option>INDIA</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Zip / Postal Code</label>
                                            <input type="text" name="code" value="zip" placeholder="Zip / Postal Code" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>City <sup>*</sup>
                                            </label>
                                            <select name="state" class="form-control">
                                                <option>City</option>
                                                <option>Maharshtra</option>
                                                <option>NY</option>
                                                <option>ALabama</option>
                                                <option>Mexico</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="container_check">
                                                Create an account?
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Order note</label>
                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery" class="form-control"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--End Billing Details-->
                        </div>
                        <!--End Col-->

                        <div class="col-lg-5">
                            <div class="your-order">
                                <div class="default-title">
                                    <h2>Your Order</h2>
                                </div>
                                <ul class="orders-table">
                                    <li class="table-header clearfix">
                                        <div class="col">
                                            <strong>Product</strong>
                                        </div>
                                        <div class="col">
                                            <strong>Total</strong>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="col" style="text-transform:none;">

                                            <input type="hidden" name="package_id" value="{{$data->id}}">
                                            <img src="/productimage/{{$data->image}}" width="77" height="75" alt="">
                                        </div>
                                        <div class="col second">
                                            {{-- {{$data->price}} --}}
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="col" style="text-transform:none;">
                                            Total
                                        </div>
                                        <div class="col second">{{\Request::session()->get('currency')}}
                                            {{$data->price}}
                                        </div>
                                    </li>
                                    <li class="clearfix total">
                                        <div class="col">
                                            <strong>Order Total</strong>
                                        </div>
                                        <div class="col second">
                                            <strong>{{\Request::session()->get('currency')}} {{$data->price}}</strong>
                                        </div>
                                    </li>
                                </ul>
                                <div class="coupon-code">
                                    <div class="form-group">
                                        <div class="field-group">
                                            <input type="text" name="code" value="" placeholder="Coupon Code" class="form-control">
                                        </div>
                                        <div class="field-group btn-field">
                                            <button type="submit" class="btn_cart_outine">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Your Order-->

                            <div class="place-order">
                                <div class="default-title">
                                    <h2>Payment Method</h2>
                                </div>
                                <div class="payment-options">
                                    <ul>

                                        <li>
                                            <div class="radio-option">
                                                <input type="radio" name="payment-group" class="stripe_pay" value="credit" id="3" checked>
                                                <input type="radio" name="type" value="tour" checked>

                                                <label for="3">Stripe.

                                                    @csrf
                                                    <input type="hidden" name="package_id" value="{{$data->id}}">
                                                    <input type="hidden" name="checkout_type" value="package">
                                                    <div class='form-row row' style="padding-top: 10px;">
                                                        <div class='col-xs-12 form-group required'>
                                                            <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 form-group card required'>
                                                            <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                            <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row'>
                                                        <div class='col-md-12 error form-group hide'>
                                                            <div class='alert-danger alert'>Please correct the errors and try
                                                                again.</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay With Stripe (${{$data->price}})</button>
                                                        </div>
                                                    </div>



                                                </label>

                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--End Place Order-->

                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->

    <!--  footer Info  -->
    @include('user/include.footerinfo')
    <!-- End footer -->

    <!--  back to top -->
    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- footer scripts -->
    @include('user/include.footerscript')
    <!-- End footer scripts -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>



    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation")
                    , inputSelector = ['input[type=email]', 'input[type=password]'
                        , 'input[type=text]', 'input[type=file]'
                        , 'textarea'
                    ].join(', ')
                    , $inputs = $form.find('.required').find(inputSelector)
                    , $errorMessage = $form.find('div.error')
                    , valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val()
                        , cvc: $('.card-cvc').val()
                        , exp_month: $('.card-expiry-month').val()
                        , exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });

    </script>
</body>
</html>
