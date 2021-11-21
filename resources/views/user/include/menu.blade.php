<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li>
                        <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                        <li><a
                                href="http://themeforest.net/item/citytours-city-tours-tour-tickets-and-guides/10715647?ref=ansonika">Purchase
                                this template</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="{{ url('/') }}" title="GoInstaTrip">GOI</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                        mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_sticky.png" width="160" height="34" alt="City tours">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{ url('/') }}" class="">HOME
                        </li>

                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu">FIXED GROUP <i
                                    class="icon-down-open-mini"></i>
                            </a>

                            <ul>

                                @foreach (DB::table('toursproducts')->where('type', Request::session()->get('whoami'))->select('from_city')->distinct()->get()
    as $tours)
                                    @if (Request::session()->get('whoami') == 'indian')
                                        @php $country = 'UAE'; @endphp
                                        <li>
                                            <a href="{{ '/allfixedtours' }}?tours={{ $tours->from_city }}">{{ $tours->from_city }}
                                                to {{ $country }}</a>
                                        </li>

                                    @else
                                        @php $country = 'India'; @endphp
                                        <li>
                                            <a href="{{ '/allfixedtours' }}?tours={{ $tours->from_city }}">
                                                {{ $country }} to {{ $tours->from_city }}</a>



                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">GLOBAL VISA<i
                                    class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="row">

                                    <!--America-->
                                    <div class="col-lg-2">
                                        <h3>America</h3>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/usa') }}">USA
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/brazil') }}">Brazil
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/canada') }}">Canada
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Asia --}}
                                    <div class="col-lg-2">
                                        <h3>Asia</h3>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/china') }}">China
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/hongkong') }}">Hong Kong
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/india') }}">India
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/indonasia') }}">Indonasia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/japan') }}">Japan
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/malaysia') }}">Malaysia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/skorea') }}">South Korea
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/thailand') }}">Thailand
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/turkey') }}">Turkey
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/vietnam') }}">Vietnam
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- CIS Common Welth States --}}
                                    <div class="col-lg-2">
                                        <h3>C.I.S Visas</h3>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/russia') }}">Russia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/armenia') }}">Armenia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/ukrain') }}">Ukrain
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/azerbaijan') }}">Azerbaijan
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/belarus') }}">Belarus
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/kazakhstan') }}">Kazakhstan
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/uzbekistan') }}">Uzbekistan
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/kyrgyzstan') }}">Kyrgyzstan
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Europe --}}
                                    <div class="col-lg-2">
                                        <h3>Europe</h3>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/bulgaria') }}">Bulgaria
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/crotia') }}">Crotia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/cyprus') }}">Cyprus
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/ireland') }}">Ireland
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/moldova') }}">Moldova
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/romania') }}">Romania
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/schengen') }}">Schengen
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/uk') }}">United Kingdom
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- ME & Africa --}}
                                    <div class="col-lg-2">
                                        <h3>Middle East & Africa</h3>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/egypt') }}">Egypt
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/algeria') }}">Algeria
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/bahrain') }}">Bahrain
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/ghana') }}">Ghana
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/kenya') }}">Kenya
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/saudi') }}">Saudi Arabia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/uae') }}">UAE
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/umrah') }}">Unmar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/jordan') }}">Jordan
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/umrah') }}">South Africa
                                                </a>
                                            </li>
                                        </ul>
                                    </div>







                                </div><!-- End row -->
                            </div><!-- End menu-wrapper -->
                        </li>


                        <li class="submenu">
                            <a href="{{ url('/uaevisa') }}" class="show-submenu">UAE VISA </a>
                        </li>
                        <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li> <a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">DASHBOARD</a></li>
                        @else
                            <li><a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN </a></li>

                            @if (Route::has('register'))

                                {{-- <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a>
                        </li> --}}
                            @endif
                        @endauth
                </div>
                @endif

                </li>

                {{-- <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Restaurants <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_restaurants_list.html">All restaurants list</a></li>
                                <li><a href="all_restaurants_grid.html">All restaurants grid</a></li>
                                <li><a href="all_restaurants_grid_masonry.html">All restaurants Sort Masonry</a></li>
                                <li><a href="all_restaurants_map_listing.html">All restaurants map listing</a></li>
                                <li><a href="single_restaurant.html">Single restaurant page</a></li>
                                <li><a href="payment_restaurant.html">Booking restaurant</a></li>
                                <li><a href="confirmation_restaurant.html">Confirmation restaurant</a></li>
                            </ul>
                        </li> --}}
                {{-- GLOBAL VISA --}}
                {{-- <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Bonus<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Header styles</h3>
                                        <ul>
                                            <li><a href="index.html">Default transparent</a></li>
                                            <li><a href="header_2.html">Plain color</a></li>
                                            <li><a href="header_3.html">Plain color on scroll</a></li>
                                            <li><a href="header_4.html">With socials on top</a></li>
                                            <li><a href="header_5.html">With language selection</a></li>
                                            <li><a href="header_6.html">With lang and conversion</a></li>
                                            <li><a href="header_7.html">With full horizontal menu</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Footer styles</h3>
                                        <ul>
                                            <li><a href="index.html">Footer default</a></li>
                                            <li><a href="footer_2.html">Footer style 2</a></li>
                                            <li><a href="footer_3.html">Footer style 3</a></li>
                                            <li><a href="footer_4.html">Footer style 4</a></li>
                                            <li><a href="footer_5.html">Footer style 5</a></li>
                                            <li><a href="footer_6.html">Footer style 6</a></li>
                                            <li><a href="footer_7.html">Footer style 7</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Shop section</h3>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop single</a></li>
                                            <li><a href="shopping-cart.html">Shop cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End row -->
                            </div><!-- End menu-wrapper -->
                        </li> --}}
                {{-- <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Pages<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                           <li><a href="general_page.html">General page</a></li>
                                            <li><a href="tourist_guide.html">Tourist guide</a></li>
                                             <li><a href="wishlist.html">Wishlist page</a></li>
                                             <li><a href="faq.html">Faq</a></li>
                                             <li><a href="faq_2.html">Faq smooth scroll</a></li>
                                             <li><a href="pricing_tables.html">Pricing tables</a></li>
                                             <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                            <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                            <li><a href="grid_gallery_1.html">Grid gallery</a></li>
                                            <li><a href="grid_gallery_2.html">Grid gallery with filters</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="contact_us_1.html">Contact us 1</a></li>
                                            <li><a href="contact_us_2.html">Contact us 2</a></li>
                                             <li><a href="blog_right_sidebar.html">Blog</a></li>
                                            <li><a href="blog.html">Blog left sidebar</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                            <li><a href="404.html">404 Error page</a></li>
                                            <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                            <li><a href="timeline.html">Tour timeline</a></li>
                                            <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li><a href="footer_5.html"><i class="icon-columns"></i> Footer with Twitter feed</a></li>
                                            <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> Icon pack 3 (30)</a></li>
                                            <li><a href="icon_pack_4.html"><i class="icon-inbox-alt"></i> Icon pack 4 (200)</a></li>
                                            <li><a href="icon_pack_5.html"><i class="icon-inbox-alt"></i> Icon pack 5 (360)</a></li>
                                            <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                            <li><a href="admin.html"><i class="icon-cog-1"></i>  Admin area</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End row -->
                            </div><!-- End menu-wrapper -->
                        </li> --}}
                </ul>
        </div><!-- End main-menu -->

        {{-- cart --}}
        <ul id="top_tools">

            @php
                $price = 0;
                $numbers = 0;
            @endphp

            @foreach ((array) session('cart') as $id => $details)
                @php
                    $price += $details['price'] * 1;
                    $numbers += 1;
                @endphp
            @endforeach




            <li>
                <div class="dropdown dropdown-cart">
                    <a href="#" data-toggle="dropdown" class="cart_bt"><i
                            class="icon_bag_alt"></i><strong>{{ $numbers }} </strong></a>
                    <ul class="dropdown-menu" id="cart_items">
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <li>
                                    <div class="image"><img
                                            src="{{ url('/') }}/uaetoursimage/{{ $details['image'] }}"
                                            alt="image">
                                    </div>
                                    <strong><a href="#">{{ $details['name'] }}</a>{{ $details['price'] }}
                                    </strong>
                                    <a class="remove-from-cart action" data-id="{{ $details['tour_id'] }}"><i
                                            class="icon-trash"></i></a>
                                </li>

                            @endforeach
                        @endif
                        <li>
                            <div>Total: <span>{{ $price }}</span></div>
                            <a href="{{ route('cartView') }}" class="button_drop">Go to cart</a>
                            <a href="{{ url('chekout') }}" class="button_drop outline">Check out</a>
                        </li>
                    </ul>
                </div><!-- End dropdown-cart-->
            </li>
        </ul>
        </nav>
    </div>
    </div><!-- container -->
</header>
