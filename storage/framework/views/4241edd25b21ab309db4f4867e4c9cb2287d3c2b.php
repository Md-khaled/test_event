<?php if(isset($templates['testimonial'][0]) && $testimonial = $templates['testimonial'][0]): ?>
<section class="testimonial-section">
    <div class="container">
       <div class="row">
          <div class="col">
             <div class="header-text text-center">
                <h5><?php echo app('translator')->get($testimonial->description->title); ?></h5>
                <h2><?php echo app('translator')->get($testimonial->description->sub_title); ?></h2>
                <p><?php echo app('translator')->get($testimonial->description->short_title); ?></p>
             </div>
          </div>
       </div>

       <?php if(isset($contentDetails['testimonial'])): ?>
        <div class="<?php echo e((session()->get('rtl') == 1) ? 'client-testimonials-rtl': 'client-testimonials'); ?> owl-carousel">
                <?php $__currentLoopData = $contentDetails['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="review-box">
                        <img class="quote" src="<?php echo e(asset($themeTrue.'img/icon/quote.png')); ?>" alt="<?php echo app('translator')->get('quote img'); ?>" />
                        <div class="img-box">
                            <img class="img-fluid" src="<?php echo e(getFile(config('location.content.path').@$data->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('testimonial img'); ?>" />
                        </div>
                        <div class="text-box">
                            <h4 class="golden-text"><?php echo app('translator')->get(@$data->description->name); ?></h4>
                            <span><?php echo app('translator')->get(@$data->description->designation); ?></span>
                            <p><?php echo app('translator')->get(@$data->description->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/sections/testimonial.blade.php ENDPATH**/ ?>