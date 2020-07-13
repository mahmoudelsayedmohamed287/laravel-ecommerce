<div style="width: 100%; display:block;">
<h2><?php echo e(trans('labels.NewProductEmailTitle')); ?></h2>
<p>
	<strong><?php echo e(trans('labels.Hi')); ?> <?php echo e($customers_data->customers_firstname); ?> <?php echo e($customers_data->customers_lastname); ?>!</strong><br>
	
    <?php echo e(trans('labels.NewProductEmailPart1')); ?> <strong><?php echo e($customers_data->product[0]->products_name); ?></strong> <?php echo e(trans('labels.NewProductEmailPart2')); ?>

    <br><br>
	<strong><?php echo e(trans('labels.Sincerely')); ?>,</strong><br>
	<?php echo e(trans('labels.regardsForThanks')); ?>

</p>
</div>