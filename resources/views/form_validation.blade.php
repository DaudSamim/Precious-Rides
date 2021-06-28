@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Parsley JS</h6>
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
                                <div class="icon ion-ios-americanfootball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Parsley JS</h5>
                                <div class="sm-inner-desc">
                                    Validate your forms, frontend, without writing a
                                    single line of javascript
                                    <a href="https://github.com/guillaumepotier/Parsley.js/"
                                       target="_blank">Learn more about Parsley</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal" data-parsley-validate="true"
                          name="demo-form">
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label"
                                   for="fullname">Full Name <span
                                        class="text-danger">*</span> :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="fullname"
                                       name="fullname" placeholder="Required"
                                       data-parsley-required="true"/>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="email">Email
                                <span class="text-danger">*</span> :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="email"
                                       name="email" data-parsley-type="email"
                                       placeholder="Email"
                                       data-parsley-required="true"/>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Gender
                                <span class="text-danger">*</span> :</label>
                            <div class="col-md-8 col-sm-8">
                                <div class="form-check">
                                    <div class="radio">
                                        <input type="radio" class="form-check-input"
                                               name="radiorequired" value="foo"
                                               id="radio-required"
                                               data-parsley-required="true"/>
                                        <label for="radio-required">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="radio">
                                        <input type="radio" class="form-check-input"
                                               name="radiorequired" id="radio-required2"
                                               value="bar"/>
                                        <label for="radio-required2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Hobbies (Optional, but 2 minimum) <span class="text-danger">*</span> :</label>
                            <div class="col-md-8 col-sm-8">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" class="form-check-input"
                                               id="mincheck" name="mincheck[]"
                                               data-parsley-mincheck="2" value="foo"
                                               required/>
                                        <label for="mincheck">
                                            Skiing
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input id="mincheck1" type="checkbox"
                                               class="form-check-input"
                                               name="mincheck[]" value="bar"/>
                                        <label for="mincheck1">
                                            Running
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="mincheck2"
                                               class="form-check-input"
                                               name="mincheck[]" value="baz"/>
                                        <label for="mincheck2">
                                            Eating
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Select Box
                                <span class="text-danger">*</span> :</label>
                            <div class="col-md-8 col-sm-8">
                                <select class="form-control" id="select-required"
                                        name="selectBox" data-parsley-required="true">
                                    <option value="">Please choose</option>
                                    <option value="foo">Foo</option>
                                    <option value="bar">Bar</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label"
                                   for="message">Description
                                :</label>
                            <div class="col-md-8 col-sm-8">
                                                                <textarea class="form-control" id="message"
                                                                          name="message" rows="4" required
                                                                          data-parsley-range="[20,200]"
                                                                          placeholder="Range from 20 - 200"></textarea>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-primary">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Parsley JS</h6>
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
                                <div class="icon ion-ios-americanfootball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Parsley JS</h5>
                                <div class="sm-inner-desc">
                                    Validate your forms, frontend, without writing a
                                    single line of javascript
                                    <a href="https://github.com/guillaumepotier/Parsley.js/"
                                       target="_blank">Learn more about Parsley</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form data-parsley-validate="true">
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Alpha
                                Please enter a palindrome <span class="text-danger">*</span>
                                :</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control" name="s" required="" data-parsley-palindrome="">
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Regular
                                Please enter a multiple of 3 <span class="text-danger">*</span>
                                :</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control" name="nb" required="" data-parsley-multiple-of="3">
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label">Regular
                                Please provide a file smaller than 42Kb <span class="text-danger">*</span>
                                :</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="file" name="f" required="" data-parsley-max-file-size="42">
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-danger">Validate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection