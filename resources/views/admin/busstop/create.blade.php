@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    {{-- @lang('news/title.add-news') :: @parent --}}
    Add Bus Stop
@stop

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/css/pages/blog.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
  <!--end of page level css-->
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
      <!--section starts-->
      <h1>Add New Bus Stop</h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14"
                                                          data-c="#000" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Bus Stop</a>
        </li>
        <li class="active">Add New Bus Stop</li>
      </ol>
    </section>
    <!--section ends-->

    <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true">
                      </i>
                      Add New Bus Stop
                    </h3>
                    <span class="pull-right clickable">
                      <i class="glyphicon glyphicon-chevron-up">
                      </i>
                    </span>
                  </div>
                  <div class="panel-body">
                    <!--main content-->
                    <form id="commentForm" action="{{ route('admin.busstop.store') }}"
                          method="POST" class="form-horizontal">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                          <div id="rootwizard">
                            <h2 class="hidden">&nbsp;</h2>

                            <div class="form-group {{ $errors->first('bstop_num', 'has-error') }}">
                              <label for="bstop_num" class="col-sm-2 control-label">Bus Stop Number *
                              </label>
                              <div class="col-sm-10">
                                <input id="bstop_num" name="bstop_num" placeholder="Bus Stop Number" type="text"
                                        class="form-control required " value="{!! old('bstop_num') !!}"/>
                                {!! $errors->first('bstop_num', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
                            
                            <div class="form-group {{ $errors->first('name', 'has-error') }}">
                              <label for="name" class="col-sm-2 control-label">Name *
                              </label>
                              <div class="col-sm-10">
                                <input id="name" name="name" type="text"
                                        placeholder="Name" class="form-control required"
                                        value="{!! old('name') !!}"/>
                                {!! $errors->first('name', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('latitude', 'has-error') }}">
                              <label for="latitude" class="col-sm-2 control-label">Latitude *
                              </label>
                              <div class="col-sm-10">
                                <input id="latitude" name="latitude" type="text" placeholder="Latitude"
                                        class="form-control required" value="{!! old('latitude') !!}"/>
                                {!! $errors->first('latitude', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('longitude', 'has-error') }}">
                              <label for="longitude" class="col-sm-2 control-label">Longitude *
                              </label>
                              <div class="col-sm-10">
                                <input id="longitude" name="longitude" placeholder="Longitude" type="text"
                                        class="form-control required email" value="{!! old('longitude') !!}"/>
                                {!! $errors->first('longitude', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('user_id', 'has-error') }}">
                              <label for="user_id" class="col-sm-2 control-label">User Id *
                              </label>
                              <div class="col-sm-10">
                                <input id="user_id" name="user_id" placeholder="User Id" type="text"
                                        class="form-control required " value="{!! old('user_id') !!}"/>
                                {!! $errors->first('user_id', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('route_id', 'has-error') }}">
                              <label for="route_id" class="col-sm-2 control-label">Route Id *
                              </label>
                              <div class="col-sm-10">
                                <input id="user_id" name="route_id" placeholder="Route Id" type="text"
                                        class="form-control required " value="{!! old('route_id') !!}"/>
                                {!! $errors->first('route_id', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('station_id', 'has-error') }}">
                              <label for="station_id" class="col-sm-2 control-label">Station Id *
                              </label>
                              <div class="col-sm-10">
                                <input id="station_id" name="station_id" placeholder="Station Id" type="text"
                                        class="form-control required " value="{!! old('station_id') !!}"/>
                                {!! $errors->first('station_id', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4 btn_rtl">
                                        <a class="btn btn-danger" href="{{ route('admin.busstop.index') }}">
                                            @lang('button.cancel')
                                        </a>
                                        <button type="submit" class="btn btn-success">
                                            @lang('button.save')
                                        </button>
                                    </div>
                            </div>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        <!--row end-->
    </section>
 
@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!--edit blog-->
    <script src="{{ asset('assets/vendors/summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    {{--<script src="{{ asset('assets/vendors/bootstrap-tagsinput/bootstrap-tagsinput.js') }}" type="text/javascript"></script>--}}
    <script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/add_newblog.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script>

@stop