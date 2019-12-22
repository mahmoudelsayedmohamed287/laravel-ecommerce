@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>  Adminhistory <small></small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active"> Adminhistory</li>
    </ol>
  </section>
  
  <!--  content -->
  <section class="content"> 
    <!-- Info boxes --> 
      <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
           
            
          </div>
            
            
              <div class="box-body">
            <div class="row">
              <div class="col-xs-12">              		
				  @if (count($errors) > 0)
					  @if($errors->any())
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  {{$errors->first()}}
						</div>
					  @endif
				  @endif
              </div>
                  </div>
                  <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                     
                      <th>{{ trans('labels.Name') }}</th>
                      
                      <th>{{ trans('labels.Action') }}</th>
                        <th>Date</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($result['logs'] as $key=>$logs)
                        <tr>
                            <td>{{ $logs->first_name }}</td>
                            <td>{{ $logs->action }}</td>
                            <td>{{ $logs->data }}</td>
                        </tr>
                    @endforeach
                    
                    
                    </tbody>
                  
                  
                  
                  
                  
                  </table>
                      </div></div>
            
            
            
            
            
            </div>
            
            </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
   
    
        <!-- Info boxes --> 
      <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            
            
          </div>
            
            
              <div class="box-body">
            <div class="row">
              <div class="col-xs-12">              		
				  @if (count($errors) > 0)
					  @if($errors->any())
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  {{$errors->first()}}
						</div>
					  @endif
				  @endif
              </div>
                  </div>
                  <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                     
                      <th>{{ trans('labels.Name') }}</th>
                      
                      <th>last login</th>
                        <th>last logout</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($result['timetogs'] as $key=>$timetogs)
                        <tr>
                            <td>{{ $timetogs->first_name }}</td>
                            <td>{{ $timetogs->last_login }}</td>
                            <td>{{ $timetogs->last_logout }}</td>
                        </tr>
                    @endforeach
                    
                    
                    </tbody>
                  
                  
                  
                  
                  
                  </table>
                      </div></div>
            
            
            
            
            
            </div>
            
            </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
   
  </section>
  <!-- /.content --> 
</div>
@endsection 