@extends('admin.layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ trans('labels.title_dashboard') }}  
        <small>{{ trans('labels.title_dashboard') }} 1.1</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">   
    <div class="row" style="display: none">
        <div class="col-md-12">
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Version Info!</h4>
                You are using the latest <strong>version </strong> of our <strong>Ecommerce Solution</strong>.<br>
                This latest version is came up with both <strong>Ecommerce Desktop</strong> and <strong>Application</strong><br>
				Our old version is not compatible with <strong>Desktop Version</strong>.<br>
				If you want to choose our <strong>Ecommerce Desktop System</strong> as well. Please <strong>upgrade</strong> your all CMS to our latest <strong>version 3.0</strong>.
                If you have purchased CMS with <strong>Desktop System package</strong> and want to buy <strong>Application Package</strong>. Please purchase our <strong>CMS and Application services</strong> and enable these feture from <strong>Admin Panel</strong>.<br>
				If you have purchased CMS with Application System package and want to buy Desktop Package. Please purchase our <strong>CMS and Desktop services</strong> and enable these feture from <strong>Admin Panel</strong>.<br>
				Just put your files into your existing system and enjoy with our <strong>Ecommerce Solution.</strong>.<br>
				<strong>Now feel free to use!</strong>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
    <div class="row custom-bg-white">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <p>{{ trans('labels.NewOrders') }}</p>
               @foreach ($result['orders_admin'] as $key=>$orders)
                <h3>{{ $orders->order_count }}</h3>
        @endforeach
            </div>
            <div class="icon">
            <img src="{{asset('').'/resources/views/admin/images/loader.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/AdminOrderSpecific')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllOrders') }}">{{ trans('labels.viewAllOrders') }} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
            <p>{{ trans('labels.Total Money') }}</p>
                @foreach ($result['inventory'] as $key=>$inventory)
              <h3>{{$inventory->purchase_price}}</h3>
			  @endforeach
            </div>
            <div class="icon">
            <img src="{{asset('').'/resources/views/admin/images/coin.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/products')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllProducts') }}">{{ trans('labels.viewAllProducts') }} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
            <p>{{ trans('labels.Total Money Earned') }}</p>
             
                @foreach ($result['MoneyEarned'] as $key=>$MoneyEarned)
                <h3>
                 {{ $MoneyEarned->MoneyEarned }}
                
                </h3>
			  @endforeach
            </div>
            <div class="icon">
            <img src="{{asset('').'/resources/views/admin/images/money-bag.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/AdminOrderSpecific')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllOrders') }}">{{ trans('labels.viewAllOrders') }} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
        
          <div class="small-box bg-red">
            <div class="inner">
            <p>{{ trans('labels.outOfStock') }}</p>

              <h3>

                  {{$result['productee']}}
                </h3>

            </div>
            <div class="icon">
              <img src="{{asset('').'/resources/views/admin/images/oos.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/adminoutofstock')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.outOfStock') }}">{{ trans('labels.outOfStock') }} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <p>{{ trans('labels.customerRegistrations') }}</p>

              <h3>{{$result['customer']}}</h3>

            </div>
            <div class="icon">
            <img src="{{asset('').'/resources/views/admin/images/browser.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/customers')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllCustomers') }}">{{ trans('labels.viewAllCustomers') }}  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <p>{{ trans('labels.totalProducts') }}</p>

              @foreach ($result['product'] as $key=>$product)
              <h3>{{ $product->product_count }} </h3>
                @endforeach

            </div>
            <div class="icon">
            <img src="{{asset('').'/resources/views/admin/images/box.png' }}" class="custom-img-dash">
            </div>
            <a href="{{ URL::to('admin/products')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllProducts') }}">{{ trans('labels.viewAllProducts') }} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>

    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<script src="{!! asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>

<script src="{!! asset('resources/views/admin/dist/js/pages/dashboard2.js') !!}"></script>
  @endsection