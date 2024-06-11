<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Manage Schedule'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">

        <div class="card-body">
            <?php if(adminAccessRoute(config('role.manage_plan.access.add'))): ?>
            <button class="btn btn-sm  btn-dark float-right mb-2" type="button"
                    data-toggle="modal"
                    data-target="#addModal">
                <span><i class="fas fa-plus"></i> <?php echo app('translator')->get('Add New'); ?></span>
            </button>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered" id="zero_config">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Duration'); ?></th>
                        <?php if(adminAccessRoute(config('role.manage_plan.access.edit'))): ?>
                        <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $manageTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="<?php echo app('translator')->get('Name'); ?>">
                                <?php echo app('translator')->get($item->name); ?>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Duration'); ?>">
                                <?php echo app('translator')->get('Time'); ?>: <?php echo app('translator')->get($item->time); ?> <?php echo app('translator')->get('Hours'); ?>
                            </td>
                            <?php if(adminAccessRoute(config('role.manage_plan.access.edit'))): ?>
                            <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                <button class="btn btn-sm  btn-primary edit-button" type="button"
                                        data-toggle="modal"
                                        data-target="#editModal"
                                        data-name="<?php echo e($item->name); ?>"
                                        data-time="<?php echo e($item->time); ?>"
                                        data-route="<?php echo e(route('admin.update.schedule',['id'=>$item->id])); ?>">
                                    <span><i class="fas fa-edit"></i> <?php echo app('translator')->get('Edit'); ?></span>
                                </button>
                            </td>
                            <?php endif; ?>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="100%"><?php echo app('translator')->get('No Data Found'); ?></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><?php echo app('translator')->get('Add New Schedule'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.store.schedule')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Name'); ?></label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control form-control-lg">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('Time'); ?></label>
                            <div class="input-group mb-3">
                                <input type="text" name="time" value="<?php echo e(old('time')); ?>"
                                       class="form-control form-control-lg">
                                <div class="input-group-append">
                                    <span class="input-group-text"><?php echo e(trans('Hour')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">
                            <span><?php echo app('translator')->get('Cancel'); ?></span>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <span><i class="fas fa-save"></i> <?php echo app('translator')->get('Save Changes'); ?></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><?php echo app('translator')->get('Edit Schedule'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" id="editForm">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Name'); ?></label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="edit-name form-control form-control-lg">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('Time'); ?></label>
                            <div class="input-group mb-3">
                                <input type="text" name="time" value="<?php echo e(old('time')); ?>"
                                       class="edit-time form-control form-control-lg">
                                <div class="input-group-append">
                                    <span class="input-group-text"><?php echo e(trans('Hour')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">
                            <span><?php echo app('translator')->get('Cancel'); ?></span>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <span><i class="fas fa-save"></i> <?php echo app('translator')->get('Save Changes'); ?></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startPush('style-lib'); ?>
    <link href="<?php echo e(asset('assets/admin/css/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/admin/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/datatable-basic.init.js')); ?>"></script>


    <?php if($errors->any()): ?>
        <?php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Notiflix.Notify.Failure("<?php echo e(trans($error)); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>

    <script>
        "use strict";
        $(document).ready(function () {
            $(document).on('click', '.edit-button', function () {
                $('#editForm').attr('action', $(this).data('route'))
                $('.edit-name').val($(this).data('name'))
                $('.edit-time').val($(this).data('time'))
            })

        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/admin/plan/schedule.blade.php ENDPATH**/ ?>