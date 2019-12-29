@extends('admin.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.AddCustomer') }} <small>{{ trans('labels.AddCustomer') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/customers')}}"><i class="fa fa-users"></i> {{ trans('labels.ListingAllCustomers') }}</a></li>
      <li class="active">{{ trans('labels.start affilate') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->


    <!-- /.row -->

    <div class="row">
      <div>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ trans('labels.start affilate') }} </h3>
          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div>
              		<div class="box box-info">
<!--   Hussien -->


                        <section class="affilateDashBoard">
                            <div class="affilateDashBoard-wrapper">
                                <div class="affilateDashBoard-inner-wrapper">
                                    <div class="affilateDashBoard-container">
                                        <div class="affilateDashBoard-flex-container">
                                            <div class="affilateDashBoard-leftpart">
                                                <div class="affilateDashBoard-leftpart-container">
                                                    <div class="affilateDashBoard-leftpart-period">
                                                        <div>
                                                            <div class="requ">
                        <label for="">Period:</label>
                        <input type="text" name="" id="" value="" class="dateMenu">
                        <div class="dateRangeTol">

                        <select class="form-control" id="Period" >
    <option class="today">today</option>
    <option class="yesterday">yesterday</option>
    <option class="lastWeek" id="lastWeek">last week</option>
    <option class="thisWeek">this week</option>
    <option class="lastMonth">last month</option>
    <option class="thisMonth">this month</option>
  </select>


                            <!-- <ul>
                                <li class="today">today</li>
                                <li class="yesterday">yesterday</li>
                                <li class="lastWeek">last week</li>
                                <li class="thisWeek">this week</li>
                                <li class="lastMonth">last month</li>
                                <li class="thisMonth">this month</li>
                            </ul> -->
                        </div>
                    </div>




<!--
                                                            <label for="period">
                                                                <span>{{ trans('labels.period') }}</span>
                                                                <input type="text" class="affilateDashBoard-period" id="period">
                                                            </label>
-->
                                                        </div>
                                                    </div>
                                                    <div class="affilateDashBoard-leftpart-flex-container">
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.clicks') }}</span>
                                                            </div>
          
                                                            <div class="flex-item-body">
                                                                <span id="click"></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.confirmed orders') }}</span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span id="confirmed"></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.confirmed items') }}</span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span>{{ trans('labels.0') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.pending orders') }}</span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span>{{ trans('labels.0') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.pending items') }}</span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span>{{ trans('labels.0') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.pending earnings') }}</span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span>{{ trans('labels.0') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span>{{ trans('labels.confirmed earnings') }}</span>
                                                            </div>
                                                            <div class="flex-item-body affilateDashBoard-Blue">
                                                                <span>{{ trans('labels.0') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="affilateDashBoard-rightpart">
                                                <div class="affliate-steps">
                                                    <p class="step">
                                                        {{ trans('labels.step') }}
                                                    </p>
                                                    <p class="step">
                                                        {{ trans('labels.step') }}
                                                    </p>
                                                </div>
                                                 <!-- form start -->
                                                <div class="box-body">
                                                    {!! Form::open(array('url' =>'admin/register/affilate/add', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                                                    <div class="form-group">

                                                        <!-- /.box-body -->
                                                        <div class="box-footer text-center">
                                                            <button type="submit" class="btn btn-primary">{{ trans('labels.start affilate') }}</button>

                                                        </div>
                                                        <!-- /.box-footer -->
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
<!--   end -->



                    @if(session()->has('success'))
        {{ session()->get('success') }}
                    @endif

                        <!-- form start -->
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

  <!-- /.content -->
</div>
    </section>
@endsection
