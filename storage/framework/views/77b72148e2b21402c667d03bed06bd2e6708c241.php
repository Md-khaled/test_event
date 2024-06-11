<?php if(isset($templates['news-letter-referral'][0]) && 0 < count($referralLevel) && $newsLetterReferral = $templates['news-letter-referral'][0]): ?>
    <section class="commission-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="header-text text-center">
                    <h5><?php echo app('translator')->get(@$newsLetterReferral->description->title); ?></h5>
                    <h2><?php echo app('translator')->get(@$newsLetterReferral->description->sub_title); ?></h2>
                 </div>
              </div>
           </div>
           <div class="row">
            <?php $__currentLoopData = $referralLevel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6 col-lg-4 mb-5">
                 <div
                    class="box box<?php echo e($k+1); ?> <?php echo e((session()->get('rtl') == 1) ? 'isRtl': 'noRtl'); ?>"
                    data-aos="zoom-in"
                    data-aos-duration="800"
                    data-aos-anchor-placement="center-bottom"
                 >
                    <h2><?php echo e($data->percent); ?>%</h2>
                    <h4><?php echo app('translator')->get('level'); ?> <?php echo e($data->level); ?></h4>
                 </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/sections/referral.blade.php ENDPATH**/ ?>