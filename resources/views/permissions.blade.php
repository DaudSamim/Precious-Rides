@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/js/permission.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Roles</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-stacked nav-inbox">
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Admin</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Assignor</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Booking Agents</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Driver</a>
                                </li>
                                <li class='active'>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>manager</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Owner</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Shift Assignor</a>
                                </li>
                                <li class=''>
                                    <a href="javascript:void(0)"><i class='fa fa-users fa-fw m-r-5'></i>Tech Admin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">User Permission</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id='permission_main_table' class='table table-condensed table-striped w-in-100 nowrap'>
                                    <thead>
                                    <tr>
                                        <th colspan='2' class='p-l-0'>
                                            <div class='checkbox checkbox-primary m-l-15'>
                                                <input type='checkbox'
                                                       data-pr_class='check_all'
                                                       id='ckLb_0'
                                                       class='styled styled-primary'/>
                                                <label for='ckLb_0'>Modules</label></div>
                                        </th>
                                        <th>View</th>
                                        <th>Add</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Approve</th>
                                        <th>Close</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_1' data-pr_class='current_status'><label
                                                        for='ckLb_1'>Current Status</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='dashboard/free-taxi'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_2'
                                                       class='current_status check_all'
                                                       data-pr_class='dashboard_free-taxi'><label
                                                        for='ckLb_2'>Free vehicles</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_free-taxi check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_free-taxi check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_free-taxi check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_free-taxi check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/planner'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_3'
                                                       class='current_status check_all'
                                                       data-pr_class='trips_planner'><label
                                                        for='ckLb_3'>Booking Planner</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status trips_planner check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='dashboard/vehicle-statistics-new'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_4'
                                                       class='current_status check_all'
                                                       data-pr_class='dashboard_vehicle-statistics-new'><label
                                                        for='ckLb_4'>Vehicles Statistics</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_vehicle-statistics-new check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_vehicle-statistics-new check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_vehicle-statistics-new check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_vehicle-statistics-new check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='dashboard/newsfeed'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_5'
                                                       class='current_status check_all'
                                                       data-pr_class='dashboard_newsfeed'><label
                                                        for='ckLb_5'>News Feeds</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_newsfeed check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_newsfeed check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_newsfeed check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status dashboard_newsfeed check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/assigned-bookings'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_6'
                                                       class='current_status check_all'
                                                       data-pr_class='trips_assigned-bookings'><label
                                                        for='ckLb_6'>Assigned Bookings</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='current_status trips_assigned-bookings check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_7' data-pr_class='masters'><label
                                                        for='ckLb_7'>Masters</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/roles'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_8'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_roles'><label
                                                        for='ckLb_8'>Roles</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_roles check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_roles check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_roles check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_roles check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/users'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_9'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_users'><label
                                                        for='ckLb_9'>Users</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_users check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_users check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_users check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_users check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/customer-type'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_10'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_customer-type'><label
                                                        for='ckLb_10'>Customer Type</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customer-type check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customer-type check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customer-type check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customer-type check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/customers'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_11'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_customers'><label
                                                        for='ckLb_11'>Customers</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customers check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customers check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customers check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_customers check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/zones'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_12'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_zones'><label
                                                        for='ckLb_12'>Zones</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_zones check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_zones check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_zones check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_zones check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/locations'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_13'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_locations'><label
                                                        for='ckLb_13'>Locations</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_locations check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_locations check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_locations check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_locations check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/vehicle-model'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_14'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_vehicle-model'><label
                                                        for='ckLb_14'>Vehicle Model</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_vehicle-model check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_vehicle-model check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_vehicle-model check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_vehicle-model check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/vehicle'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_15'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_vehicle'><label
                                                        for='ckLb_15'>Vehicles</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_vehicle check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_vehicle check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_vehicle check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_vehicle check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/tariff'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_16'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_tariff'><label
                                                        for='ckLb_16'>Tariff</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_tariff check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_tariff check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_tariff check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_tariff check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/targets'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_17'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_targets'><label
                                                        for='ckLb_17'>Targets</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_targets check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_targets check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_targets check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_targets check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/intercity-companies'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_18'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_intercity-companies'><label
                                                        for='ckLb_18'>Intercity Companies</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_intercity-companies check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_intercity-companies check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_intercity-companies check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_intercity-companies check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/sms-templates'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_19'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_sms-templates'><label
                                                        for='ckLb_19'>SMS Templates</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_sms-templates check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_sms-templates check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_sms-templates check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_sms-templates check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/discounts'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_20'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_discounts'><label
                                                        for='ckLb_20'>Discounts</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_discounts check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_discounts check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_discounts check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_discounts check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/reasons'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_21'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_reasons'><label
                                                        for='ckLb_21'>Reasons</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_reasons check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_reasons check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_reasons check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_reasons check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/cc-collection-master'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_22'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_cc-collection-master'><label
                                                        for='ckLb_22'>CC Collectioins</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_cc-collection-master check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_cc-collection-master check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_cc-collection-master check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='masters masters_data_cc-collection-master check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/busy-days'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_23'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_busy-days'><label
                                                        for='ckLb_23'>Busy Days</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_busy-days check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_busy-days check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_busy-days check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_busy-days check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='masters/data/boundary'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_24'
                                                       class='masters check_all'
                                                       data-pr_class='masters_data_boundary'><label
                                                        for='ckLb_24'>Boundary</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_boundary check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_boundary check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_boundary check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='masters masters_data_boundary check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_25' data-pr_class='trips'><label
                                                        for='ckLb_25'>Trips</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/bookings'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_26'
                                                       class='trips check_all'
                                                       data-pr_class='trips_bookings'><label
                                                        for='ckLb_26'>Bookings</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_bookings check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_bookings check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_bookings check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_bookings check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/assign'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_27'
                                                       class='trips check_all'
                                                       data-pr_class='trips_assign'><label
                                                        for='ckLb_27'>Assign</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_assign check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_assign check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_assign check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_assign check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/pickup-drop'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_28'
                                                       class='trips check_all'
                                                       data-pr_class='trips_pickup-drop'><label
                                                        for='ckLb_28'>Pick-up / Drop</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_pickup-drop check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_pickup-drop check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_pickup-drop check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_pickup-drop check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/regular-trips'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_29'
                                                       class='trips check_all'
                                                       data-pr_class='trips_regular-trips'><label
                                                        for='ckLb_29'>Regular Trips</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_regular-trips check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_regular-trips check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_regular-trips check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_regular-trips check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/intercity-bookings'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_30'
                                                       class='trips check_all'
                                                       data-pr_class='trips_intercity-bookings'><label
                                                        for='ckLb_30'>Intercity Bookings</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_intercity-bookings check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_intercity-bookings check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_intercity-bookings check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_intercity-bookings check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/cc-collections'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_31'
                                                       class='trips check_all'
                                                       data-pr_class='trips_cc-collections'><label
                                                        for='ckLb_31'>CC
                                                    Collection</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_cc-collections check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_cc-collections check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_cc-collections check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='trips trips_cc-collections check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/feedback'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_32'
                                                       class='trips check_all'
                                                       data-pr_class='trips_feedback'><label
                                                        for='ckLb_32'>Feedback</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_feedback check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_feedback check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_feedback check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_feedback check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/vehicles-tracking'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_33'
                                                       class='trips check_all'
                                                       data-pr_class='trips_vehicles-tracking'><label
                                                        for='ckLb_33'>GPS Vehicle Tracking</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trips trips_vehicles-tracking check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_34'
                                                       data-pr_class='follow-up'><label
                                                        for='ckLb_34'>Follow-up</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='followups/cancellation'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_35'
                                                       class='follow-up check_all'
                                                       data-pr_class='followups_cancellation'><label
                                                        for='ckLb_35'>Cancelled Trips</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_cancellation check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_cancellation check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_cancellation check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_cancellation check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='followups/enquiries'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_36'
                                                       class='follow-up check_all'
                                                       data-pr_class='followups_enquiries'><label
                                                        for='ckLb_36'>Enquiries</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_enquiries check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_enquiries check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_enquiries check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_enquiries check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='followups/follow-up'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_37'
                                                       class='follow-up check_all'
                                                       data-pr_class='followups_follow-up'><label
                                                        for='ckLb_37'>Follow-Up</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_follow-up check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_follow-up check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_follow-up check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_follow-up check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='followups/feedbacks'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_38'
                                                       class='follow-up check_all'
                                                       data-pr_class='followups_feedbacks'><label
                                                        for='ckLb_38'>Feedback / Complaint</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_feedbacks check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_feedbacks check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_feedbacks check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='follow-up followups_feedbacks check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_39'
                                                       data-pr_class='registration'><label
                                                        for='ckLb_39'>Registration</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='registration/register-owner'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_40'
                                                       class='registration check_all'
                                                       data-pr_class='registration_register-owner'><label
                                                        for='ckLb_40'>Owner</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-owner check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-owner check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-owner check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-owner check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='registration/register-vehicle'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_41'
                                                       class='registration check_all'
                                                       data-pr_class='registration_register-vehicle'><label
                                                        for='ckLb_41'>Vehicle</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-vehicle check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-vehicle check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-vehicle check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_register-vehicle check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='registration/add-driver'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_42'
                                                       class='registration check_all'
                                                       data-pr_class='registration_add-driver'><label
                                                        for='ckLb_42'>Driver</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_add-driver check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_add-driver check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_add-driver check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_add-driver check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='registration/tariff'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_43'
                                                       class='registration check_all'
                                                       data-pr_class='registration_tariff'><label
                                                        for='ckLb_43'>Tariff</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_tariff check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_tariff check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_tariff check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_tariff check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='registration/free-up-vehicle'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_44'
                                                       class='registration check_all'
                                                       data-pr_class='registration_free-up-vehicle'><label
                                                        for='ckLb_44'>DND List</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_free-up-vehicle check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_free-up-vehicle check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_free-up-vehicle check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='registration registration_free-up-vehicle check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_45'
                                                       data-pr_class='payments'><label
                                                        for='ckLb_45'>Payments</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='payments/index'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_46'
                                                       class='payments check_all'
                                                       data-pr_class='payments_index'><label
                                                        for='ckLb_46'>Payments List</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_index check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_index check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='payments/add'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_47'
                                                       class='payments check_all'
                                                       data-pr_class='payments_add'><label
                                                        for='ckLb_47'>Payments</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_add check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_add check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_add check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='payments/tobe'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_48'
                                                       class='payments check_all'
                                                       data-pr_class='payments_tobe'><label
                                                        for='ckLb_48'>To Be Paid</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_tobe check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_tobe check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_tobe check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='payments/payment-lock'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_49'
                                                       class='payments check_all'
                                                       data-pr_class='payments_payment-lock'><label
                                                        for='ckLb_49'>Payment Lock</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_payment-lock check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_payment-lock check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='payments payments_payment-lock check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_50'
                                                       data-pr_class='attendance'><label
                                                        for='ckLb_50'>Attendance</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='attendance/vehiclel-list'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_51'
                                                       class='attendance check_all'
                                                       data-pr_class='attendance_vehiclel-list'><label
                                                        for='ckLb_51'>Attendance / Break</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_vehiclel-list check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_vehiclel-list check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_vehiclel-list check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_vehiclel-list check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='attendance/login'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_52'
                                                       class='attendance check_all'
                                                       data-pr_class='attendance_login'><label
                                                        for='ckLb_52'>Login</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_login check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_login check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_login check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_login check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='attendance/logout'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_53'
                                                       class='attendance check_all'
                                                       data-pr_class='attendance_logout'><label
                                                        for='ckLb_53'>Logout</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_logout check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_logout check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_logout check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_logout check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='attendance/breakout'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_54'
                                                       class='attendance check_all'
                                                       data-pr_class='attendance_breakout'><label
                                                        for='ckLb_54'>Break Out</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakout check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakout check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakout check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakout check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='attendance/breakin'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_55'
                                                       class='attendance check_all'
                                                       data-pr_class='attendance_breakin'><label
                                                        for='ckLb_55'>Break In</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakin check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakin check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakin check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='attendance attendance_breakin check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_56' data-pr_class='report'><label
                                                        for='ckLb_56'>Report</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/cabin-wise-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_57'
                                                       class='report check_all'
                                                       data-pr_class='report_cabin-wise-report'><label
                                                        for='ckLb_57'>Cabin Wise Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_cabin-wise-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/pnr-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_58'
                                                       class='report check_all'
                                                       data-pr_class='report_pnr-report'><label
                                                        for='ckLb_58'>PNR Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_pnr-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/booking-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_59'
                                                       class='report check_all'
                                                       data-pr_class='report_booking-report'><label
                                                        for='ckLb_59'>Booking Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_booking-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/cancelled-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_60'
                                                       class='report check_all'
                                                       data-pr_class='report_cancelled-report'><label
                                                        for='ckLb_60'>Cancelled Bookings Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_cancelled-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/vehicle-consolidate-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_61'
                                                       class='report check_all'
                                                       data-pr_class='report_vehicle-consolidate-report'><label
                                                        for='ckLb_61'>Summary Report Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_vehicle-consolidate-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/callflow-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_62'
                                                       class='report check_all'
                                                       data-pr_class='report_callflow-report'><label
                                                        for='ckLb_62'>Call Flow Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_callflow-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/dashboard-runningtaxi'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_63'
                                                       class='report check_all'
                                                       data-pr_class='report_dashboard-runningtaxi'><label
                                                        for='ckLb_63'>Running Taxi</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_dashboard-runningtaxi check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/dashboard-freetaxi'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_64'
                                                       class='report check_all'
                                                       data-pr_class='report_dashboard-freetaxi'><label
                                                        for='ckLb_64'>Free Taxi</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_dashboard-freetaxi check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/attendance-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_65'
                                                       class='report check_all'
                                                       data-pr_class='report_attendance-report'><label
                                                        for='ckLb_65'>Attendance Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_attendance-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/customer-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_66'
                                                       class='report check_all'
                                                       data-pr_class='report_customer-report'><label
                                                        for='ckLb_66'>Customers Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_customer-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/scorecard-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_67'
                                                       class='report check_all'
                                                       data-pr_class='report_scorecard-report'><label
                                                        for='ckLb_67'>Score Card Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_scorecard-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/topcustomer-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_68'
                                                       class='report check_all'
                                                       data-pr_class='report_topcustomer-report'><label
                                                        for='ckLb_68'> Top Customers Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_topcustomer-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/dashboard-scorecard-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_69'
                                                       class='report check_all'
                                                       data-pr_class='report_dashboard-scorecard-report'><label
                                                        for='ckLb_69'>Dashboard Score Card Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_dashboard-scorecard-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/vehicle-activity-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_70'
                                                       class='report check_all'
                                                       data-pr_class='report_vehicle-activity-report'><label
                                                        for='ckLb_70'>Vehicle Activity Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_vehicle-activity-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/vehicle-status-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_71'
                                                       class='report check_all'
                                                       data-pr_class='report_vehicle-status-report'><label
                                                        for='ckLb_71'>Vehicle Status Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_vehicle-status-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/vehicle-attendance-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_72'
                                                       class='report check_all'
                                                       data-pr_class='report_vehicle-attendance-report'><label
                                                        for='ckLb_72'>Vehicle Attendance Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_vehicle-attendance-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/vehicle-collection-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_73'
                                                       class='report check_all'
                                                       data-pr_class='report_vehicle-collection-report'><label
                                                        for='ckLb_73'>Vehicle Collection Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_vehicle-collection-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/single-vehicle-collection'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_74'
                                                       class='report check_all'
                                                       data-pr_class='report_single-vehicle-collection'><label
                                                        for='ckLb_74'>Single Vehicle Collection</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_single-vehicle-collection check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/single-vehicle-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_75'
                                                       class='report check_all'
                                                       data-pr_class='report_single-vehicle-report'><label
                                                        for='ckLb_75'>Single Vehicle</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_single-vehicle-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/sms-delivery-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_76'
                                                       class='report check_all'
                                                       data-pr_class='report_sms-delivery-report'><label
                                                        for='ckLb_76'>SMS Delivery Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_sms-delivery-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/cc-collection-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_77'
                                                       class='report check_all'
                                                       data-pr_class='report_cc-collection-report'><label
                                                        for='ckLb_77'>CC Collection Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='report report_cc-collection-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/taxi-wise-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_78'
                                                       class='report check_all'
                                                       data-pr_class='report_taxi-wise-report'><label
                                                        for='ckLb_78'>Taxi Wise Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_taxi-wise-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/scoreboard-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_79'
                                                       class='report check_all'
                                                       data-pr_class='report_scoreboard-report'><label
                                                        for='ckLb_79'>Score Board Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_scoreboard-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/newcustomer-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_80'
                                                       class='report check_all'
                                                       data-pr_class='report_newcustomer-report'><label
                                                        for='ckLb_80'>New Customer Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_newcustomer-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/customerusage-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_81'
                                                       class='report check_all'
                                                       data-pr_class='report_customerusage-report'><label
                                                        for='ckLb_81'>Customer Usage Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_customerusage-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/zerocollection-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_82'
                                                       class='report check_all'
                                                       data-pr_class='report_zerocollection-report'><label
                                                        for='ckLb_82'> ReAssign Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_zerocollection-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/datewise-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_83'
                                                       class='report check_all'
                                                       data-pr_class='report_datewise-report'><label
                                                        for='ckLb_83'>Date Wise Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_datewise-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='report/feedback-report'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_84'
                                                       class='report check_all'
                                                       data-pr_class='report_feedback-report'><label
                                                        for='ckLb_84'>Feedback Report</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='report report_feedback-report check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_85'
                                                       data-pr_class='settings'><label
                                                        for='ckLb_85'>Settings</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/settings'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_86'
                                                       class='settings check_all'
                                                       data-pr_class='settings_settings'><label
                                                        for='ckLb_86'>Settings</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_settings check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_settings check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_settings check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_settings check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/permissions'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_87'
                                                       class='settings check_all'
                                                       data-pr_class='settings_permissions'><label
                                                        for='ckLb_87'>Permissions</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_permissions check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_permissions check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_permissions check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_permissions check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/cc-collection'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_88'
                                                       class='settings check_all'
                                                       data-pr_class='settings_cc-collection'><label
                                                        for='ckLb_88'>CC Collection Settings</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_cc-collection check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_cc-collection check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_cc-collection check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_cc-collection check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/any-vehicles'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_89'
                                                       class='settings check_all'
                                                       data-pr_class='settings_any-vehicles'><label
                                                        for='ckLb_89'>Any Vehicles</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_any-vehicles check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_any-vehicles check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_any-vehicles check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes'
                                                       class='settings settings_any-vehicles check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/mail-settings'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_90'
                                                       class='settings check_all'
                                                       data-pr_class='settings_mail-settings'><label
                                                        for='ckLb_90'>Mail Settings</label></div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_mail-settings check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='settings/edit'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_91'
                                                       class='settings check_all'
                                                       data-pr_class='settings_edit'><label
                                                        for='ckLb_91'>Mail Settings Edit</label></div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='settings settings_edit check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_92'
                                                       data-pr_class='trip-edit'><label
                                                        for='ckLb_92'>Trip-Edit</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='trips/trip-edit'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_93'
                                                       class='trip-edit check_all'
                                                       data-pr_class='trips_trip-edit'><label
                                                        for='ckLb_93'>Edit Trip</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trip-edit trips_trip-edit check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trip-edit trips_trip-edit check_all'
                                                       value='add'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trip-edit trips_trip-edit check_all'
                                                       value='edit'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='trip-edit trips_trip-edit check_all'
                                                       value='delete'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox'
                                                       class='styled styled-primary check_all'
                                                       id='ckLb_94' data-pr_class='summary'><label
                                                        for='ckLb_94'>Summary</label></div>
                                        </td>
                                        <td colspan='7'></td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='summary/cabin-wise-summary'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_95'
                                                       class='summary check_all'
                                                       data-pr_class='summary_cabin-wise-summary'><label
                                                        for='ckLb_95'>Cabin Wise Summary</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='summary summary_cabin-wise-summary check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='summary/consolidate'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_96'
                                                       class='summary check_all'
                                                       data-pr_class='summary_consolidate'><label
                                                        for='ckLb_96'>VID Consolidated Summary</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='summary summary_consolidate check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='summary/call-flow-summary'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_97'
                                                       class='summary check_all'
                                                       data-pr_class='summary_call-flow-summary'><label
                                                        for='ckLb_97'>Call flow Summary</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='summary summary_call-flow-summary check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class='data_row'>
                                        <td><input type='hidden' class='cm_url' value='summary/regulartrip-wise-summary'/></td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input type='checkbox' id='ckLb_98'
                                                       class='summary check_all'
                                                       data-pr_class='summary_regulartrip-wise-summary'><label
                                                        for='ckLb_98'>RegularTrip Wise Summary</label></div>
                                        </td>
                                        <td>
                                            <div class='checkbox checkbox-primary'>
                                                <input title="" type='checkbox' data-action='yes' checked
                                                       class='summary summary_regulartrip-wise-summary check_all'
                                                       value='view'/>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="button"
                                        class="btn btn-primary btn-large ladda-button buttondesign btn-sm pull-right"
                                        id='save_permission' data-color="mint" data-style="expand-right" data-size="l"><span
                                            class="ladda-label">Save</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection