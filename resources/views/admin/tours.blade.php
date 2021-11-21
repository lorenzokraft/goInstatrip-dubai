{{-- <x-app-layout>

</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@include('admin/include.navbar')

<body class="layout-default">


    <div class="preloader"></div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                @include('admin/include.header-content')

                <!-- // END Header -->
                {{-- BODY --}}
                <div
                    class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
                    <div class="container" align="center">
                        <h3 style="color:black; padding-top:25px; font-size:25px; margin-bottom:50px;">Create Upcoming
                            Tours</h3>
                    </div>

                    <div class="form">
                        <script src="https://use.fontawesome.com/a6f0361695.js">
                        </script>


                        <div>

                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('message') }}

                            </div>

                        @endif

                        <form method="post" action="{{ url('uploaduaetours') }}" enctype="multipart/form-data"
                            id="feedback">
                            @csrf
                            <div class="was-validated">
                                <div class="pinfo">Enter Tour Name</div>
                                <input type="text" class="form-control" name="title" id="validationSample02"
                                    placeholder="Example: Dubai to Georgia" value="" required="">
                                <!-- Form Fake Validation-->
                                <div class="invalid-feedback">Please provide a Tour name.
                                </div>
                                <div class="valid-feedback">Looks good!
                                </div>
                                <!--enf form validation -->
                            </div>

                            <div>
                                <div class="pinfo">City</div>
                                <select name="from_city" id="from_city" class="form-control">
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Chenai">Chenai</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="UAE">UAE</option>
                                    <option value="UAE">ARMENIA</option>


                                </select>
                            </div>

                            <div>
                                <div class="pinfo">Type</div>
                                <select name="type_tour" id="type_tour" class="form-control">
                                    <option value="uae">UAE</option>
                                    <option value="indian">INDIAN</option>
                                </select>
                            </div>
                            <div class="was-validated">
                                <div class="pinfo">Enter Tour Slug</div>
                                <input type="text" class="form-control" name="slug" placeholder="Example: Summer Tour"
                                    value="" required="">

                                <!-- Form Fake Validation-->
                                <div class="invalid-feedback">Please provide a Tour slug.
                                </div>
                                <div class="valid-feedback">Looks good!
                                </div>
                                <!--enf form validation -->
                            </div>

                            <div class="was-validated">
                                <div class="pinfo">Enter Tour Days</div>
                                <input type="text" class="form-control" name="days"
                                    placeholder="Example: 4 days 3 Night" value="" required="">

                                <!-- Form Fake Validation-->
                                <div class="invalid-feedback">Please enter tour days.
                                </div>
                                <div class="valid-feedback">Looks good!
                                </div>
                                <!--enf form validation -->
                            </div>

                            <div class="was-validated">
                                <div class="pinfo">Enter Tour Date</div>
                                <input type="text" class="form-control" name="date" placeholder="June 25 To June 30"
                                    value="" required="">

                                <!-- Form Fake Validation-->
                                <div class="invalid-feedback">Please provide a Tour date.
                                </div>
                                <div class="valid-feedback">Looks good!
                                </div>
                                <!--enf form validation -->
                            </div>

                            <div class="was-validated">
                                <div class="pinfo">Enter Tour Price</div>
                                <input type="number" class="form-control" name="price"
                                    placeholder="Example 2,400 [DONT ADD AED]" value="" required="">

                                <!-- Form Fake Validation-->
                                <div class="invalid-feedback">Please provide a Tour price.
                                </div>
                                <div class="valid-feedback">Looks good!
                                </div>
                                <!--enf form validation -->
                            </div>



                            <div class="pinfo">Tour Short Discription</div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="" name="desc"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">This is a short text description that will appear on the
                                    tour listing</label>
                            </div>


                            <!--VIsa Status -->
                            <div class="mb-3">
                                <div class="pinfo">Visa Status</div>
                                <select name="status" data-toggle="select" class="form-control">
                                    <option selected="">Select Status</option>
                                    <option value="Acive">Active</option>
                                    <option value="Sold Out">Sold Out</option>
                                </select>

                            </div>
                            <!--End VIsa Status -->

                            <!--Tour Image -->
                            <div>
                                <div class="pinfo">Select a Tour Image </div>
                                <input class="form-control form-control-lg" name="file" type="file">
                            </div>
                            <!--End Tour Image -->

                            <div style="padding: 5%">

                            </div>

                            <div>
                                <hr>
                                <div class="pinfo">
                                    Inside page content
                                </div>
                                <hr>
                                <br>
                                <div class="pinfo">Tour Long Discription</div>

                                <!--Tour Long Desc -->
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="" name="ldesc"
                                        style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Detail description of the tour </label>
                                </div>
                                <!--End LTour Long Desc -->
                                <br>
                                <hr>

                                <div class="pinfo">
                                    Tour Addons


                                </div>
                                <hr>
                                <br>

                                <div class="">
                                    @foreach (DB::table('addons')->get() as $addon)
                                        <div class="col-6 col-md-6 mb-3">
                                            <input type="checkbox" id="{{ $addon->title }}"
                                                name="{{ $addon->type }}[]" value="{{ $addon->id }}">
                                            <label for="{{ $addon->title }}">{{ $addon->title }}
                                                ({{ $addon->type }})</label>
                                        </div>
                                    @endforeach
                                </div>



                                <hr>
                                <br>

                                <div class="">
                                    <div class="form-row">

                                        <!--Tour incl 1-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="inclusions">
                                        </div>
                                        <!--End Tour incl 1-->

                                        <!--Tour incl 2-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 2-->

                                    </div>
                                    <!--Tour incl 3-->
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="inclusions">
                                        </div>
                                        <!--End Tour incl 3-->

                                        <!--Tour incl 4-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 4-->

                                        <!--Tour incl 5-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 5-->

                                        <!--Tour incl 6-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 6-->

                                        <!--Tour incl 7-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 7-->

                                        <!--Tour incl 8-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 8-->

                                        <!--Tour incl 9-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>
                                        <!--End Tour incl 9-->

                                        <!--Tour incl 10-->
                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control" name="inclusion[]"
                                                placeholder="Inclusions">
                                        </div>

                                        <!--End Tour inclusion 10-->
                                    </div>

                                    <hr>
                                    <div class="pinfo">
                                        <h5>Enter Tour Itinery</h5>
                                        <br>

                                    </div>

                                </div>

                                <!--Day 1 Itinery-->
                                <div class="">

                                    <div class="accordion" id="accordionExample">

                                        <!--Tour Itinery 1 -->
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Day #1 Itinery
                                                </button>
                                            </h6>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetuptime[]"
                                                                placeholder="Enter Meetup Time [e.g 9:30AM]" value="">
                                                        </div>

                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control" name="meetupday[]"
                                                                placeholder="Enter Meetup Day [e.g MONDAY]" value="">
                                                        </div>

                                                    </div>
                                                    <div class="">

                                                        <div class="form-row">

                                                            <div class="col-12 col-md-12 mb-6">
                                                                <input type="text" class="form-control"
                                                                    name="tourday[]"
                                                                    placeholder="Enter Tour Day [e.g Day #1]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content-->
                                                    <br>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder=""
                                                            name="itinerydesc[]" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2">Enter Itinery Information</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tour Itinery 2 -->
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Day #2 Itinery
                                                </button>
                                            </h6>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetuptime[]"
                                                                placeholder="Enter Meetup Time [e.g 9:30AM]" value="">
                                                        </div>

                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetupday[]"
                                                                placeholder="Enter Meetup Day [e.g MONDAY]" value="">
                                                        </div>

                                                    </div>
                                                    <div class="">

                                                        <div class="form-row">

                                                            <div class="col-12 col-md-12 mb-6">
                                                                <input type="text" class="form-control"
                                                                    name="tourday[]"
                                                                    placeholder="Enter Tour Day [e.g Day #1]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content-->
                                                    <br>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder=""
                                                            name="itinerydesc[]" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2">Enter Itinery Information</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--TOur Itinery 3 -->
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Day #3
                                                </button>
                                            </h6>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetuptime[]"
                                                                placeholder="Enter Meetup Time [e.g 9:30AM]" value="">
                                                        </div>

                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetupday[]"
                                                                placeholder="Enter Meetup Day [e.g MONDAY]" value="">
                                                        </div>

                                                    </div>
                                                    <div class="">

                                                        <div class="form-row">

                                                            <div class="col-12 col-md-12 mb-6">
                                                                <input type="text" class="form-control"
                                                                    name="tourday[]"
                                                                    placeholder="Enter Tour Day [e.g Day #1]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content-->
                                                    <br>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder=""
                                                            name="itinerydesc[]" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2">Enter Itinery Information</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--TOur Itinery 4 -->

                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingFour">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Day #4 Itinery
                                                </button>
                                            </h6>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetuptime[]"
                                                                placeholder="Enter Meetup Time [e.g 9:30AM]" value="">
                                                        </div>

                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetupday[]"
                                                                placeholder="Enter Meetup Day [e.g MONDAY]" value="">
                                                        </div>

                                                    </div>
                                                    <div class="">

                                                        <div class="form-row">

                                                            <div class="col-12 col-md-12 mb-6">
                                                                <input type="text" class="form-control"
                                                                    name="tourday[]"
                                                                    placeholder="Enter Tour Day [e.g Day #1]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content-->
                                                    <br>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder=""
                                                            name="itinerydesc[]" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2">Enter Itinery Information</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Day 5 Itiney-->

                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingFive">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Day #5 Itinery
                                                </button>
                                            </h6>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-row">
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetuptime[]"
                                                                placeholder="Enter Meetup Time [e.g 9:30AM]" value="">
                                                        </div>

                                                        <div class="col-12 col-md-6 mb-3">
                                                            <input type="text" class="form-control"
                                                                name="meetupday[]"
                                                                placeholder="Enter Meetup Day [e.g MONDAY]" value="">
                                                        </div>

                                                    </div>
                                                    <div class="">

                                                        <div class="form-row">

                                                            <div class="col-12 col-md-12 mb-6">
                                                                <input type="text" class="form-control"
                                                                    name="tourday[]"
                                                                    placeholder="Enter Tour Day [e.g Day #1]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content-->
                                                    <br>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder=""
                                                            name="itinerydesc[]" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2">Enter Itinery Information</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Day 5 Itiney-->
                                    </div>


                                </div>
                                <br>
                                <hr>
                                <div>
                                    <div class="pinfo">Hotels </div>

                                </div>
                                <hr>
                                <div>
                                    <div class="pinfo">Select a Hotel Image </div>
                                    <input class="form-control form-control-lg" name="hotelimage1" type="file">
                                </div>
                                <br>
                                column in the db i did not create yet create now as we r doing all nowok where i need to
                                store the image i? seperate table or 'inside'
                                <div>
                                    <div class="pinfo">Select a Second Hotel Image (Optional)</div>
                                    <input class="form-control form-control-lg" name="hotelimage2" type="file">
                                </div>
                            </div>
                            <br>



                            <div class="d-grid gap-2">

                                <input class="btn btn-primary" type="submit" value="POST TOUR">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        {{-- navbar --}}
        @include('admin/include.sidemenu')
    </div>
    <!-- // END drawer-layout -->


    <div id="app-settings">
        <app-settings></app-settings>
    </div>
    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });


        });
    </script>
    @include('admin/include.js')

</body>


</html>
