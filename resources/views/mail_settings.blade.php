@extends('layout.default')

@section('pageStyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail_settings.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Mail</h6>
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
                                <th> Sl.No</th>
                                <th> Mail Type</th>
                                <th> Mail ID</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cabin Wise Summary</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Booking Planner</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hour Wise Stats Report</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Free taxi</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-primary">perfectin1311@gmail.com</a>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Enquiry Call list</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Pickup / Drop</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Daily Summary</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Allot screen</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Not Used Customers Report</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Score Board Report</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Travel Bill Mail</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Feedback Report</td>
                                <td>
                                    <a href="javascript:void(0)" class="badge badge-primary">palanivelayudam@gmail.com</a>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Vehicle LoggedIn Summary</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       class="badge badge-warning">perfectin1311@gmail.com</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs">Edit</a>
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