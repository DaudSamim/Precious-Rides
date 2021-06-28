@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Vehicle Master</h6>
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
                    <form id="validate" action="customer_master.html" data-parsley-validate="true">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Vehicle Model</label>
                                    <select id="model_list" class="form-control select_2" name="model_list[]">
                                        <option value="93" data-section="suv">Tempo traveller</option>
                                        <option value="90" data-section="sedan ac">Dzire non ac</option>
                                        <option value="91" data-section="sedan ac">Dzire ac</option>
                                        <option value="78" data-section="sedan ac" selected="">Etios AC</option>
                                        <option value="67" data-section="hatch back" selected="">bpl</option>
                                        <option value="84" data-section="hatch back" selected="">Innova AC</option>
                                        <option value="83" data-section="hatch back" selected="">Enjoy AC</option>
                                        <option value="82" data-section="hatch back" selected="">Renault Lodgy</option>
                                        <option value="80" data-section="hatch back" selected="">XYLO AC</option>
                                        <option value="79" data-section="sedan ac" selected="">Hyundai Xcent</option>
                                        <option value="77" data-section="sedan ac" selected="">Dzire AC</option>
                                        <option value="65" data-section="sedan ac" selected="">Aspire</option>
                                        <option value="81" data-section="hatch back" selected="">Tavera AC</option>
                                        <option value="75" data-section="mini ac" selected="">Beat</option>
                                        <option value="88" data-section="mini ac" selected="">Beat NonAC</option>
                                        <option value="87" data-section="mini ac" selected="">Indica NonAC</option>
                                        <option value="86" data-section="mini ac" selected="">Indigo Xest</option>
                                        <option value="89" data-section="mini ac" selected="">Indica non ac</option>
                                        <option value="85" data-section="mini ac" selected="">INDIGO AC</option>
                                        <option value="76" data-section="mini ac" selected="">INDIGO NonAC</option>
                                        <option value="74" data-section="mini ac" selected="">Maruti Ritz</option>
                                        <option value="73" data-section="mini ac" selected="">Indica AC</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">IMEI Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Registration No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Vehicle No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Vehicle Owner</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Payment Type</label>
                                    <select class="form-control _validate required select_2">
                                        <option value="hatch back">Prepaid</option>
                                        <option value="hatchback non ac">Postpaid</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Rent Type</label>
                                    <select class="form-control _validate required select_2">
                                        <option value="hatch back">Fixed</option>
                                        <option value="hatchback non ac">Percentage</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">FC Due</label>
                                    <input type="text" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">IC Due</label>
                                    <input type="text" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Km Reading</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Current Driver</label>
                                    <select class="form-control select_2">
                                        <option value="172">902</option>
                                        <option value="198">123</option>
                                        <option value="149" selected>817</option>
                                        <option value="165">637</option>
                                        <option value="98">602</option>
                                        <option value="153">811</option>
                                        <option value="176">447</option>
                                        <option value="87">459</option>
                                        <option value="186">815</option>
                                        <option value="143">645</option>
                                        <option value="174">403</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Default Driver</label>
                                    <select class="form-control select_2">
                                        <option value="172">902</option>
                                        <option value="198">123</option>
                                        <option value="149" selected>817</option>
                                        <option value="165">637</option>
                                        <option value="98">602</option>
                                        <option value="153">811</option>
                                        <option value="176">447</option>
                                        <option value="87">459</option>
                                        <option value="186">815</option>
                                        <option value="143">645</option>
                                        <option value="174">403</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group m-h-61">
                                    <label class="control-label w-in-100 required">Used App</label>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                               checked="">
                                        <label for="inlineRadio1"> Yes </label>
                                    </div>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                        <label for="inlineRadio2"> No </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Status</label>
                                    <select class="form-control select_2">
                                        <option value="active">Active</option>
                                        <option value="in-active">In-Active</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label w-in-100 invisible">Submit</label>
                                    <button type="submit" class="btn btn-dark m-r-5 m-b-5 ladda-button"
                                            data-color="mint" data-style="expand-right" data-size="l"><span
                                                class="ladda-label">Submit</span><span class="ladda-spinner"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection