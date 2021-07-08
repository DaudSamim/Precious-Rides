@extends('layout.default')

@section('content')
    <div class="row">
    @if(Session::has('info'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('info') }}</p>
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ $error }}</p>
        @endforeach
        @endif    

    <form  action="/add-vehicle-type-fare" method="post">

        <div class="col-md-12 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Vehicle Type And Fares</h6>
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
                    

                    <form action="index.html" method="post">
                        <div class="row m-b-15">
                            <div class="col-lg-6 sm-form-design">
                                <input type="text" name="name" id="cf_name"
                                       class="form-control"
                                       placeholder="NAME" value=""
                                       tabindex="1" maxlength="35" name="name"
                                       required>
                                <label class="control-label">NAME</label>
                            </div>
                            <div class="col-lg-6 sm-form-design res-xs-m-t-16 res-md-m-t-16">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Fare Rate" name="fare">
                                <label class="control-label">Fare Rate</label>
                            </div>
                            
                        </div>
                        
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                                            <textarea  id="cf_message" name="description"
                                                                      class="form-control" cols="30" rows="3"
                                                                      placeholder="Description"
                                                                      tabindex="4"></textarea>
                                <label class="control-label">Description</label>
                            </div>
                        </div>
                        
                        <div class="row m-b-15">
                            <div class="col-lg-12">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <button class="btn btn-primary pull-right" type="submit">Submit Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </form>  

        

        
    </div>
@endsection