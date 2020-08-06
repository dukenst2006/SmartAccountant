<?php ( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') ); ?>
<?php ( $profile_url = View::getSection('profile_url') ?? config('adminlte.profile_url', 'logout') ); ?>

<?php if(config('adminlte.usermenu_profile_url', false)): ?>
    <?php ( $profile_url = Auth::user()->adminlte_profile_url() ); ?>
<?php endif; ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $profile_url = $profile_url ? route($profile_url) : '' ); ?>
    <?php ( $logout_url = $logout_url ? route($logout_url) : '' ); ?>
<?php else: ?>
    <?php ( $profile_url = $profile_url ? url($profile_url) : '' ); ?>
    <?php ( $logout_url = $logout_url ? url($logout_url) : '' ); ?>
<?php endif; ?>

<li class="nav-item dropdown show mx-2">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="https://cdn.onlinewebfonts.com/svg/img_415067.png" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-left text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="https://cdn.onlinewebfonts.com/svg/img_415067.png" alt="User Avatar" class="img-size-50 img-circle ml-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-left text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="https://cdn.onlinewebfonts.com/svg/img_415067.png" alt="User Avatar" class="img-size-50 img-circle ml-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-left text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
</li>


<li class="nav-item dropdown mx-2">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">
            <?php echo e($notifications->count()); ?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">
            <?php echo e($notifications->count()); ?> Notifications
        </span>
        <div class="dropdown-divider"></div>


        <?php if(!empty($notifications)): ?>
        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i>
                <?php echo e($notification->data['message']); ?>

                <span class="float-left text-muted text-sm">
                    <?php echo e($notification->created_at->diffForHumans()); ?>

                </span>
            </a>
            <div class="dropdown-divider"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="dropdown-divider"></div>
                <p class="text-center">لا توجد اشعارات جديدة</p>
            <div class="dropdown-divider"></div>
        <?php endif; ?>
        <a href="<?php echo e(route('admin.notifications')); ?>" class="dropdown-item dropdown-footer">مشاهدة جميع الإشعارات</a>
    </div>
</li>
<li class="nav-item dropdown user-menu mx-2">

    
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <?php if(config('adminlte.usermenu_image')): ?>
            <img src="<?php echo e(Auth::user()->adminlte_image()); ?>"
                 class="user-image img-circle elevation-2"
                 alt="<?php echo e(Auth::user()->name); ?>">
        <?php endif; ?>
        <span <?php if(config('adminlte.usermenu_image')): ?> class="d-none d-md-inline" <?php endif; ?>>
            <?php echo e(Auth::user()->name); ?>

        </span>
    </a>

    
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        
        <?php if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header')): ?>
            <li class="user-header <?php echo e(config('adminlte.usermenu_header_class', 'bg-info')); ?>

                <?php if(!config('adminlte.usermenu_image')): ?> h-auto <?php endif; ?>">
                <?php if(config('adminlte.usermenu_image')): ?>
                    <img src="<?php echo e(Auth::user()->adminlte_image()); ?>"
                         class="img-circle elevation-2"
                         alt="<?php echo e(Auth::user()->name); ?>">
                <?php endif; ?>
                <p class="<?php if(!config('adminlte.usermenu_image')): ?> mt-0 <?php endif; ?>">
                    <?php echo e(Auth::user()->name); ?>

                    <?php if(config('adminlte.usermenu_desc')): ?>
                        <small><?php echo e(Auth::user()->adminlte_desc()); ?></small>
                    <?php endif; ?>
                </p>
            </li>
        <?php else: ?>
            <?php echo $__env->yieldContent('usermenu_header'); ?>
        <?php endif; ?>

        
        <?php echo $__env->renderEach('vendor.adminlte.partials.navbar.dropdown-item', $adminlte->menu("navbar-user"), 'item'); ?>

        
        <?php if (! empty(trim($__env->yieldContent('usermenu_body')))): ?>
            <li class="user-body">
                <?php echo $__env->yieldContent('usermenu_body'); ?>
            </li>
        <?php endif; ?>

        
        <li class="user-footer">
            <?php if($profile_url): ?>
                <a href="<?php echo e($profile_url); ?>" class="btn btn-default btn-flat">
                    <i class="fa fa-fw fa-user"></i>
                    <?php echo e(__('adminlte::menu.profile')); ?>

                </a>
            <?php endif; ?>
            <a class="btn btn-default btn-flat float-right <?php if(!$profile_url): ?> btn-block <?php endif; ?>"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                <?php echo e(__('adminlte::adminlte.log_out')); ?>

            </a>
            <form id="logout-form" action="<?php echo e($logout_url); ?>" method="POST" style="display: none;">
                <?php if(config('adminlte.logout_method')): ?>
                    <?php echo e(method_field(config('adminlte.logout_method'))); ?>

                <?php endif; ?>
                <?php echo e(csrf_field()); ?>

            </form>
        </li>

    </ul>

</li>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/vendor/adminlte/partials/navbar/menu-item-dropdown-user-menu.blade.php ENDPATH**/ ?>