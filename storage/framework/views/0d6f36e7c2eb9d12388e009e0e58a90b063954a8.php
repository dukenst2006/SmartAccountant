

<?php ( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') ); ?>
<?php ( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $login_url = $login_url ? route($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? route($register_url) : '' ); ?>
<?php else: ?>
    <?php ( $login_url = $login_url ? url($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? url($register_url) : '' ); ?>
<?php endif; ?>

<div class="container">
    <?php $__env->startSection('auth_header', __('adminlte::adminlte.register_message')); ?>
</div>

<?php $__env->startSection('auth_body'); ?>
  <div class="container">  <form action="<?php echo e($register_url); ?>" method="post">
    <?php echo e(csrf_field()); ?>


    
    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
               value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('adminlte::adminlte.full_name')); ?>" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></span>
            </div>
        </div>
        <?php if($errors->has('name')): ?>
            <div class="invalid-feedback">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
               value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('adminlte::adminlte.email')); ?>">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></span>
            </div>
        </div>
        <?php if($errors->has('email')): ?>
            <div class="invalid-feedback">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="input-group mb-3">
        <input type="password" name="password"
               class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>"
               placeholder="<?php echo e(__('adminlte::adminlte.password')); ?>">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></span>
            </div>
        </div>
        <?php if($errors->has('password')): ?>
            <div class="invalid-feedback">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="input-group mb-3">
        <input type="password" name="password_confirmation"
               class="form-control <?php echo e($errors->has('password_confirmation') ? 'is-invalid' : ''); ?>"
               placeholder="<?php echo e(__('adminlte::adminlte.retype_password')); ?>">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></span>
            </div>
        </div>
        <?php if($errors->has('password_confirmation')): ?>
            <div class="invalid-feedback">
                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
            </div>
        <?php endif; ?>
    </div>

    
    <button type="submit" class="btn btn-block <?php echo e(config('adminlte.classes_auth_btn', 'btn-flat btn-primary')); ?>">
        <span class="fas fa-user-plus"></span>
        <?php echo e(__('adminlte::adminlte.register')); ?>

    </button>

</form></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('auth_footer'); ?>
    <p class="my-0">
        <a href="<?php echo e($login_url); ?>">
            <?php echo e(__('adminlte::adminlte.i_already_have_a_membership')); ?>

        </a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::auth.auth-page', ['auth_type' => 'register'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/auth/register.blade.php ENDPATH**/ ?>