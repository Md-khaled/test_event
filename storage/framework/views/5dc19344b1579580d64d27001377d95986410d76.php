<!-- footer -->
<footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-box">
                        <a class="navbar-brand golden-text" href="<?php echo e(url('/')); ?>">
                            <?php echo e(config('basic.site_title')); ?>

                        </a>
                        <?php if(isset($contactUs['contact-us'][0]) && $contact = $contactUs['contact-us'][0]): ?>
                            <p>
                                <?php echo app('translator')->get(strip_tags(@$contact->description->footer_short_details)); ?>
                            </p>
                        <?php endif; ?>
                        <?php if(isset($contentDetails['social'])): ?>
                            <div class="social-links">
                                <?php $__currentLoopData = $contentDetails['social']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(@$data->content->contentMedia->description->link); ?>" target="_blank">
                                        <i class="<?php echo e(@$data->content->contentMedia->description->icon); ?>"></i>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 <?php echo e((session()->get('rtl') == 1) ? 'pe-lg-5': 'ps-lg-5'); ?>">
                    <div class="footer-box">
                        <h4 class="golden-text"><?php echo e(trans('Useful Links')); ?></h4>
                        <ul>
                            <li>
                                <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('plan')); ?>"><?php echo app('translator')->get('Plan'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 <?php echo e((session()->get('rtl') == 1) ? 'pe-lg-5': 'ps-lg-5'); ?>">
                    <div class="footer-box">
                        <h4 class="golden-text"><?php echo app('translator')->get('Our Services'); ?></h4>
                        <?php if(isset($contentDetails['support'])): ?>
                            <ul>
                                <?php $__currentLoopData = $contentDetails['support']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('getLink', [slug($data->description->title), $data->content_id])); ?>"><?php echo app('translator')->get($data->description->title); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('faq')); ?>"><?php echo app('translator')->get('FAQ'); ?></a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if(isset($contactUs['contact-us'][0]) && $contact = $contactUs['contact-us'][0]): ?>
                    <div class="col-md-6 col-lg-3">
                    <div class="footer-box">
                        <h4 class="golden-text"><?php echo e(trans('Contact Us')); ?></h4>
                        <ul>
                            <li>
                                <img src="<?php echo e(asset($themeTrue.'img/icon/calling.png')); ?>" alt="<?php echo app('translator')->get('phone'); ?>" />
                                <span><?php echo app('translator')->get(@$contact->description->phone); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo e(asset($themeTrue.'img/icon/email.png')); ?>" alt="<?php echo app('translator')->get('email'); ?>" />
                                <span><?php echo app('translator')->get(@$contact->description->email); ?></span>
                            </li>
                            <li>
                                <img src="<?php echo e(asset($themeTrue.'img/icon/location.png')); ?>" alt="<?php echo app('translator')->get('address'); ?>" />
                                <span><?php echo app('translator')->get(@$contact->description->address); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="row copyright">
                <div class="col-md-6">
                    <span><?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?> <?php echo app('translator')->get($basic->site_title); ?> <?php echo app('translator')->get('All Rights Reserved'); ?></span>
                </div>

                <?php
                    $languageArray = json_decode($languages, true);
                ?>

                <div class="col-md-6 language <?php echo e((session()->get('rtl') == 1) ? 'text-md-start': 'text-md-end'); ?>">
                    <?php $__currentLoopData = $languageArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('language',$key)); ?>"><span class="flag-icon flag-icon-<?php echo e(strtolower($key)); ?>"></span> <?php echo e($lang); ?> </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

</footer>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/partials/footer.blade.php ENDPATH**/ ?>