<!DOCTYPE html>
<html lang="en">

@include('user/include.head')
<body>

    @include('user/include/menu')
    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>UAE VISAS</h1>
                <p>Includes Govt. Mandatory Covid Medical Insurance</p>
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
            <div class="main_title">
                <h2> VISA FOR ALL NATIONALS</h2>
                <p>
                    Inside Country and Outside country Visas
                </p>
            </div>
            <hr>
            {{-- <div class="row magnific-gallery add_bottom_60 "> --}}
            <div>


                @foreach ($data as $product)
                <div class="col-sm-4">
                    <div class="img_wrapper_gallery">
                        <div class="img_container_gallery">
                            <img src="/productimage/{{$product->image}}" alt="GoInstatrip" class="img-fluid">
                            <i class="icon-resize-full-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="uae-tours">

                        <h3>{{\Request::session()->get('currency')}} {{$product->price}}</h3>
                        <p class="desc">
                            {{-- {{$product->desc}} --}}
                        </p>

                        {{-- <div class="d-grid gap-2" style="width:100%">
                        <a href="{{url('cartpage', $product->id)}}" class="btn_1 outline">Buy Now </a>
                    </div> --}}

                    <a href="{{url('cartpage', $product->id)}}" class="btn_1 outline">Buy Now </a>

                </div>
            </div>
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
