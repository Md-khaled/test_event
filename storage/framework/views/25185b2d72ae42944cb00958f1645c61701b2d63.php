<?php if(isset($templates['know-more-us'][0]) && $knowMoreUs = $templates['know-more-us'][0]): ?>
    <section class="statistic-section">
        <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-text text-center">
                    <h5><?php echo app('translator')->get(@$knowMoreUs->description->title); ?></h5>
                    <h2><?php echo app('translator')->get(@$knowMoreUs->description->sub_title); ?></h2>
                    <p><?php echo app('translator')->get(@$knowMoreUs->description->short_details); ?></p>
                </div>
            </div>
        </div>
        <div class="row statistic-section">
            <?php if(isset($contentDetails['know-more-us'])): ?>
            <?php $__currentLoopData = $contentDetails['know-more-us']->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                        <img src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('know-more-us-image'); ?>">
                        </div>
                        <h4><?php echo app('translator')->get(@$item->description->title); ?></h4>
                        <h2><span class="counter"><?php echo app('translator')->get(@$item->description->number); ?></span></h2>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/sections/know-more-us.blade.php ENDPATH**/ ?>