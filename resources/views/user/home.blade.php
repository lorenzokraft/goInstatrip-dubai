<!DOCTYPE html>
<html lang="en">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@100&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
@include('user/include.head')

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

        @include('user/include/menu')

        <!-- Banner image-->
        <section id="hero" class="background-image" data-background="url(img/banner.jpg)" style="height: 500px!important">
            <div class="opacity-mask">

                <div class="intro_title">
                    <h3 class="animated fadeInDown">Number #1 Fixed Group Tour <br>Company in Dubai</h3>
                    {{-- <p class="animated fadeInDown">
                        Explore our estinations today and be of good cheers <br>we have helped you acheive your holiday dream.
                    </p> --}}
                    <br>
                    <br>
                    <div class="res">
                        <div class="tour">
                            <span class="country">
                                <a href="{{url('/allfixedtours')}}">
                                Georgia
                            </a>
                            </span>
                            <p class="price">
                               {{\Request::session()->get('currency')}} 2,500
                            </p>
                        </div>

                        <div class="tour">
                            <span class="country">
                                <a href="{{url('/allfixedtours')}}">
                                Georgia
                            </a>
                            </span>
                            <p class="price">{{\Request::session()->get('currency')}} 2,500</p>
                        </div>
                        <div class="tour">
                            <span class="country">
                                <a href="{{url('/allfixedtours')}}">
                                Georgia
                                </a>
                            </span>
                            <p class="price">{{\Request::session()->get('currency')}} 2,500</p>
                        </div>
                    </div>



                    {{-- <a href="#" class="animated fadeInUp button_intro">View Tours
                    </a> --}}

                    {{-- <a href="#" class="animated fadeInUp button_intro">View Tickets</a> --}}



                </div>

            </div>
            <!-- End opacity-mask-->
        </section>
         <!-- End banner -->

	<main style="border-top-right-radius: 100px !important;
    border-top-left-radius: 100px !important;">


        <!-- Tours Section display  -->
        @include('user/include.tours-section')
        <!-- End Tour Section -->

        <!--start white BG 2 -->


        <div class="white_bg" style="background:#080d13!important">
            <div class="container margin_60">
                <div class="main_title">
                    <h2 style="color: white;">
                        Reviews from our Customers</h2>
                    <p style="color: white;">Over 3000 Peopel Cant be wrong :)</p>
                </div>

                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-1769297d-fab0-4abb-a608-c1e84a36cf80"></div>

                </div>


            </div>

        </div>

        <!-- Why choose us  -->
        <div class="white_bg">
            <div class="container margin_60">
            <div class="logos" style="width:40px;">


            </div>
            <img src="/img/tripadvisor.jpg" style="width: 200px;"draggable="false">

            <img src="/img/ref.png" style="width: 200px;"draggable="false">

            <img src="/img/dxb-tourism.jpg" style="width: 200px;" draggable="false">

            <img src="/img/dcb-govt.jpeg" style="width: 200px;" draggable="false">
            </div>

        </div>
        <!-- End LOGO SECTION -->

             <!-- IG WIDGET  -->
             <div style="background: #111111!important"
                loading="lazy"data-mc-src="e9817866-3f0b-4a0a-95a0-f9a17f750ad5#instagram">
            </div>

            <!-- IG FEEDS -->
            <script
            src="https://cdn2.woxo.tech/a.js#617da115cd3af80016260b21"
            async data-usrc>
            </script>
            <!-- END IG FEEDS -->


             <!-- Newsletter -->
            <style style="text/css">
            .Signup{
                margin-top: 150px;:
            }
            .Signup__text{
                text-align:center;
	            margin: 0 auto 25px;
	            font-family: 'Montserrat', sans-serif;
	            color: #6d6d6d;
	            letter-spacing: 0.5px;
	            font-size :1em;
	            line-height: 1.5em;
	            width :90%           ;
            }
            .Signup__form{
                display: flex;
                justify-content: center;

                @media (max-width 540px){
                  display block;
                }:

            }
            input{
                border: 2px solid #6d6d6d;
                border-radius: 3px;
                padding: 15px;
                font-family: 'Montserrat', sans-serif;
                letter-spacing: 0.5px;
                margin-right: 10px;
                color: #6d6d6d;
                transition: border 0.3s, box-shadow 0.3s;
                width: 90%;
                max-width: 300px;

                @media (max-width 540px){
                display: block;
                margin :0 auto 25px;
                outline: none;
                border: 2px solid #ffff;
                box-shadow :inset 1px 1px 2px 0 #c9c9c9;
            }
            }
            </style>

            <section class="Signup">
                <div class="Signup__text">
                Give us your e-mail so we can give you 25% off next time you visit us
                </div>
                <form class="Signup__form" id="newsletter">
                <input required id="email" type="email" placeholder="Your e-mail">
                <button form="newsletter" type="submit" class="Signup__button">Get offers</button>
                </form>
            </section>


     </main>



        <!--  footer Info  -->
        @include('user/include.footerinfo')
	    <!-- End footer -->

        <!--  back to top -->
	    <div id="toTop"></div>
         <!-- Back to top button -->

        <!-- footer scripts -->
        @include('user/include.footerscript')
        <!-- End footer scripts -->

        <style>

        </style>
  </body>
</html>
