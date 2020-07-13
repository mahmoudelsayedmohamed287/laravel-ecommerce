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
                     
                      <th><?php echo e(trans('labels.Name')); ?></th>
                      
                      <th><?php echo e(trans('labels.Action')); ?></th>
                        <th>Date</th>
                    </tr>
                  </thead>
                    <tbody>
                        <?php $__currentLoopData = $result['logs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$logs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($logs->first_name); ?></td>
                            <td><?php echo e($logs->action); ?></td>
                            <td><?php echo e($logs->data); ?></td>
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
                     
                      <th><?php echo e(trans('labels.Name')); ?></th>
                      
                      <th>last login</th>
                        <th>last logout</th>
                    </tr>
                  </thead>
                    <tbody>
                        <?php $__currentLoopData = $result['timetogs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$timetogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($timetogs->first_name); ?></td>
                            <td><?php echo e($timetogs->last_login); ?></td>
                            <td><?php echo e($timetogs->last_logout); ?></td>
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
    
   
  </section>
  <!-- /.content --> 
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>