<?php if(isset($templates['we-accept'][0]) && $weAccept = $templates['we-accept'][0]): ?>
    <section class="partner-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="<?php echo e((session()->get('rtl') == 1) ? 'partners-rtl': 'partners'); ?> owl-carousel">
                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(getFile(config('location.gateway.path').@$gateway->image)); ?>" class="image-partners" alt="<?php echo e(@$gateway->name); ?>"/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
              </div>
           </div>
        </div>
     </section>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/sections/we-accept.blade.php ENDPATH**/ ?>