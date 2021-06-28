@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-editable/bootstrap-editable.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-editable/select2/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-editable/inputs-ext/typeahead.js') }}-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-editable/wysihtml5/bootstrap-wysihtml5-0.0.3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-editable/address/address.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mockjax/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/inputs-ext/typeahead.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/inputs-ext/typeaheadjs.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/wysihtml5/wysihtml5-0.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/wysihtml5/bootstrap-wysihtml5-0.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/wysihtml5/wysihtml5-0.0.3.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/address/address.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-editable/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/form_editable.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Form Xeditable</h6>
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
            <div style="float: right; margin-bottom: 10px">
                <label style="display: inline-block; margin-right: 10px"><input type="checkbox" id="autoopen"
                                                                                style="vertical-align: baseline">&nbsp;auto-open
                    next field</label>
                <button id="enable" class="btn btn-default">enable / disable</button>
            </div>
            <table id="user" class="table table-bordered table-striped" style="clear: both">
                <tbody>
                <tr>
                    <td style="width: 35%">Simple text field</td>
                    <td style="width: 65%"><a href="#" id="username" data-type="text" data-pk="1"
                                              data-title="Enter username">superuser</a></td>
                </tr>
                <tr>
                    <td>Empty text field, required</td>
                    <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right"
                           data-placeholder="Required" data-title="Enter your firstname"></a></td>
                </tr>
                <tr>
                    <td>Select, local array, custom display</td>
                    <td><a href="#" id="sex" data-type="select" data-pk="1" data-value=""
                           data-title="Select sex"></a></td>
                </tr>
                <tr>
                    <td>Select, remote array, no buttons</td>
                    <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5"
                           data-title="Select group">Admin</a></td>
                </tr>
                <tr>
                    <td>Select, error while loading</td>
                    <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0"
                           data-source="/status" data-title="Select status">Active</a></td>
                </tr>

                <tr>
                    <td>Datepicker</td>
                    <td>

                                <span class="notready">
                                    <a href="#" id="vacation" data-type="date"
                                       data-viewformat="dd.mm.yyyy" data-pk="1"
                                       data-placement="right"
                                       data-title="When you want vacation to start?">25.02.2013</a>
                                </span>

                    </td>
                </tr>
                <tr>
                    <td>Combodate (date)</td>
                    <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15"
                           data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY"
                           data-pk="1" data-title="Select Date of birth"></a></td>
                </tr>
                <tr>
                    <td>Combodate (datetime)</td>
                    <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm"
                           data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"
                           data-title="Setup event date and time"></a></td>
                </tr>

                <tr>
                    <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                    <td><a href="#" id="comments" data-type="textarea" data-pk="1"
                           data-placeholder="Your comments here..." data-title="Enter comments">awesome
                            user!</a></td>
                </tr>

                <tr>
                    <td>Twitter typeahead.js') }}</td>
                    <td><a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right"
                           data-title="Start typing State.."></a></td>
                </tr>

                <tr>
                    <td>Checklist</td>
                    <td><a href="#" id="fruits" data-type="checklist" data-value="2,3"
                           data-title="Select fruits"></a></td>
                </tr>

                <tr>
                    <td>Select2 (tags mode)</td>
                    <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html,
                            javascript</a></td>
                </tr>

                <tr>
                    <td>Select2 (dropdown mode)</td>
                    <td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS"
                           data-title="Select country"></a></td>
                </tr>

                <tr>
                    <td>Custom input, several fields</td>
                    <td><a href="#" id="address" data-type="address" data-pk="1"
                           data-title="Please, fill address"></a></td>
                </tr>

                <tr>
                    <td>Wysihtml5 (now support bootstrap 3 !!!). <a href="#" id="pencil"><i class="icon-pencil"
                                                                                            style="padding-right: 5px"></i>[edit]</a>
                    </td>
                    <td>
                        <div id="note" data-pk="1" data-type="wysihtml5" data-toggle="manual"
                             data-title="Enter notes" data-placement="top">
                            <h3>WYSIWYG</h3>
                            WYSIWYG means <i>What You See Is What You Get</i>.<br>
                            But may also refer to:
                            <ul>
                                <li>WYSIWYG (album), a 2000 album by Chumbawamba</li>
                                <li>"Whatcha See is Whatcha Get", a 1971 song by The Dramatics</li>
                                <li>WYSIWYG Film Festival, an annual Christian film festival</li>
                            </ul>
                            <i>Source:</i> <a href="http://en.wikipedia.org/wiki/WYSIWYG_%28disambiguation%29">wikipedia.org</a>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div>
                <h3>Console
                    <small>(all ajax requests here are emulated)</small>
                </h3>
                <div><textarea id="console" class="form-control" rows="8" style="width: 70%"
                               autocomplete="off"></textarea></div>
            </div>
        </div>
    </div>
@endsection