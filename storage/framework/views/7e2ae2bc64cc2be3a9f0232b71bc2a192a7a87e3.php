<?php if(isset($templates['blog'][0]) && $blog = $templates['blog'][0]): ?>
    <?php if(0 < count($contentDetails['blog'])): ?>
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header-text text-center">
                            <h5><?php echo app('translator')->get(@$blog->description->title); ?></h5>
                            <h2><?php echo app('translator')->get(@$blog->description->sub_title); ?></h2>
                            <p><?php echo app('translator')->get(@$blog->description->short_title); ?></p>
                        </div>
                    </div>
                </div>

                <?php if(isset($contentDetails['blog'])): ?>
                    <div class="row">
                        <?php $__currentLoopData = $contentDetails['blog']->take(3)->sortDesc(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <div class="blog-box">
                                    <div class="img-box">
                                        <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                            <img class="img-fluid"
                                                 src="<?php echo e(getFile(config('location.content.path').'thumb_'.@$data->content->contentMedia->description->image)); ?>"
                                                 alt="<?php echo app('translator')->get('blog-image'); ?>">
                                        </a>
                                    </div>
                                    <div class="text-box">
                                        <span class="date"><?php echo e(dateTime(@$data->created_at,'d M, Y')); ?></span>
                                        <h4 class="title golden-text">
                                            <a href="<?php echo e(route('blogDetails',[slug(@$data->description->title), $data->content_id])); ?>">
                                                <?php echo e(\Illuminate\Support\Str::limit(@$data->description->title,60)); ?>

                                            </a>
                                        </h4>
                                        <p class="description">
                                            <?php echo app('translator')->get(\Illuminate\Support\Str::limit(strip_tags(@$data->description->description), 120)); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/sections/blog.blade.php ENDPATH**/ ?>