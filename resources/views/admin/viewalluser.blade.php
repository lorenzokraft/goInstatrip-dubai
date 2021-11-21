
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



                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">


                    <div class="container-fluid page__container" align="center">


                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
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
                            <div class="col-md-4">

                            <form action="#" method="get">
                                @csrf

                                <input class="form-control" type="search" name="search"placeholder="search">
                            </form>
                            </div>
                        </div>
                        </div>
                        <h3 align="center" style="margin-top:3%; margin-bottom:3%"> Add New User </h3>

                <table class="table table-striped table-hover">
                    <tr>
                        <td>
                            Customer Name
                        </td>

                        <td>
                            Email
                        </td>

                        <td>
                            Phone Number
                        </td>

                        <td>
                            Address
                        </td>

                        <td>
                            Registered on
                        </td>

                        <td>
                            ACTION
                        </td>
                    </tr>

                    @foreach ($users as $user)
                    <tr>

                        <td>
                            <p>{{$user->name}}</p>
                        </td>



                        <td>
                            <p>{{$user->email}}</p>
                        </td>

                        <td>
                            <p>{{$user->phone}}</p>
                        </td>

                        <td>
                            <p>{{$user->address}}</p>
                        </td>

                        <td>
                            <p>{{$user->created_at}}</p>
                        </td>

                        <td class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Modify</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                              <li><a class="dropdown-item" href="#">View User</a></li>
                              <li>
                                  <a class="dropdown-item" href="#">Disable User</a></li>

                    </td>
                    </tr>

                    @endforeach




                    <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div>

                  </table>
                    </div>
                </div>

            </div>
            <!-- // END header-layout -->

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
