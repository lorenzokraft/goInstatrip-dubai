<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">




<div class="container-fluid page__container">

    <div class="row card-group-row">
        <div class="col-lg-4 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg card-chart-stats">
                <div class="card-header__title text-muted mb-2">UAE Visa Sales</div>
                <div class="text-amount">{{ DB::table('carts')->where('type','visa')->sum('price')}}</div>
                

            </div>
        </div>
        <div class="col-lg-4 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg card-chart-stats">
                <div class="card-header__title text-muted mb-2">Tour Purchases</div>
                <div class="text-amount">{{ DB::table('carts')->where('type','tour')->sum('price')}}</div>
               

            </div>
        </div>

        <div class="col-lg-4 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg card-chart-stats">
                <div class="card-header__title text-muted mb-2">Users</div>
                <div class="text-amount">{{ DB::table('users')->count()}}</div>
         
                <div class="chart">


                </div>
            </div>
        </div>
    </div>

    <div class="row card-group-row">
        <div class="col-lg-4 col-md-5 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-header card-header-large bg-light d-flex align-items-center">
                    <div class="flex">
                        <h4 class="card-header__title">Current Balance</h4>
                        <div class="card-subtitle text-muted">This billing cycle</div>
                    </div>
                    <div class="dropdown ml-auto">
                        <a href="#" data-toggle="dropdown" data-caret="false"
                            class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0)" class="dropdown-item">Go to Report</a>
                            <a href="javascript:void(0)" class="dropdown-item">Next Cycle</a>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center h-250">
                    <div class="chart z-0 dashboard-chart">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="text-muted mb-1">Next bill</div>
                            <div class="card-header__title">15.03.2019</div>
                        </div>
                        <canvas class="position-relative" id="billingChart"></canvas>
                    </div>
                </div>
                <div class="card-body pt-0 text-center">
                    <div class="text-amount mb-1">&dollar;37,290</div>
                    <div class="text-muted">Current balance this billing cycle</div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7 card-group-row__col">
            <div class="card card-group-row__card">
                <div class="card-header card-header-large bg-light d-flex align-items-center">
                    <div class="flex">
                        <h4 class="card-header__title">Total Transactions</h4>
                        <div class="card-subtitle text-muted">This billing cycle</div>
                    </div>
                    <div class="dropdown ml-auto">
                        <a href="#" data-toggle="dropdown" data-caret="false"
                            class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0)" class="dropdown-item">Action</a>
                            <a href="javascript:void(0)" class="dropdown-item">Other Action</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex align-items-center">
                    <div class="chart w-100" style="height: calc(328px - 1.25rem * 2);">
                        <canvas id="transactionsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div style="margin: 5%"></div>

        {{-- TABLE  --}}
            <h3 align="center">Recent Customer Registrations </h3>
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
            </tr>

            @endforeach
            <div class="d-flex justify-content-center">
                {!! $users->links() !!}
            </div>
          </table>


</div>



</div>
