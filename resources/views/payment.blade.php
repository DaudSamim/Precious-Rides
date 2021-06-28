@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2-full.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/js/payment.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Payment</h6>
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
                        <table class="table table-striped table-bordered w-in-100" id="table">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Collection Type</td>
                                <td>
                                    <a href="#" id="collection_type" data-type="text" data-pk=""
                                       data-title="Collection Type">General</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Collection Based On</td>
                                <td>
                                    <a href="#" data-collection-based-on id="collection_based_on" data-type="select"
                                       data-pk="" data-title="Collection Based On">Month</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Payment Type</td>
                                <td>
                                    <a href="#" data-payment-type id="collection_payment_type" data-name="" data-type="select"
                                       data-pk="" data-title="Payment Type">Percentage</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Payment By</td>
                                <td>
                                    <a href="#" id="collection_payment_by"  data-type="select" data-pk=""
                                       data-payment-by data-title="Payment By">Vehicle</a>
                                </td>
                            </tr>
                            <tr class="collection_general_ammount ">
                                <td>5</td>
                                <td>General Amount</td>
                                <td>
                                    <a href="#" id="collection_general_ammount" data-collection-type data-type="text" data-pk=""
                                       data-title="General Collection Amount">500</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection