
{{-- <x-app-layout>

</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

<base href="/public">

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
                {{-- BODY  --}}
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
            <div class="container" align="center">
                <h3 style="color:black; padding-top:25px; font-size:25px; margin-bottom:50px;">Update Visa </h3>
            </div>

            <div class="form">
                <script src="https://use.fontawesome.com/a6f0361695.js">
                </script>

                @if(session()->has('message'))
            <div class="alert alert-success" align="center" >
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}

            </div>

                @endif

{{-- FOrm STARTS HERE --}}
    <form action="{{url('updatevisaproduct',$data->id)}}"method="POST" enctype="multipart/form-data"id="feedback">
                @csrf

                    <div class="mb-3">
                        <div class="pinfo">Update Visa Days</div>
                        <input type="text" class="form-control" name="vdays" value="{{$data->vdays}}">
                      </div>



                      <div class="mb-3">
                        <div class="pinfo">Update Visa Price</div>
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                      </div>



                 <div class="pinfo">Update Visa Description </div>
                 <div class="form-floating">
                    <textarea class="form-control"
                    value="{{$data->desc}}"></textarea>
                    <label for="floatingTextarea2">{{$data->desc}}</label>
                  </div>

                <div>
                    <div class="pinfo">Old  Visa Photo </div>

                    <img height="200"; width="200" src="/productimage/{{$data->image}}" alt="">
                  </div>

                  <div>
                      <div class="pinfo">Upload a new Image </div>

                      <input class="form-control form-control-lg" name="file" type="file">
                  </div>

                  <div>

                  </div>

                 <div class="d-grid gap-2">

                    <input class="btn btn-primary" type="submit">
                  </div>

                </form>
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
