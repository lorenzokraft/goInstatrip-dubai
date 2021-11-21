<!DOCTYPE html>
<html lang="en">

    @include('user/include.head')
<body>

    @include('user/include/menu')
	<!-- End Header -->

	<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1>All FIxed Tours</h1>
				<p>Explore our upcoming Tours </p>
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

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @yield('content')
        </div>

		<div class="container margin_60">
			<div class="main_title">
				<h2> Upcoming Tours</h2>
				<p>

				</p>
			</div>
			<hr>
			{{-- <div class="row magnific-gallery add_bottom_60 "> --}}
            <div>
            <div class="row">

                @foreach ($data as $datatour)


                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                    <div class="tour_container">
                        <div class="ribbon_3"><span>
                            {{$datatour->status}}</span>
                        </div>
                        <div class="img_container">
                            <a href="{{url('tours',$datatour->id)}}">
                            <img style="height:200px;width:400px;" src="/uaetoursimage/{{$datatour->image}}" class="img-fluid" alt="Image">
                            {{-- <div class="badge_save">Save<strong>30%</strong></div> --}}
                            <div class="short_info">
                                <i class="icon_set_1_icon-30">
                                    </i>{{$datatour->slug}}<span class="price"><sup>{{\Request::session()->get('currency')}}</sup>{{$datatour->price}}</span>
                            </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3 class="tour-description">
                            <p class="tour-description-title"><strong>{{$datatour->title}}</strong></p></h3>

                                <p class="travel-date"><strong>{{$datatour->date}}</strong></p>


                            <div class="tour-description">
                                <p style="font-size: 15px!important;
                                text-align: left;"></p>
                                <p>
                                    <i class="fas fa-calendar-day">
                                        </i>{{$datatour->days}}
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

                <!--paginator if needed -->
                {{-- <div class="d-flex justify-content-center">
                    {{!! $data->links()!!}}
                </div> --}}
			</div>
			<!-- End row -->

			<hr>

			<!-- End row -->
        </div>
		</div>
		<!-- End container -->
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
</body>
</html>
