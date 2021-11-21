<!DOCTYPE html>
<html lang="en">
<!--Head-->
<base href="/public">

<!-- SPECIFIC CSS -->
<link href="css/shop.css" rel="stylesheet">

<!-- CUSTOM CSS -->
@include('user/include.head')

<!--Menu-->
@include('user/include/menu')


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

    <!-- Header================================================== -->

    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Add to Cart</h1>
                <p>Add product to Cart</p>
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
        @php $total = 0 @endphp

        <div class="container margin_60">
            @if(session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div> 
            @endif
        </div>


        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8">
                    <table class="table table-striped cart-list add_bottom_30">
                        <thead>
                            <tr>
                                <th>
                                    Item
                                </th>
                              
                               
                                <th>
                                    Total
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] *1 @endphp

                            <tr>
                                <td>
                                    <div class="thumb_cart">
                                        <img src="{{ url('/') }}/uaetoursimage/{{ $details['image'] }}" alt="Image">

                                    </div>
                                  
                                </td>
                               
                                
                                <td>
                                    <strong>${{ $details['price'] * 1 }}</strong>
                                </td>
                                <td class="options">
                                    <a class="remove-from-cart" data-id="{{ $details['tour_id'] }}"><i class=" icon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                         
                        </tbody>
                    </table>
                   
                    <div class="add_bottom_15"><small>* Prices for person.</small>
                    </div>
                </div>
                <!-- End col -->

                <aside class="col-lg-4">
                    <div class="box_style_1">
                        <h3 class="inner">- Summary -</h3>
                        <table class="table table_summary">
                            <tbody>
                                
                                <tr class="total">
                                    <td>
                                        Total cost
                                    </td>
                                    <td class="text-right">
                                        Total ${{ $total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="{{url('chekout')}}">Check out</a>
                        <a class="btn_full_outline" href="{{url('/')}}"><i class="icon-right"></i> Continue shopping</a>
                    </div>
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!-- End aside -->

            </div>
            <!--End row -->
        </div>
        <!--End container -->
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

   <div id="toTop"></div><!-- Back to top button -->

   <!-- Search Menu -->
   {{-- <div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu --> --}}

   <!-- Sign In Popup -->
   {{-- <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
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
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div> --}}
   <!-- /Sign In Popup -->

   <!-- Common scripts -->


   <script>
       if ($('.prod-tabs .tab-btn').length) {
           $('.prod-tabs .tab-btn').on('click', function(e) {
               e.preventDefault();
               var target = $($(this).attr('href'));
               $('.prod-tabs .tab-btn').removeClass('active-btn');
               $(this).addClass('active-btn');
               $('.prod-tabs .tab').fadeOut(0);
               $('.prod-tabs .tab').removeClass('active-tab');
               $(target).fadeIn(500);
               $(target).addClass('active-tab');
           });

       }

   </script>


   </body>

   </html>
