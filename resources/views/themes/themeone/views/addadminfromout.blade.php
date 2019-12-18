@extends('layout')
@section('content')
<section class="site-content">
<div class="container">
    <div class="breadcum-area">
        <div class="breadcum-inner">
            <h3>@lang('website.singasseller')</h3>
            <ol class="breadcrumb">
                
                <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
                <li class="breadcrumb-item active">@lang('website.Login/Register')</li>
            </ol>
        </div>
    </div>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ trans('website.singasseller') }} </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-lg-12">
              		<div class="box box-info">
                        <br>                       
                       	
                        @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        
                        @if(session()->has('errorMessage'))
                            <div class="alert alert-danger" role="alert">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ session()->get('errorMessage') }}
                            </div>
                        @endif
                        
                        <!-- form start -->                        
                         <div class="box-body">
                            {!! Form::open(array('url' =>'signupAsSeller/addnewadmin', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                            <div class="form-group">
                             
                            <h4>{{ trans('labels.Personal Info') }} </h4>
                            <hr> 
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FirstName') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('first_name',  '', array('class'=>'form-control field-validate', 'id'=>'first_name')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FirstNameText') }}</span>
                                    <!-- <span class="help hidden">{{ trans('labels.textRequiredFieldMessage') }}</span> -->
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.LastName') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('last_name',  '', array('class'=>'form-control field-validate', 'id'=>'last_name')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.lastNameText') }}</span>
                                    <!-- <span class="help hidden">{{ trans('labels.textRequiredFieldMessage') }}</span> -->
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Telephone') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('phone',  '', array('class'=>'form-control', 'id'=>'phone')) !!}
                                   <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                   {{ trans('labels.TelephoneText') }}</span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Picture') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('newImage', array('id'=>'newImage')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.PictureText') }}</span>
                                    <br>
                                  </div>
                                </div>
                            <hr>
                            <h4>{{ trans('labels.AddressInfo') }}</h4>
                            <hr>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.StreetAddress') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('address',  '', array('class'=>'form-control', 'id'=>'address')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.StreetAddressText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Zip/Postal Code') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('zip',  '', array('class'=>'form-control', 'id'=>'zip')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Zip/Postal Code Text') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.City') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('city',  '', array('class'=>'form-control', 'id'=>'city')) !!}
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CityText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Country') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    <select class="form-control" name="country" id="entry_country_id">
                                        <option value="">{{ trans('labels.SelectCountry') }}</option>
                                        @foreach($result['countries'] as $countries_data)
                                        <option value="{{ $countries_data->countries_id }}">{{ $countries_data->countries_name }}</option>
                                   		@endforeach
                                    </select>
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CountryText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.State') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                   <select class="form-control zoneContent" name="state">		
                                      <option value="">{{ trans('labels.SelectState') }}</option>									 
                                   </select>
                                    <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.StateText') }}</span>
                                  </div>
                                </div>
                                
                                
                                
                                
                                
                                <hr>
                                <h4>{{ trans('labels.Login Info') }}</h4>
                                <hr>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.EmailAddress') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('email',  '', array('class'=>'form-control email-validate', 'id'=>'email')) !!}
                                     <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                     {{ trans('labels.EmailText') }}</span>
                                    <!-- <span class="help hidden"> {{ trans('labels.EmailError') }}</span> -->
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Password') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::password('password', array('class'=>'form-control field-validate', 'id'=>'password')) !!}
                	                <span class="help" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                   {{ trans('labels.PasswordText') }}</span>
                                    <!-- <span class="help hidden">{{ trans('labels.textRequiredFieldMessage') }}</span> -->
                                  </div>
                                </div>
                            
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">{{ trans('labels.addadmin') }}</button>
                                <a href="{{ URL::to('admin/admins')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                              </div>
                              <!-- /.box-footer -->
                            {!! Form::close() !!}
                        </div>
                  </div>
              </div>
            </div>
            
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 