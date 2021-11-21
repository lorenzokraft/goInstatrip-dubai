{{-- <x-app-layout>

</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

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
                        <h3 style="color:black; padding-top:25px; font-size:25px; margin-bottom:50px;">View all TOurs
                        </h3>
                    </div>

                    <div class="form">
                        <script src="https://use.fontawesome.com/a6f0361695.js">
                        </script>

                        <div class="app-properties-container">
                            <div class="row h-100 m-0">
                                <div class="col-lg-12 py-grid d-flex flex-column h-100" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="bottom: 0px;">
                                                <div class="simplebar-content"
                                                    style="padding: 30px calc(35px) 30px 15px; height: 100%; overflow: hidden scroll;">



                                                    <div class="container-fluid page__container">

                                                        <div class="card card-form d-flex flex-column flex-sm-row">

                                                            <button
                                                                class="btn bg-white border-left border-top border-top-sm-0 rounded-top-0 rounded-top-sm rounded-left-sm-0"><i
                                                                    class="material-icons text-primary">refresh</i></button>

                                                            <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle" href="#"
                                                                    id="dropdown01" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">Dropdown</a>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                                                    <li><a class="dropdown-item" href="#">Action</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Another
                                                                            action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something
                                                                            else here</a></li>
                                                                </ul>
                                                            </li>
                                                            </ul>

                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                                                <span data-feather="calendar"></span>
                                                                This week
                                                            </button>

                                                        </div>

                                                        @if (session()->has('message'))
                                                            <div class="alert alert-success" align="center">
                                                                <button type="button" class="close"
                                                                    data-dismiss="alert">x</button>
                                                                {{ session()->get('message') }}

                                                            </div>

                                                        @endif


                                                        <div class="row">




                                                            @foreach ($data as $uaetours)

                                                                <div class="col-sm-6 col-xl-4">
                                                                    <div class="card property-card">
                                                                        <div class="property-card__image-container">
                                                                            <img src="/uaetoursimage/{{ $uaetours->image }}"
                                                                                alt="" class="card-img">
                                                                            <div class="property-card__image-content">
                                                                                <div
                                                                                    class="card-body d-flex align-items-center">
                                                                                    <div class="avatar-group flex">
                                                                                        <a href="javascript:void(0);"
                                                                                            class="avatar avatar-xs text-decoration-none">
                                                                                            <span
                                                                                                class="avatar-title rounded-circle">
                                                                                                <p
                                                                                                    style="background-color: white;padding:5px;color:black;">
                                                                                                    {{ $uaetours->status }}
                                                                                                </p>
                                                                                            </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a class="d-flex align-items-center"
                                                                                        href="#"><i
                                                                                            class="material-icons mr-1 icon-20pt">remove_red_eye</i>
                                                                                        <small>327</small></a>
                                                                                </div>
                                                                                <div
                                                                                    class="property-card__image-title card-body">
                                                                                    <span
                                                                                        class="h3 text-white font-weight-normal">AED{{ $uaetours->price }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p><a href="#"
                                                                                    class="text-body"><strong>{{ $uaetours->title }}</strong></a>
                                                                            </p>
                                                                            <small
                                                                                class="text-dark-gray d-flex align-items-center mb-2">
                                                                                <i
                                                                                    class="material-icons icon-16pt text-muted-light mr-1"></i>
                                                                                {{ $uaetours->type }}
                                                                            </small>
                                                                            <div class="d-flex align-items-center">
                                                                                <small
                                                                                    class="mr-3 text-dark-gray d-flex align-items-center">

                                                                                </small>
                                                                                <small
                                                                                    class="ml-auto text-dark-gray d-flex align-items-center">

                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                        <!--Edit Tour-->
                                                                        <a class="btn btn-primary"
                                                                            href="{{ url('updateuaetours', $uaetours->id) }}">Update
                                                                            Tours</a>
                                                                        <br>
                                                                        <!--Delete Tour-->
                                                                        <a class="btn btn-danger"
                                                                            href="{{ url('deleteuaeproduct', $uaetours->id) }}">Delete
                                                                            Tours</a>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>


                                                        <ul class="pagination justify-content-center ">

                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#"
                                                                    aria-label="Previous">
                                                                    <span aria-hidden="true"
                                                                        class="material-icons">first_page</span>
                                                                    <span class="sr-only">First</span>
                                                                </a>
                                                            </li>


                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#"
                                                                    aria-label="Previous">
                                                                    <span aria-hidden="true"
                                                                        class="material-icons">chevron_left</span>
                                                                    <span class="sr-only">Prev</span>
                                                                </a>
                                                            </li>


                                                            <li class="page-item active">
                                                                <a class="page-link" href="#" aria-label="1">
                                                                    <span>1</span>
                                                                </a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="2">
                                                                    <span>2</span>
                                                                </a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="3">
                                                                    <span>3</span>
                                                                </a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="4">
                                                                    <span>4</span>
                                                                </a>
                                                            </li>


                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span class="sr-only">Next</span>
                                                                    <span aria-hidden="true"
                                                                        class="material-icons">chevron_right</span>
                                                                </a>
                                                            </li>


                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span class="sr-only">Last</span>
                                                                    <span aria-hidden="true"
                                                                        class="material-icons">last_page</span>
                                                                </a>
                                                            </li>

                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 793px; height: 988px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar simplebar-visible"
                                            style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar simplebar-visible"
                                            style="transform: translate3d(0px, 0px, 0px); visibility: visible; height: 58px;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




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
    @include('admin/include.js')

</body>


</html>
