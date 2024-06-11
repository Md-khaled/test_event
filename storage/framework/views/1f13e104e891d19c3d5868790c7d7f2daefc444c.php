<?php if(isset($contentDetails['feature'])): ?>
    <?php if(0 < count($contentDetails['feature'])): ?>
    <section class="feature-section">
        <div class="container">
           <div class="row">
            <?php $__currentLoopData = $contentDetails['feature']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                 <div
                    class="box"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-anchor-placement="center-bottom"
                 >
                    <div class="img-box">
                       <img src="<?php echo e(getFile(config('location.content.path').@$feature->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('feature image'); ?>" />
                    </div>
                    <h2><?php echo app('translator')->get(@$feature->description->information); ?></h2>
                    <h4><?php echo app('translator')->get(@$feature->description->title); ?></h4>
                 </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
        </div>
     </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/sections/feature.blade.php ENDPATH**/ ?>