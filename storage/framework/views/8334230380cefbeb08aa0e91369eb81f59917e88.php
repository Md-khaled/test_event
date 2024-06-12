<div class="notification-panel push-notification">
    <button class="dropdown-toggle">
        <img src="<?php echo e(asset($themeTrue.'img/icon/notification.png')); ?>" alt="<?php echo app('translator')->get('notification'); ?>" />
        <span class="badge" v-cloak>{{items.length}}</span>
    </button>
    <ul class="notification-dropdown">
        <div class="dropdown-box">
            <li v-for="(item, index) in items" @click.prevent="readAt(item.id, item.description.link)">
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fas fa-bell"></i>
                    <div>
                        <h4 class="golden-text" v-cloak v-html="item.description.text"></h4>
                        <p v-cloak>{{ item.formatted_date }}</p>
                    </div>
                </a>
            </li>
        </div>
        <div class="clear-all fixed-bottom">
            <a href="javascript:void(0)" v-if="items.length == 0" class="golden-text"><?php echo app('translator')->get('You have no notifications'); ?></a>
            <a href="javascript:void(0)" role="button" type="button" v-if="items.length > 0" @click.prevent="readAll" class="btn-clear golden-text"><?php echo app('translator')->get('Clear All'); ?></a>
        </div>
    </ul>
</div>


<?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/partials/pushNotify.blade.php ENDPATH**/ ?>