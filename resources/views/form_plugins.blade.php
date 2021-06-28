@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/ionRangeSlider/css/ion.rangeSlider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/nouislider/js/nouislider.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/typeaheadjs.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-duallistbox/bootstrap-duallistbox.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/masked-input/masked-input.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/form_plugins.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Date Picker</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-printer-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bootstrap Datepicker</h5>
                                <div class="sm-inner-desc">
                                    A datepicker for twitter bootstrap
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about
                                        bootstrap-datepicker</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Add <code>.date_picker</code> class to initialize default datepicker.</p>
                        <div class="form-group">
                            <label>Default Date Picker</label>
                            <input type="text" class="form-control date_picker"
                                   placeholder="Default Date Picker">
                        </div>

                        <div class="form-group">
                            <label>Component Date Picker</label>
                            <div class="input-group date date_picker">
                                <input type="text" class="form-control" placeholder="Component Date Picker"/>
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                            </div>
                        </div>

                        <p>Add <code>.daterange_picker</code> class to initialize Date Range picker.</p>
                        <div class="form-group">
                            <label>Date Range Picker</label>
                            <div class="input-group input-daterange daterange_picker">
                                <input type="text" class="form-control" name="start" placeholder="Date Start"/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" name="end" placeholder="Date End"/>
                            </div>
                        </div>

                        <p>Add <code>.format_date_picker</code> class to initialize formated datepicker.</p>
                        <div class="form-group">
                            <label>Format Date</label>
                            <input type="text" class="form-control format_date_picker"
                                   placeholder="Format dd/mm/yyyy">
                        </div>

                        <p>Add <code>.date_picker_disable_future</code> class to initialize datepicker with
                            Disabled
                            Future Dates.</p>
                        <div class="form-group">
                            <label>Disable Future Dates</label>
                            <input type="text" class="form-control date_picker_disable_future"
                                   placeholder="Disable Future Dates">
                        </div>

                        <p>Add <code>.date_picker_disable_past</code> class to initialize datepicker with
                            Disabled
                            Past Dates.</p>
                        <div class="form-group">
                            <label>Disable Past Dates</label>
                            <input type="text" class="form-control date_picker_disable_past"
                                   placeholder="Disable Past Dates">
                        </div>

                        <p>Add <code>.date_picker_start_view</code> class to initialize datepicker with Year
                            View.
                        </p>
                        <div class="form-group">
                            <label>Start view</label>
                            <input type="text" class="form-control date_picker_start_view"
                                   placeholder="Start view">
                        </div>

                        <p>Add <code>.date_picker_clear</code> class to initialize datepicker with Disabled Past
                            Dates.</p>
                        <div class="form-group">
                            <label>Clear button</label>
                            <input type="text" class="form-control date_picker_clear"
                                   placeholder="Clear button">
                        </div>

                        <p>Add <code>.date_picker_multidate</code> class to initialize datepicker with Multi
                            Date.
                        </p>
                        <div class="form-group">
                            <label>Multi Date</label>
                            <input type="text" class="form-control date_picker_multidate"
                                   placeholder="Multi Date">
                        </div>

                        <p>Add <code>.date_picker_calendarweeks</code> class to initialize datepicker with
                            Calendar.
                        </p>
                        <div class="form-group">
                            <label>Calendar weeks</label>
                            <input type="text" class="form-control date_picker_calendarweeks"
                                   placeholder="Calendar weeks">
                        </div>

                        <p>Add <code>.date_inline</code> class to initialize datepicker with Inline.</p>
                        <div class="form-group">
                            <label>Inline Date Picker</label>
                            <div class="date_inline"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Clipboard JS</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-analytics-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Clipboard JS</h5>
                                <div class="sm-inner-desc">
                                    Modern copy to clipboard. No Flash. Just 3kb
                                    gzipped.
                                    <a href="https://github.com/zenorocha/clipboard.js') }}" target="_blank">Learn more about clipboard js</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Default</label>
                        <div>
                            <div class="input-group">
                                <input id="clipboard-default" type="text"
                                       class="form-control"
                                       value="https://github.com/zenorocha/clipboard.js') }}.git"/>
                                <span class="input-group-btn">
                                                                        <button class="btn btn-primary" type="button"
                                                                                data-clipboard-target="#clipboard-default"><i
                                                                                    class="fa fa-clipboard text-white"></i></button>
                                                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cut to copy</label>
                        <div>
                                                                <textarea class="form-control m-b-10"
                                                                          id="clipboard-textarea" rows="7">Modern copy to clipboard. No Flash. Just 3kb gzipped....</textarea>
                            <button class="btn btn-primary btn-sm" type="button"
                                    data-clipboard-target="#clipboard-textarea"
                                    data-clipboard-action="cut">Cut to clipboard
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Without Form</label>
                        <div>
                            <button class="btn btn-primary btn-sm" type="button"
                                    data-clipboard-text="Just because you can doesn't mean you should — clipboard.js') }}">
                                Click to copy
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">IonRangeSlider</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-star-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">IonRangeSlider</h5>
                                <div class="sm-inner-desc">
                                    Ion.RangeSlider. Is an easy, flexible and responsive
                                    range slider with tons of options.
                                    <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank">Learn more about
                                        IonRangeSlider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Default</label>
                        <div>
                            <input type="text" id="default_rangeSlider"
                                   name="default_rangeSlider" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Custom Range</label>
                        <div>
                            <input type="text" id="customRange_rangeSlider"
                                   name="default_rangeSlider" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Custom Values</label>
                        <div>
                            <input type="text" id="customValue_rangeSlider"
                                   name="default_rangeSlider" value=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">noUiSlider</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-unlocked-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">noUiSlider</h5>
                                <div class="sm-inner-desc">
                                    noUiSlider is a lightweight JavaScript range slider
                                    library. It offers a wide selection of options and
                                    settings, and is compatible with a ton of (touch)
                                    devices
                                    <a href="https://github.com/leongersen/noUiSlider" target="_blank">Learn more about noUiSlider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Single slider</label>
                        <div class="input-slider-container">
                            <div id="input-slider" class="input-slider"
                                 data-range-value-min="100"
                                 data-range-value-max="500"></div>
                            <span id="input-slider-value"
                                  class="range-slider-value"
                                  data-range-value-low="300"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Range slider</label>
                        <div class="range-slider-wrapper mb-4">
                            <div id="input-slider-range"
                                 data-range-value-min="100"
                                 data-range-value-max="500"></div>
                            <div class="row">
                                <div class="col-md-6">
                                                                        <span class="range-slider-value value-low"
                                                                              data-range-value-low="200"
                                                                              id="input-slider-range-value-low"></span>
                                </div>
                                <div class="col-md-6 text-right">
                                                                        <span class="range-slider-value value-high"
                                                                              data-range-value-high="400"
                                                                              id="input-slider-range-value-high"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">DateTime Picker</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-timer-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">DateTime Picker</h5>
                                <div class="sm-inner-desc">
                                    Both Date and Time picker widget based on twitter
                                    bootstrap
                                    <a href="https://github.com/smalot/bootstrap-datetimepicker" target="_blank">Learn more about
                                        bootstrap-datetimepicker</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Add <code>.date_time_picker</code> class to initialize default DateTime Picker.</p>
                    <div class="form-group">
                        <label>Default DateTime Picker</label>
                        <input type="text" class="form-control date_time_picker"
                               placeholder="Default DateTime Picker">
                    </div>

                    <p>Add <code>.time_picker</code> class to initialize default Time Picker.</p>
                    <div class="form-group">
                        <label>Default Time Picker</label>
                        <input type="text" class="form-control time_picker"
                               placeholder="Default Time Picker">
                    </div>

                    <p>Add <code>.positioning_time_picker</code> class to initialize default Time Picker.</p>
                    <div class="form-group">
                        <label>Positioning Time Picker</label>
                        <input type="text" class="form-control positioning_time_picker"
                               placeholder="Positioning Time Picker">
                    </div>

                    <p>Add <code>.date_time_mirror_field</code> class to initialize Mirror Field.</p>
                    <div class="form-group">
                        <label>Mirror Field</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control date_time_mirror_field"
                                       placeholder="Mirror Field">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="mirror_field" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <p>Add <code>.date_time_inline</code> class to initialize default inline DateTime Picker.
                    </p>
                    <div class="form-group">
                        <label>Inline DateTime Picker</label>
                        <div class="date_time_inline"></div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Select 2</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-reverse-camera-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Select2</h5>
                                <div class="sm-inner-desc">
                                    Select2 is a jQuery based replacement for select
                                    boxes. It supports searching, remote data sets, and
                                    infinite scrolling of results.
                                    <a href="https://github.com/select2/select2" target="_blank">Learn more about Select2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Add <code>.select_2</code> class to initialize default Select2.</p>
                    <div class="form-group">
                        <label>Default</label>
                        <select class="js-states form-control select_2" id="select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <p>Add <code>.select_2_multiple</code> class to initialize Select2.</p>
                    <div class="form-group">
                        <label>Multiple Select</label>
                        <select class="js-states form-control select_2_multiple" name="states[]"
                                multiple="multiple"
                                id="select2_multiple">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <p>Add <code>.select_2_search_starts</code> class to initialize Select2.</p>
                    <div class="form-group">
                        <label>Search Letters Start with typing</label>
                        <select class="js-states form-control select_2_search_starts" name="states[]"
                                id="select2_multipled">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>

                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>

                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>

                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>

                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </select>
                    </div>

                    <p>Add <code>.select_2_limit</code> class to initialize default Select2.</p>
                    <div class="form-group">
                        <label>Limiting the number of selections to 2</label>
                        <select class="js-states form-control select_2_limit" name="states[]"
                                multiple="multiple">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <p>Add <code>.select_2_clear</code> class to initialize default Select2.</p>
                    <div class="form-group">
                        <label>Clearable selections</label>
                        <select class="js-states form-control select_2_clear" name="states[]">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <p>Add <code>.select_2_hide_search</code> class to initialize default Select2.</p>
                    <div class="form-group">
                        <label>Hiding the search box</label>
                        <select class="js-states form-control select_2_hide_search" name="states[]">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bootstrap Select</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-reverse-camera-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bootstrap Select</h5>
                                <div class="sm-inner-desc">
                                    The jQuery plugin that brings select elements into the 21st century with intuitive multiselection, searching, and much more. Now with Bootstrap 4 support.
                                    <a href="https://github.com/snapappointments/bootstrap-select/" target="_blank">Learn more about Bootstrap Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Default</label>
                        <select class="selectpicker form-control" id="bootstrap_select">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Multiple Select</label>
                        <select class="form-control selectpicker" name="states[]"
                                multiple="multiple">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Live search</label>
                        <select class="selectpicker form-control" name="states[]"
                                multiple="multiple"
                                data-live-search-placeholder="Search"
                                data-live-search="true"
                                id="limiting">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Limit the number of selections</label>
                        <select class="selectpicker form-control" name="states[]"
                                multiple="multiple"
                                data-max-options="2"
                        >
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Placeholder</label>
                        <select class="selectpicker form-control" name="states[]"
                                multiple="multiple"
                                title="Choose one of the following...">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Selected text</label>
                        <select class="selectpicker form-control">
                            <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                            <option title="Combo 2">Burger, Shake and a Smile</option>
                            <option title="Combo 3">Sugar, Spice and all things nice
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Selected text format</label>
                        <select class="selectpicker form-control" multiple
                                data-selected-text-format="count">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subtext</label>
                        <select class="selectpicker form-control" multiple>
                            <option data-subtext="Heinz">Mustard</option>
                            <option data-subtext="Heinz">Ketchup</option>
                            <option data-subtext="Heinz">Relish</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <select class="selectpicker form-control"
                                data-header="Select a condiment">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Disabled</label>
                        <select disabled class="selectpicker form-control"
                                data-header="Select a condiment">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Styling</label>
                        <select class="selectpicker form-control" multiple
                                data-style="btn-primary">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Styling</label>
                        <select class="selectpicker form-control" multiple
                                data-style="btn-purple">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Styling</label>
                        <select class="selectpicker form-control" multiple
                                data-style="btn-info">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Date Range Picker</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-calendar-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Date Range Picker</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://github.com/dangrossman/daterangepicker" target="_blank">Learn more about Date Range
                                        Picker</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Add <code>.date_range_picker</code> class to initialize default Date Range Picker.</p>
                    <div class="form-group">
                        <label>Default Date Range Picker</label>
                        <div class="input-group date_range_picker">
                            <input type="text" name="default-daterange" class="form-control" value=""
                                   placeholder="Default Date Range"/>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-calendar text-white"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <p>Add <code>.advance_daterange</code> class to initialize Date Range Picker.</p>
                    <div class="form-group">
                        <label>Advance Date Range Picker</label>
                        <div class="btn btn-primary btn-block advance_daterange">
                            <span></span>
                            <i class="fa fa-angle-down fa-fw text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Color Picker</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-body-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bootstrap Colorpicker</h5>
                                <div class="sm-inner-desc">
                                    Simple and customizable colorpicker component for
                                    jQuery, which is also compatible with Bootstrap.
                                    <a href="https://github.com/farbelous/bootstrap-colorpicker" target="_blank">Learn more about Bootstrap
                                        Colorpicker</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Default</label>
                        <input class="form-control color_picker" type="text" id="default">
                    </div>

                    <div class="form-group">
                        <label>Initial color</label>
                        <div id="cp2" class="input-group colorpicker-component"
                             title="Using input value">
                            <input type="text" class="form-control" value="#4076e0"/>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Format</label>
                        <div id="format" class="input-group colorpicker-component"
                             title="Using input value">
                            <input type="text" class="form-control" value="#4076e0"/>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Horizontal mode</label>
                        <div id="horizontal" class="input-group colorpicker-component"
                             title="Using input value">
                            <input type="text" class="form-control" value="#4076e0"/>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Disable alpha channel</label>
                        <div id="alpha" class="input-group colorpicker-component"
                             title="Using input value">
                            <input type="text" class="form-control" value="#4076e0"/>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Disable hexadecimal hash</label>
                        <div id="hash" class="input-group colorpicker-component"
                             title="Using input value">
                            <input type="text" class="form-control" value="#4076e0"/>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Title</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-barcode-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Masked Input</h5>
                                <div class="sm-inner-desc">
                                    This is a masked input plugin for the jQuery
                                    javascript library. It allows a user to more easily
                                    enter fixed width input where you would like them to
                                    enter the data in a certain format.
                                    <a href="https://github.com/digitalBush/jquery.maskedinput" target="_blank">Learn more about Masked Input</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Date</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-date" placeholder="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Time</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-time" placeholder="hh:mm:ss"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Date Time</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-datetime"
                                   placeholder="MM/DD/YYY hh:mm:ss"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Phone</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-phone"
                                   placeholder="(999) 999-9999"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Tax ID</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-tid" placeholder="99-9999999"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Product Key</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-pkey"
                                   placeholder="a*-999-a999"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">SSN</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-ssn" placeholder="999/99/9999"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">SSN</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-pno" placeholder="AAA-9999-A"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Card</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-card"
                                   placeholder="0000-0000-0000-0000"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">IP</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"
                                   id="masked-input-ip"
                                   placeholder="000.000.000.000"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Jquery UI Autocomplete</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-speedometer-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Jquery UI Autocomplete</h5>
                                <div class="sm-inner-desc">
                                    Enables users to quickly find and select from a
                                    pre-populated list of values as they type,
                                    leveraging searching and filtering.
                                    <a href="https://jqueryui.com/autocomplete/ " target="_blank">Autocomplete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Autocomplete</label>
                        <input type="text" id="jquery-autocomplete"
                               class="form-control"
                               placeholder="Try typing 'a' or 'b'."/>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bootstrap Tags</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-cloud-download-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Tag-it: a jQuery UI
                                    plugin</h5>
                                <div class="sm-inner-desc">
                                    Tag-it is a simple and configurable tag editing
                                    widget with autocomplete support.
                                    <a href="https://github.com/aehlke/tag-it" target="_blank">Learn more about Tag-it</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Markup</h5>
                        <p>Just add <code>data-role="tagsinput"</code> to your input field to automatically
                            change
                            it to a tags input field.</p>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   value="Amsterdam,Washington,Sydney,Beijing,Cairo"
                                   data-role="tagsinput"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Typeahead</h5>
                        <p>
                            Typeahead is not included in Bootstrap 3, so you'll have to include your own
                            typeahead
                            library. I'd recommed <a href="http://twitter.github.io/typeahead.js') }}/"
                                                     target="_blank">typeahead.js') }}</a>.
                            An example of using this is shown below.
                        </p>
                        <div class="form-group">
                            <input type="text" value="Amsterdam,Washington" class="typeaheadjs form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Categorizing tags</h5>
                        <p>
                            You can set a fixed css class for your tags, or determine dynamically by providing a
                            custom function.
                        </p>
                        <div class="form-group">
                            <input type="text" class="example_tagclass"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>True multi value</h5>
                        <p>
                            Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input,
                            to
                            gain true multivalue support. Instead of a comma separated string, the values will
                            be
                            set in an array. Existing <code>&lt;option /&gt;</code> elements will automatically
                            be
                            set as tags. This makes it also possible to create tags containing a comma.
                        </p>
                        <div class="form-group">
                            <select multiple data-role="tagsinput" class="form-control">
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Washington">Washington</option>
                                <option value="Sydney">Sydney</option>
                                <option value="Beijing">Beijing</option>
                                <option value="Cairo">Cairo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Objects as tags</h5>
                        <p>
                            Instead of just adding strings as tags, bind objects to your tags. This makes it
                            possible to set id values in your input field's value, instead of just the tag's
                            text.
                        </p>
                        <div class="form-group">
                            <input type="text" class="example_objects_as_tags"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bootstrap Dual Listbox</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-timer-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bootstrap Dual Listbox</h5>
                                <div class="sm-inner-desc">
                                    Bootstrap Dual Listbox is a responsive dual listbox
                                    widget optimized for Twitter Bootstrap. It works on
                                    all modern browsers and on touch devices.
                                    <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox" target="_blank">Learn more about
                                        bootstrap-duallistbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="duallistbox" class="duallistbox" action="#" method="post">
                        <select multiple="multiple" size="10" name="duallistbox_demo1[]">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3" selected="selected">Option 3</option>
                            <option value="option4">Option 4</option>
                            <option value="option5">Option 5</option>
                            <option value="option6" selected="selected">Option 6</option>
                            <option value="option7">Option 7</option>
                            <option value="option8">Option 8</option>
                            <option value="option9">Option 9</option>
                            <option value="option0">Option 10</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm pull-right">Submit data</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bootstrap Dual Listbox</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-cloud-download-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Dropzone</h5>
                                <div class="sm-inner-desc">
                                    DropzoneJS is an open source library that provides
                                    drag’n’drop file uploads with image previews.
                                    <a href="http://www.dropzonejs.com/"
                                       target="_blank">Learn more about Dropzone</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="index.html" class="dropzone" id="dropzone_demo">
                        <div class="dz-message needsclick">
                            Drop files here or click to upload.
                            <br>
                            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection