@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <small>{{ 'customers' }}...</small> </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active"> {{ 'customers' }}</li>
    </ol> -->
  </section>
  
  <!--  content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{'customers'}} </h3>
          </div>
          
          <!-- /.box-header -->
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
                      <th>customers_id</th>
                      <th>customers_name</th>
                      <th>customers_telephone</th>
                      <th>customers_city</th>
                  
                   
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->customers_id }}</td>
                            <td>{{ $customer->customers_name }}</td>
                            <td>{{ $customer->customers_telephone }}</td>
                            <td>{{ $customer->customers_city }}</td>
                           
                         
                
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              
              </div>
            </div>
          </div>
        
        </div>
      </div>

    </div>

  </section>
  <!-- /.content --> 
</div>
@endsection 