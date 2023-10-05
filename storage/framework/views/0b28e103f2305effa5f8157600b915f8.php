<?php $__env->startSection('content'); ?>



<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

<?php if (! (count($listings) == 0)): ?>

<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2>
     <a href="/listings/<?php echo e($listing['id']); ?>"><?php echo e($listing['title']); ?></a>
</h2>
<p>
   <?php echo e($listing ['description']); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<p> No listings found </p>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/taborg/Projects/TABORG_GEEKS/resources/views/listings.blade.php ENDPATH**/ ?>