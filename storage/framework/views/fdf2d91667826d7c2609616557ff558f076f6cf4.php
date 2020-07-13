<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.affilate')); ?> <small><?php echo e(trans('labels.affilate')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/customers')); ?>"><i class="fa fa-users"></i> <?php echo e(trans('labels.ListingAllCustomers')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.affilate')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->

    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.affilate')); ?> </h3>
          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">




                    <?php if(session()->has('success')): ?>
        <?php echo e(session()->get('success')); ?>

                    <?php endif; ?>

                        <!-- form start -->
                         <div class="box-body">
                            <?php echo Form::open(array('url' =>'admin/generate/affilate/prouduct/link/add', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>




                                <div class="form-group">

                                  <div class="form-group">
                                    <label for="name" class="col-sm-2 col-md-3 control-label">Product Link </label>
                                    <div class="col-sm-10 col-md-4">
                                      <?php echo Form::url('product_link',  '', array('class'=>'form-control field-validate', 'id'=>'product_link')); ?>

                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">Product Link</span>

                                    </div>
                                  </div>

                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.add link')); ?></button>
                                
                              </div>
                              <!-- /.box-footer -->
                            <?php echo Form::close(); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>