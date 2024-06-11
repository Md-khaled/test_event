<?php if(isset($templates['news-letter'][0]) && $newsLetter = $templates['news-letter'][0]): ?>
<!-- REFFERAL -->
<section class="newsletter-section">
    <div class="container">
       <div class="row">
          <div class="col">
             <div class="header-text text-center">
                <h5><?php echo app('translator')->get(@$newsLetter->description->title); ?></h5>
                <h2><?php echo app('translator')->get(@$newsLetter->description->sub_title); ?></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col">
            <form action="<?php echo e(route('subscribe')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="<?php echo app('translator')->get('Email Address'); ?>" />
                    <button type="submit" class="gold-btn"><?php echo e(trans('Subscribe')); ?></button>
                </div>
            </form>
          </div>
       </div>
    </div>
 </section>
<?php endif; ?>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/sections/news-letter.blade.php ENDPATH**/ ?>