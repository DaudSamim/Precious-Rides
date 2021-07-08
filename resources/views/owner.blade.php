@extends('layout.default')

@section('pageStyle')
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>

<!-- <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}"> -->
@endsection

@section('pageScript')
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

<!-- <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/js/owner.js') }}"></script> -->


@endsection

@section('content')
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    $('#table').dataTable();
    } );
    </script> 
    <style type="text/css" title="currentStyle">
        @import "/media/css/jquery.dataTables.css";
    </style>
<div class="panel">
    <div class="panel-heading">
        <h6 class="panel-title">Owner</h6>
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
                    <table id="table1" class="table ">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->id}}</td>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->username}}</td>
                                <td>{{$owner->primary_number}}</td>
                                <td>{{$owner->address}}</td>
                                <td>{{$owner->status}}</td>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                            </thead>
                            <tbody>
                                @foreach($owners as $row)
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->username}}</td>
                                    <td>{{$row->primary_number}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->status}}</td>
                                    <td><button class="btn btn-sm btn-primary">Edit</button></td>
                                @endforeach
                            </tbody>
                          <!--   <tfoot>
                            <tr id="col_filter">
                                <th class="apply_clear">S.No</th>
                                <th class="apply_search">Name</th>
                                <th class="apply_select">Username</th>
                                <th class="apply_search">Mobile</th>
                                <th class="apply_search">Address</th>
                                <th class="apply_select">Status</th>
                                <th class="">Action</th>
                            </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
