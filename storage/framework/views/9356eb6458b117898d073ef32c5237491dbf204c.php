<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e(trans('labels.title_dashboard')); ?>  
        <small><?php echo e(trans('labels.title_dashboard')); ?> 1.1</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></li>
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
            <p><?php echo e(trans('labels.NewOrders')); ?></p>
               <?php $__currentLoopData = $result['orders_admin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3><?php echo e($orders->order_count); ?></h3>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="icon">
            <img src="<?php echo e(asset('').'/resources/views/admin/images/loader.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/AdminOrderSpecific')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.viewAllOrders')); ?>"><?php echo e(trans('labels.viewAllOrders')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
            <p><?php echo e(trans('labels.Total Money')); ?></p>
                <?php $__currentLoopData = $result['inventory']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3><?php echo e($inventory->purchase_price); ?></h3>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="icon">
            <img src="<?php echo e(asset('').'/resources/views/admin/images/coin.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/products')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.viewAllProducts')); ?>"><?php echo e(trans('labels.viewAllProducts')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
            <p><?php echo e(trans('labels.Total Money Earned')); ?></p>
             
                <?php $__currentLoopData = $result['MoneyEarned']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$MoneyEarned): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3>
                 <?php echo e($MoneyEarned->MoneyEarned); ?>

                
                </h3>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="icon">
            <img src="<?php echo e(asset('').'/resources/views/admin/images/money-bag.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/AdminOrderSpecific')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.viewAllOrders')); ?>"><?php echo e(trans('labels.viewAllOrders')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
        
          <div class="small-box bg-red">
            <div class="inner">
            <p><?php echo e(trans('labels.outOfStock')); ?></p>

              <h3>

                  <?php echo e($result['productee']); ?>

                </h3>

            </div>
            <div class="icon">
              <img src="<?php echo e(asset('').'/resources/views/admin/images/oos.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/adminoutofstock')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.outOfStock')); ?>"><?php echo e(trans('labels.outOfStock')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <p><?php echo e(trans('labels.customerRegistrations')); ?></p>

              <h3><?php echo e($result['customer']); ?></h3>

            </div>
            <div class="icon">
            <img src="<?php echo e(asset('').'/resources/views/admin/images/browser.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/customers')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.viewAllCustomers')); ?>"><?php echo e(trans('labels.viewAllCustomers')); ?>  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <p><?php echo e(trans('labels.totalProducts')); ?></p>

              <?php $__currentLoopData = $result['product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3><?php echo e($product->product_count); ?> </h3>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="icon">
            <img src="<?php echo e(asset('').'/resources/views/admin/images/box.png'); ?>" class="custom-img-dash">
            </div>
            <a href="<?php echo e(URL::to('admin/products')); ?>" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.viewAllProducts')); ?>"><?php echo e(trans('labels.viewAllProducts')); ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>

    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<script src="<?php echo asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>

<script src="<?php echo asset('resources/views/admin/dist/js/pages/dashboard2.js'); ?>"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>