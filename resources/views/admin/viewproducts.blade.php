
{{-- <x-app-layout>

</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin/include.navbar')

<body class="layout-default">


    <div class="preloader">

    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                    <!-- Header -->
                @include('admin/include.header-content')

                    <!-- END HEADER -->



                    {{-- BODY  --}}
            <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
                    <div class="container" align="center">
                        <h3 style="color:black; padding-top:25px; font-size:25px; margin-bottom:50px;">View All Visa</h3>
                    </div>

                    <div class="form">
                        <script src="https://use.fontawesome.com/a6f0361695.js">
                        </script>



                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{session()->get('message')}}

                            </div>

                        @endif


                    <div class="container-fluid page-body-wrapper">
                    <div class="container" align="center">



                    <table class="table table-striped table-hover">

                            <tr>
                                <td>
                                ID
                                </td>

                                <td>
                                VISA TYPE
                                </td>

                                <td>
                                VISA DESCRIPTION
                                </td>

                                <td>
                                    DATE POSTED
                                </td>
                                <td>
                                    PRICE
                                </td>
                                <td>
                                    ACTION
                                </td>

                            </tr>
                            @foreach ($data as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->vdays}}</td>
                                <td>{{$product->desc}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->price}}</td>

                                <td class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Modify</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                          <li><a class="dropdown-item" href="{{url('updateproduct',$product->id)}}">Edit</a></li>
                                          <li>
                                              <a class="dropdown-item" href="{{url('deleteproduct',$product->id)}}">Delete</a></li>

                                </td>
                            </tr>

                            @endforeach


                    </table>
                </div>

                    </div>

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
