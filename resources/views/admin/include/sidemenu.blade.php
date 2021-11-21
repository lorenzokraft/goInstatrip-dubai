<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark sidebar-left simplebar" data-simplebar>
            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account flex-shrink-0">
                <a href="{{url('/home')}}" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="mr-3">
                        <img src="img/logo_2x.png" width="200" height="43">

                    </span>
                    <span class="flex d-flex flex-column">

                    </span>
                </a>


            </div>
            <br>
            <br>
            <div
                class="sidebar-stats row no-gutters align-items-center text-center border-bottom flex-shrink-0">

                <div class="sidebar-stats__col col border-left">


                </div>
            </div>

            <br>
            <div class="tab-content">
                <div id="sm-menu" class="tab-pane show active" role="tabpanel" aria-labelledby="sm-menu-tab">
                    <ul class="sidebar-menu flex">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{url('/home')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>


                      

                        <!-- Tours -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">TOUR PRODUCTS</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="components_menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="
                                    {{url('tours')}}">
                                        <span class="sidebar-menu-text">Add Tours</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('tourproducts')}}">
                                        <span class="sidebar-menu-text">View All Tours</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--END UAE FIXED MENU-->

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#uaevisa">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">UAE VISA</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="uaevisa">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="
                                    {{url('product')}}">
                                        <span class="sidebar-menu-text">Add New Visa</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('viewproducts')}}">
                                        <span class="sidebar-menu-text">View All Visa</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- Manage Order tab -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{url('orders')}}">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">MANAGE ORDERS <span class="badge badge-success">{{ \DB::table('carts')->count()}}</span> </span>

                            </a>
                        </li>

                        <!-- Manage Order tab -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{url('addons')}}">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">ADDONS  </span>

                            </a>
                        </li>


                          <!-- Manage Customer -->
                          <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#manage-users">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">MANAGE USERS</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="manage-users">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="
                                    {{url('addusers')}}">
                                        <span class="sidebar-menu-text">Add New User</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('viewusers')}}">
                                        <span class="sidebar-menu-text">View All Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- End Manage Users tab -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{url('orders')}}">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">developer_board</i>
                                <span class="sidebar-menu-text">Manage Users</span>
                            </a>
                        </li>

                        <!-- End Manage Users tab -->


                        {{-- <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-charts.html">


                            </a>
                        </li> --}}

                         <!-- End Manage Customer tab -->


                        <!-- Forms -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-forms.html">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                <span class="sidebar-menu-text">Forms</span>
                            </a>
                        </li>

                        <!-- Forms -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-forms.html">
                                <i
                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                <span class="sidebar-menu-text">Manage Users</span>
                            </a>
                        </li>




                    </ul>
                </div>
                <div id="sm-account" class="tab-pane">
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Edit Information</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Payments</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Billing</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Change Password</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="login.html">
                                <span class="sidebar-menu-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="sm-settings" class="tab-pane sidebar-p-a">
                    <div class="form-inline form-group">
                        <label for="currency" class="text-label flex justify-content-start">Currency</label>
                        <select name="currency" id="currency" class="custom-select">
                            <option selected value="usd">USD</option>
                            <option value="eur">EUR</option>
                            <option value="gbp">GBP</option>
                        </select>
                    </div>
                    <div class="form-inline form-group">
                        <label for="show_tags" class="text-label flex justify-content-start">Show Tags</label>
                        <label for="show_tags">Yes</label>
                        <div class="custom-control custom-checkbox-toggle custom-control-inline ml-2 mr-0">
                            <input checked="" type="checkbox" id="show_tags" class="custom-control-input">
                            <label class="custom-control-label" for="show_tags">Yes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="api_token" class="text-label flex justify-content-start">API Token</label>
                        <div class="input-group input-group-merge">
                            <input id="api_token" type="password" required=""
                                class="form-control form-control-appended" placeholder="Enter your token">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa fa-eye"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="api_secret" class="text-label flex justify-content-start">API Secret</label>
                        <div class="input-group input-group-merge">
                            <input id="api_secret" type="password" required=""
                                class="form-control form-control-appended" placeholder="Enter your secret">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa fa-eye"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-label flex justify-content-start">Price Range</label>
                        <input type="text" data-toggle="ion-rangeslider" data-min="0" data-max="100"
                            data-from="50" data-step="5" data-max-postfix="+" data-prefix="$">
                    </div>
                    <div>
                        <label for="category" class="text-label flex justify-content-start">Default
                            Category</label>
                        <select name="category" id="category" class="custom-select">
                            <option selected value="admin">Admin Dashboard</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mt-auto sidebar-p-a sidebar-b-t d-flex flex-column flex-shrink-0">
                <a class="sidebar-link mb-2" href="edit-account.html">Change Password</a>
                <a class="sidebar-link mb-2" href="edit-account.html">Settings</a>
                <a class="sidebar-link" href="login.html">
                    Logout
                    <i class="sidebar-menu-icon ml-2 material-icons icon-16pt">exit_to_app</i>
                </a>
            </div>

        </div>
    </div>
</div>
