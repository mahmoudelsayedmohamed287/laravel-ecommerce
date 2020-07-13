<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.AddCustomer')); ?> <small><?php echo e(trans('labels.AddCustomer')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/customers')); ?>"><i class="fa fa-users"></i> <?php echo e(trans('labels.ListingAllCustomers')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.start affilate')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.start affilate')); ?> </h3>
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

    <option class="thisWeek">thisWeek</option>
    <option class="lastMonth">lastMonth</option>
    <option class="thisMonth">thisMonth</option>
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
                                                                <span><?php echo e(trans('labels.period')); ?></span>
                                                                <input type="text" class="affilateDashBoard-period" id="period">
                                                            </label>
-->
                                                        </div>
                                                    </div>
                                                    <div class="affilateDashBoard-leftpart-flex-container">
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.clicks')); ?></span>
                                                            </div>

                                                            <div class="flex-item-body">
                                                                <span id="click"></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.confirmed orders')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span id="confirmed"></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.confirmed items')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span><?php echo e(trans('labels.0')); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.pending orders')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span><?php echo e(trans('labels.0')); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.pending items')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span><?php echo e(trans('labels.0')); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.pending earnings')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body">
                                                                <span><?php echo e(trans('labels.0')); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="affilateDashBoard-flex-item">
                                                            <div class="flex-item-header">
                                                                <span><?php echo e(trans('labels.confirmed earnings')); ?></span>
                                                            </div>
                                                            <div class="flex-item-body affilateDashBoard-Blue">
                                                                <span><?php echo e(trans('labels.0')); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="affilateDashBoard-rightpart">
                                                <div class="affliate-steps">
                                                    <p class="step">
                                                        <?php echo e(trans('labels.step')); ?>

                                                    </p>
                                                    <p class="step">
                                                        <?php echo e(trans('labels.step')); ?>

                                                    </p>
                                                </div>
                                                 <!-- form start -->
                                                <div class="box-body">
                                                    <?php echo Form::open(array('url' =>'admin/register/affilate/add', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                                                    <div class="form-group">

                                                        <!-- /.box-body -->
                                                        <div class="box-footer text-center">
                                                            <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.start affilate')); ?></button>

                                                        </div>
                                                        <!-- /.box-footer -->
                                                        <?php echo Form::close(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
<!--   end -->



                    <?php if(session()->has('success')): ?>
        <?php echo e(session()->get('success')); ?>

                    <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>