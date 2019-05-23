@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Edit Driver
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <!--end of page level css-->
    
    <!-- Pic and date Css -->
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link href="{{ asset('assets/css/pages/blog.css') }}" rel="stylesheet" type="text/css">


@stop

{{-- breadcrumb --}}
@section('top')
    <div style="background-color: ##68d8bb" class="breadcum">
        <div  class="container">
          <ol class="breadcrumb right_float">
            <li>
              <a href="{{ route('home') }}"> 
                <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d">
                </i>Dashboard
              </a>
            </li>
            <li class="hidden-xs">
              <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c">
              </i>
              <a href="#">Driver
              </a>
            </li>
            <li class="hidden-xs">
              <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c">
              </i>
              <a href="#">Edit Driver
              </a>
            </li>
          </ol>
        </div>
    </div>  
@stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Strat -->
    <div class="container">
        <h2> Edit Driver
        </h2>
        <hr>
        <div class="row margin_right_left">
          <div class="row margin_right_left">
            <div class="col-md-12">
              <!--main content-->
              <div class="position-center">
                <div class="row">
                  <div class="col-sm-8">
                    {!! Form::model($driver, ['url' => URL::to('driver/' . $driver->id), 'method' => 'put',
                      'class' => 'form-horizontal', 'files'=> true]) !!}

                      <!-- CSRF Token -->
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="row"> 
                          <div class="col-sm-8 animate_rt"> 

                            <div class="form-group {{ $errors->first('driver_number', 'has-error') }}">
                              <label for="driver_number" class="col-sm-2 control-label">
                                <strong>Driver Number *</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('driver_number', null, array('class' => 'form-control required', 'placeholder'=>'gender')) !!}
                                {!! $errors->first('driver_number', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                              <label style="margin-top: -1%" for="first_name" class="col-sm-2 control-label">
                                  <strong>First Name*</strong>
                              </label>
                              <div class="col-sm-10">
                                {!! Form::text('first_name', null, array('class' => 'form-control required', 'placeholder'=>'first name')) !!}
                                {!! $errors->first('first_name', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                              <label style="margin-top: -1%" for="last_name" class="col-sm-2 control-label">
                                  <strong>Second Name *</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('last_name', null, array('class' => 'form-control required', 'placeholder'=>'Second Name')) !!}
                                {!! $errors->first('last_name', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('third_name', 'has-error') }}">
                              <label style="margin-top: -1%" for="third_name" class="col-sm-2 control-label">
                                  <strong>Third Name *</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('third_name', null, array('class' => 'form-control required', 'placeholder'=>'Third Name')) !!}
                                {!! $errors->first('third_name', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                              <label for="email" class="col-sm-2 control-label">
                                  <strong>Email *</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('email', null, array('class' => 'form-control required', 'placeholder'=>'email')) !!}
                                {!! $errors->first('email', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('license_number', 'has-error') }}">
                              <label for="license_number" class="col-sm-2 control-label">
                                  <strong>License Number *</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('license_number', null, array('class' => 'form-control required', 'placeholder'=>'license number')) !!}
                                {!! $errors->first('license_number', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>

                            <div class="form-group {{ $errors->first('ph_number', 'has-error') }}">
                              <label style="margin-top: -3%" for="ph_number" class="col-sm-2 control-label">
                                  <strong>Phone No.*</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('ph_number', null, array('class' => 'form-control required', 'placeholder'=>'phone number')) !!}
                                {!! $errors->first('ph_number', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4 btn_rtl">
                                        <a href="{{ route('user.driver.index') }}">
                                            <button type="button" class="btn btn-danger">
                                              Cancel 
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-success">
                                            @lang('button.save')
                                        </button>
                                    </div>
                            </div>
                          </div>
                          <div class="col-sm-4 animate_rt">     
    
                            <div class="form-group {{ $errors->first('address', 'has-error') }}">
                              <label style="margin-left: -3" for="address" class="col-sm-2 control-label">
                                  <strong>ADRSS</strong>
                              </label>
                              <div style="margin-left: 0%" class="col-sm-10">
                                    {!! Form::text('address', null, array('class' => 'form-control required', 'placeholder'=>'address')) !!}
                                {!! $errors->first('address', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                              <label for="dob" class="col-sm-2 control-label">
                                  <strong>DOB</strong>
                              </label>
                              <div class="col-sm-10">
                                    {!! Form::text('dob', null, array('id' => 'dob','class' => 'form-control required', 'data-date-format' => 'YYYY-MM-DD')) !!}
                                {!! $errors->first('dob', '
                                <span class="help-block">:message
                                </span>') !!}
                              </div>
                            </div>
    
                            <div class="form-group {{ $errors->first('pic', 'has-error') }}">
                                <label class="control-label col-xs-12"></label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                        @if(!empty($driver->pic))
    
                                            {{-- <img src="{{URL::to('storage/driver/'.$driver->pic)}}" class="img-responsive"
                                                  alt="Image"> --}}
                                            
                                            <img src="{{ asset('storage/driver/'.$driver->pic) }}" alt="picture"
                                                  class="img-responsive"/>
                                        @else
                                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                  class="img-responsive"/>
                                        @endif
    
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                          style="max-width: 200px; max-height: 150px;"></div>
                                    <div> 
                                      {!! Form::file('pic', array('name'=> 'pic', 'class' => 'btn btn-primary', 'id' => 'pic')) !!}
                                      <span  style="margin-top: 3%"  class="btn btn-primary fileinput-exists"
                                            data-dismiss="fileinput">
                                          Remove
                                      </span>
                                    </div>
                                </div>
                                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                            </div>
                                
                          </div>
                        </div>
                      
                    </form>{{--{!!  Form::close()  !!}--}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      
@stop 

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    {{-- Pic and Date Script --}}
    <script src="{{ asset('assets/vendors/summernote/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/add_newblog.js') }}"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/add_newblog.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/parsley.min.js') }}" type="text/javascript"></script>
  
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script> 
@stop