
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

                <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall"
                    data-retarget-mouse-scroll="false">
                    <div class="mdk-header__content">

                        <div class="navbar navbar-expand-sm navbar-main navbar-light bg-white pl-md-0 pr-0" id="navbar"
                            data-primary>
                            <div class="container-fluid page__container pr-0">

                                <!-- Navbar toggler -->
                                <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar"
                                    type="button" data-toggle="sidebar">
                                    <span class="material-icons">short_text</span>
                                </button>

                                <!-- Navbar Brand -->
                                <a href="{{url('/home')}}" class="navbar-brand flex ">
                                    <span>Dashboard</span>
                                </a>


                                <form class="ml-auto search-form search-form--light d-none d-sm-flex flex"
                                    action="">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                                </form>


                                <ul class="nav navbar-nav d-none d-md-flex">
                                    <li class="nav-item dropdown">
                                        <a href="#notifications_menu" class="nav-link dropdown-toggle"
                                            data-toggle="dropdown" data-caret="false">
                                            <i
                                                class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                        </a>
                                        <div id="notifications_menu"
                                            class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2">
                                                <span
                                                    class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                                <a href="javascript:void(0)" class="text-muted"><small>Clear
                                                        all</small></a>
                                            </div>
                                            <div class="navbar-notifications-menu__content" data-simplebar>
                                                <div class="py-2">

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                    alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a
                                                                href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span
                                                                        class="avatar-title bg-purple rounded-circle"><i
                                                                            class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small
                                                                class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                    alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a
                                                                href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span
                                                                        class="avatar-title bg-purple rounded-circle"><i
                                                                            class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small
                                                                class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                    alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a
                                                                href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span
                                                                        class="avatar-title bg-purple rounded-circle"><i
                                                                            class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small
                                                                class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item text-center navbar-notifications-menu__footer">View
                                                All</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#events-drawer" data-toggle="sidebar"
                                            class="nav-link d-flex align-items-center">
                                            <i class="material-icons nav-icon">event_note</i>
                                            <span
                                                class="badge badge-warning text-primary-dark rounded-circle badge-notifications">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-caret="false"
                                        class="dropdown-toggle navbar-toggler navbar-toggler-company border-left d-flex align-items-center ml-navbar">
                                        <span class="rounded-circle">

                                        </span>
                                    </a>
                                    <div id="company_menu"
                                        class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                        <div
                                            class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                            <span class="mr-3">
                                                <img src="assets/images/frontted-logo-blue.svg" width="43" height="43"
                                                    alt="avatar">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="h5 m-0">Frontted</strong>
                                                <small class="text-muted text-uppercase">8 Users</small>
                                            </span>

                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                            <span class="material-icons mr-2">settings</span> Settings
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                            <span class="material-icons mr-2">exit_to_app</span> Switch Company
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                            <span class="material-icons mr-2">add</span> New Company
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- // END Header -->

                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
                    <div class="container-fluid page__container">
                        <h3 align="center" style="margin-top:3%; margin-bottom:3%"> Add New User </h3>
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">ADMIN</strong></p>
                                    <p class="text-muted">Users who have admin privilege would be able to performe all action on this website.
                                    </p>

                                    <p><strong class="headings-color">MODERATOR</strong></p>
                                    <p class="text-muted">Modrator will be able to performe basic task like View records,products & sales but would not be able to delete or see any financial trends.
                                    </p>

                                    <p><strong class="headings-color">User</strong></p>
                                    <p class="text-muted">This is a customer role
                                    </p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Give a username:</label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Enter a username">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User  email:</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Your password:</label>
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Type in a password ">
                                        </div>

                                        <div class="form-group">
                                            <label for="select01">SELECT ROLE</label>
                                            <select id="select01" data-toggle="select" class="form-control">
                                                <option selected="Click to sellect">

                                                </option>
                                                <option>
                                                    ADMINISTRATOR
                                                </option>
                                                <option>
                                                    MODERATOR
                                                </option>
                                                <option>
                                                    USER
                                                </option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- // END header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout">
                
            </div>

        </div>
        <!-- // END drawer-layout__content -->

        {{-- navbar  --}}
        @include('admin/include.sidemenu')
    </div>
    <!-- // END drawer-layout -->


    <div id="app-settings">
        <app-settings></app-settings>
    </div>
    @include('admin/include.js')

</body>


</html>
