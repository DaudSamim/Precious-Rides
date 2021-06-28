@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/bootstrap-duallistbox/bootstrap-duallistbox.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js') }}"></script>
    <script src="{{ asset('assets/js/any_vehicle.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Any Vehicle</h6>
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
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>Select Vehicle</label>
                            <select id="model_list" name="model_list[]" multiple>
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
                        <button type="submit" class="btn btn-sm btn-success pull-right m-r-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection