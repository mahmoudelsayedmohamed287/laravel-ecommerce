<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.editconstantbanner')); ?> <small><?php echo e(trans('labels.editconstantbanner')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/constantbanners')); ?>"><i class="fa fa-bars"></i> <?php echo e(trans('labels.ListingConstantBanners')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.editconstantbanner')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.editconstantbanner')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                    <br>                       
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <?php echo e(session()->get('error')); ?>

                            </div>
                          <?php endif; ?>
                          
                          <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <?php echo e(session()->get('success')); ?>

                            </div>
                          <?php endif; ?>
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            <?php echo Form::open(array('url' =>'admin/updateconstantBanner', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                              
                                <?php echo Form::hidden('id',  $result['banners'][0]->banners_id , array('class'=>'form-control', 'id'=>'id')); ?>

                                <?php echo Form::hidden('oldImage',  $result['banners'][0]->banners_image, array('id'=>'oldImage')); ?>

                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Language')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="languages_id">
                                          <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($language->languages_id); ?>" <?php if($language->languages_id==$result['banners'][0]->languages_id): ?> selected <?php endif; ?>><?php echo e($language->name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.ChooseLanguageText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Side Banner')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="type">
                                          <option value="1" <?php if($result['banners'][0]->type==1): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 1')); ?></option>
                                          <option value="2" <?php if($result['banners'][0]->type==2): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 2')); ?></option>
                                          <option value="3" <?php if($result['banners'][0]->type==3): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 3')); ?></option>
                                          <option value="4" <?php if($result['banners'][0]->type==4): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 4')); ?></option>
                                          <option value="5" <?php if($result['banners'][0]->type==5): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 5')); ?></option>                                          <option value="6" <?php if($result['banners'][0]->type==6): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 6')); ?></option>
                                          <option value="7" <?php if($result['banners'][0]->type==7): ?> selected <?php endif; ?>><?php echo e(trans('labels.Side Banner 7')); ?></option>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.AddBannerText')); ?></span>
                                  </div>
                                </div>
                                                                                                           
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Image')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::file('newImage', array('id'=>'banners')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.ConstantBannerSizes')); ?></span>
                                    <br>
                			
                                    <img src="<?php echo e(asset('').$result['banners'][0]->banners_image); ?>" alt="" width=" 100px">
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.URL')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('banners_url', $result['banners'][0]->banners_url, array('class'=>'form-control','id'=>'banners_url')); ?>

                                    
                                  </div>
                                </div>               
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="status">
                                          <option value="1" <?php if($result['banners'][0]->status==1): ?> selected <?php endif; ?>><?php echo e(trans('labels.Active')); ?></option>
                                          <option value="0" <?php if($result['banners'][0]->status==0): ?> selected <?php endif; ?>><?php echo e(trans('labels.Inactive')); ?></option>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.StatusBannerText')); ?></span>
                                  </div>
                                </div>
                                
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                <a href="<?php echo e(URL::to('admin/constantbanners')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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