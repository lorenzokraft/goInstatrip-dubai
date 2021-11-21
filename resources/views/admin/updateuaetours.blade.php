
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
                <h3 style="color:black; padding-top:25px; font-size:25px; margin-bottom:50px;">Update Tour</h3>
            </div>

            <div class="form">
                <script src="https://use.fontawesome.com/a6f0361695.js">
                </script>


                <div>

                </div>
                @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}

            </div>

                @endif

    <form method="POST" action="{{url('updateuaetoursproduct',$data->id)}}" enctype="multipart/form-data"  id="feedback">
                @csrf

                    <div class="mb-3">
                        <div class="pinfo">Update Tour Name</div>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                      </div>

                      <div class="mb-3">
                        <div class="pinfo">Enter Tour Date</div>
                        <input type="text" class="form-control" name="date" value="{{$data->date}}">
                      </div>

                      <div>
                          <div class="pinfo">Type</div>
                          <select name="type_tour" id="type_tour" class="form-control">
                              <option value="uae" @if($data->type == 'uae' or empty($data->type)) selected @endif>UAE</option>
                              <option value="indian" @if($data->type == 'indian') selected @endif>INDIAN</option>
                          </select>
                      </div>


                      <div class="mb-3">
                        <div class="pinfo">Update Tour Price</div>
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                      </div>

                      <div class="pinfo">ADDONS</div>
                       <div class="form-floating">
                        @foreach(DB::table('addons')->get() as $addon)
                        <div class="col-6 col-md-6 mb-3">
                            <input type="checkbox" id="{{$addon->title}}" name="{{$addon->type}}[]" value="{{$addon->id}}"  {{$addon->id}} @if(DB::table('addoninclusions')->where('addon_id',$addon->id)->where('product_id',$data->id)->count()>0) selected @endif>

                            <label for="{{$addon->title}}">{{$addon->title}} ({{$addon->type}})</label>
                        </div>
                        @endforeach

                      </div>


                 <div class="pinfo">Tour Discription</div>
                 <div class="form-floating">
                    <textarea class="form-control" value="{{$data->desc}}" name="desc" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                  </div>

                  <div class="mb-3">
                    <div class="pinfo">Visa Status</div>
                    <input type="text" class="form-control" name="status" value="{{$data->status}}">
                  </div>
                  <br>
                  <div>
                    <div class="pinfo">Old Image </div>
                    <img height="200" width="300"src="/uaetoursimage/{{$data->image}}" alt="">
                  </div>
                  <br>
                <div>
                    <div class="pinfo">Change Tour Image </div>
                    <input class="form-control form-control-lg" name="file" type="file">
                  </div>

                  <div style="padding: 5%">

                  </div>

                 <div class="d-grid gap-2">

                    <input class="btn btn-primary" type="submit" value="UPDATE TOUR">
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
