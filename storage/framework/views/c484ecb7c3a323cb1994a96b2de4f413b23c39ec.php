<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>  Adminhistory <small></small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
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
				  <?php if(count($errors) > 0): ?>
					  <?php if($errors->any()): ?>
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php echo e($errors->first()); ?>

						</div>
					  <?php endif; ?>
				  <?php endif; ?>
              </div>
                  </div>
                  <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                     
                      <tr>
                      
                      <th><?php echo e(trans('labels.CustomerName')); ?></th>
                      <th><?php echo e(trans('labels.OrderTotal')); ?></th>
                      <th><?php echo e(trans('labels.DatePurchased')); ?></th>
<!--                      <th><?php echo e(trans('labels.Status')); ?> </th>-->
                      <th><?php echo e(trans('labels.Action')); ?></th>
                    </tr>
                    
                  </thead>
                    <tbody>
                         <?php $__currentLoopData = $result['orders_admin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>	
                           
                            <td><?php echo e($orders->customers_name); ?></td>
                            <td><?php echo e($orders->final_price); ?></td>
                            <td><?php echo e($orders->date_purchased); ?></td>

                            <td>
                            
                            <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Edit')); ?>"
                                 href="showAdminOrderSpecific/<?php echo e($orders->orders_id); ?>" 
                                class="badge bg-light-blue"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                                
                           
                                
                                
                            </td>
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
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

    <!-- /.row --> 
    
   
  </section>
  <!-- /.content --> 
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>