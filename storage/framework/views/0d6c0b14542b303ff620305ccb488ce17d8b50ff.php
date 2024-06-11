<?php if(isset($templates['investor'][0]) && $investor = $templates['investor'][0]): ?>
    <?php if(0 < count($investors)): ?>
    <section class="investor-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="header-text text-center">
                    <h5><?php echo app('translator')->get(@$investor->description->title); ?></h5>
                    <h2><?php echo app('translator')->get(@$investor->description->sub_title); ?></h2>
                    <p><?php echo app('translator')->get(@$investor->description->short_title); ?></p>
                 </div>
              </div>
           </div>
           <div class="<?php echo e((session()->get('rtl') == 1) ? 'investors-rtl': 'investors'); ?> owl-carousel">
            <?php $__currentLoopData = $investors->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="investor-box">
                 <div class="img-box">
                    <img class="img-fluid" src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>" alt="<?php echo app('translator')->get('Investor Image Missing'); ?>" />
                 </div>
                 <div class="text-box">
                    <h4 class="golden-text"><?php echo app('translator')->get(optional($item->user)->username); ?></h4>
                    <span><?php echo app('translator')->get('Investor'); ?></span>
                    <h3 class="amount golden-text"><?php echo app('translator')->get('Invest'); ?>: <?php echo e($basic->currency_symbol); ?><?php echo e(getAmount($item->totalAmount)); ?></h3>
                 </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/sections/investor.blade.php ENDPATH**/ ?>