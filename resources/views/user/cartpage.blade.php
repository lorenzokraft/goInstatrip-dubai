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

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">

					<div class="product-details">

						<div class="basic-details">
							<div class="row">
								<div class="image-column col-sm-6">
									<figure class="image-box"><img src="/productimage/{{$data->image}}" alt="">
									</figure>
								</div>
								<div class="info-column col-sm-6">
									<div class="details-header">
										<h2>{{$data->vdays}}</h2>
								<div class="item-price">
									{{$data->price}}
								</div>
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i> (3 Customer Reviews)
										</div>
									</div>
									<div class="text">
										<p>
											{{$data->desc}}
										</p>
									</div>
									<div class="other-options">
										<div class="numbers-row">
											<input type="text" value="0" id="quantity_1" class="qty2 form-control" name="quantity_1">
										</div>
										<a href="{{url('visacheckout',$data->id)}}" class="btn_1">Add To Cart </a>
									</div>
									<!--Item Meta-->
									
								</div>
							</div>
						</div>
						<!--End Basic Details-->

						<div class="product-info-tabs">

							<div class="prod-tabs" id="product-tabs">
								<div class="tab-btns clearfix">
									<a href="#prod-description" class="tab-btn active-btn">Product description</a>
									<a href="#prod-reviews" class="tab-btn">Reviews (03)</a>
								</div>

								<div class="tabs-container">
									<div class="tab active-tab" id="prod-description">
										<h3>Product Description</h3>
										<div class="content">
											<p>
                                                {{$data->desc}}
											</p>
										</div>
									</div>
									<!--End Tab-->

									<div class="tab" id="prod-reviews">
										<h3>3 Reviews Found</h3>
										<div class="reviews-container">

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Admin – April 03, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Ahsan – April 01, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Sara – March 31, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

										</div>
										<!--End Review Container-->

										<hr>

										<div class="add-review">
											<h3>Add a Review</h3>
											<form method="post" action="shop-single.html">
												<div class="row">
													<div class="form-group col-md-6">
														<label>Name *</label>
														<input type="text" name="name" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Email *</label>
														<input type="email" name="email" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Website *</label>
														<input type="text" name="website" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Rating </label>
														<div class="rating">
															<a href="#" class="rate-box" title="1 Out of 5"><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="2 Out of 5"><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="3 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="4 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="5 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
														</div>
													</div>
													<div class="form-group col-md-12">
														<label>Your Review</label>
														<textarea name="review-message" class="form-control" style="height:150px;"></textarea>
													</div>
													<div class="form-group col-md-12">
														<button type="button" class="btn_1">Add Review</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--End tabs-container-->
							</div>
							<!--End prod-tabs-->
						</div>
						<!--End product-info-tabs-->

						{{-- <div class="related-products">
							<div class="normal-title">
								<h3>Related Products</h3>
							</div>
							<div class="row">
								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-1.jpg" alt=""></a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">Travel Book</a></h3>
											<div class="price">
												<span class="offer">$20.00</span> $15.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-2.jpg" alt="">
												</a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">World guide</a></h3>
											<div class="price">
												<span class="offer">$10.00</span> $5.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-3.jpg" alt="">
												</a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">Best places to visit</a></h3>
											<div class="price">
												$22.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

							</div>
						</div> --}}
						<!--End Related products-->
					</div>
					<!--End Product-details-->
				</div>
				<!--End Col-->

				<div class="col-lg-3">
					{{-- <aside class="sidebar">
						<div class="widget">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
								</span>
							</div>
						</div>
						<!-- End Search -->
						<hr>
						<div class="widget" id="cat_shop">
							<h4>Categories</h4>
							<ul>
								<li><a href="#">Places to visit</a>
								</li>
								<li><a href="#">Top tours</a>
								</li>
								<li><a href="#">Tips for travellers</a>
								</li>
								<li><a href="#">Events</a>
								</li>
							</ul>
						</div>
						<!-- End widget -->
						<hr>
						<div class="widget">
							<h4>Filter</h4>
							<input type="text" id="range" name="range" value="">
						</div>
						<!-- End widget -->
						<hr>
						<div class="widget related-products">
							<h4>Top Related </h4>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-1.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Grunge Fashion</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-2.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Office Kit</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-3.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Crime &amp; Punishment</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
						</div>
					</aside> --}}
				</div>
				<!--Sidebar-->
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
			$('.prod-tabs .tab-btn').on('click', function (e) {
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