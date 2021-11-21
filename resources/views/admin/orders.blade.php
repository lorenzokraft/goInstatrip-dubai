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


                        
                      

                        <table class="table table-striped table-hover" id="myTable">
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
                                    Type
                                </td>
                               <td>
                                   Order Name
                               </td>


                                <td>
                                    Order Price
                                </td>


                                <td>
                                    Method
                                </td>

                                <td>
                                    Ordered on
                                </td>
                                 <td>
                                     View
                                 </td>


                                
                            </tr>
                            @php $order = \DB::table('carts')->latest()->paginate(8); @endphp
                            
                            @foreach ($order as $orders)
                            @php $orderCart = json_decode($orders->u_data,true); @endphp
                             @php 
                                        if($orderCart['type'] == 'tour'){
                                            $type = 'Tour';
                                        }else{
                                            $type = 'Visa';
                                        }
                                    
                                    @endphp
                            <tr>

                                <td>
                                    <p> {{ $orderCart['f-name'] }} {{ $orderCart['l-name'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $orderCart['email'] }}</p>
                                </td>
                                <td>
                                    {{ $orderCart['phone_number'] }}
                                </td>

                                <td>
                                    {{ $orderCart['address'] }}
                                </td>

                                   


                                <td>
                                    <span class="badge badge-success">{{$type}}</span>
                                
                                </td>
                                
                                <td>
                                    <p>{{$orders->name}}</p>

                                </td>
                                <td>
                                    <span class="badge badge-info">{{$orders->price}}</span>
                                    
                                </td>


                                <td>
                                    <p>{{$orders->payment_option}}</p>
                                </td>

                                <td>
                                    <p>{{$orders->created_at}}</p>
                                </td>

                                <td>
                                    <a data-id="{{$orders->id}}"  class="showOrders link"><p> <i class="fa fa-feather">View</i> </p></a>
                                    
                                </td>


                                
                            </tr>

                            @endforeach




                            <div class="d-flex justify-content-center">
                                {!! $order->links() !!}
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


 <!-- Modal -->
 <div class="modal " id="showOrders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="tourname">View Tour</h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body" id="body">
                  




             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
             </div>
         </div>
     </div>
 </div>

    
    @include('admin/include.js')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $('.showOrders').click(function() {
            var id = $(this).data('id');


            $.ajax({
                url: '{{ route('ajaxloadProduct')}}'
                , method: "GET"
                , data: {
                    _token: '{{ csrf_token() }}'
                    , id:id
                }
                , success: function(response) {

                    $('#showOrders').modal('show');

                    $('#body').html(response);
                }
            });
            
            



        });

    </script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();

           

        } );

        

    </script>
</body>


</html>

