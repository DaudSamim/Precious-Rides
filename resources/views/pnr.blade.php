@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">PNR Search</h6>
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
                            <form id="validate" data-parsley-validate="true">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label required">PNR Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label w-in-100 invisible">Submit</label>
                                            <button type="submit" class="btn btn-dark m-r-5 m-b-5 ladda-button"
                                                    data-color="mint" data-style="expand-right" data-size="l"><span
                                                        class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">PNR Result</h6>
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
                                <h4>Customer Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile No</th>
                                        <th>Secondary Mobile No</th>
                                        <th>Customer Type</th>
                                        <th>Address</th>
                                        <th>Zone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Palani Velayudam</td>
                                        <td>97XXXXXX58</td>
                                        <td>--</td>
                                        <td>Gold</td>
                                        <td>Gandhipuram</td>
                                        <td>SITRA, Airport, Hopes, Kalapptti, CODISSIA</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Booking Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Via</th>
                                        <th>Taxi Type</th>
                                        <th>Remarks</th>
                                        <th>Land Mark</th>
                                        <th>Req Pickup Time</th>
                                        <th>Booked By</th>
                                        <th>Booked Time</th>
                                        <th>Booking Type</th>
                                        <th>Pref Model</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>SINGANALLUR</td>
                                        <td>ANNASILAI</td>
                                        <td>Gandhipuram</td>
                                        <td>Sedan</td>
                                        <td>Be on time</td>
                                        <td>Main Signal</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>pradeepa</td>
                                        <td>9/17/18, 7:33 PM</td>
                                        <td>crm</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Assigning Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Vid</th>
                                        <th>Taxi Type</th>
                                        <th>Driver Name</th>
                                        <th>Driver Mobile No</th>
                                        <th>EDT</th>
                                        <th>Assigning Time</th>
                                        <th>Assigning By</th>
                                        <th>Book Mode</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>814</td>
                                        <td>Sedan</td>
                                        <td>Saravanan</td>
                                        <td>9159547048</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>Admin</td>
                                        <td>crm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Driver Acknowledge Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Vid</th>
                                        <th>Taxi Type</th>
                                        <th>Driver Name</th>
                                        <th>Driver Mobile No</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>814</td>
                                        <td>Sedan</td>
                                        <td>Saravanan</td>
                                        <td>9159547048</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Pickup Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Vid</th>
                                        <th>Taxi Type</th>
                                        <th>Driver Name</th>
                                        <th>Driver Mobile No</th>
                                        <th>EDT</th>
                                        <th>Start KM</th>
                                        <th>End KM</th>
                                        <th>Amount</th>
                                        <th>Pickup Time</th>
                                        <th>Picked By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>814</td>
                                        <td>Sedan</td>
                                        <td>Saravanan</td>
                                        <td>9159547048</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>21556</td>
                                        <td>21590</td>
                                        <td>350.00</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>Saravanan</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Allot SMS Status</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Request Send Time</th>
                                        <th>Driver Response Time</th>
                                        <th>SMS- Customer Sent Time</th>
                                        <th>SMS- Customer Delivery Time</th>
                                        <th>Alloted By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>3 Minutes</td>
                                        <td>9/20/18, 9:00 AM</td>
                                        <td>9/20/18, 9:01 AM</td>
                                        <td>Admin</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>Cancellation Details</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Cancelled By</th>
                                        <th>Cancelled At</th>
                                        <th>Remark</th>
                                        <th>Cancellation Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>From places Changes</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>From</th>
                                        <th>Changed From</th>
                                        <th>Changed At</th>
                                        <th>Changed By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <h4>To places Changes</h4>
                                <table class="table table-striped table-bordered w-in-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>To</th>
                                        <th>Changed To</th>
                                        <th>Changed At</th>
                                        <th>Changed By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                        <td>Nil</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection