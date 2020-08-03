

<?php $__env->startSection('adminlte_css_pre'); ?>
<link rel="stylesheet" href="<?php echo e(asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php ( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') ); ?>
<?php ( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') ); ?>
<?php ( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url',
'password/reset') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
<?php ( $login_url = $login_url ? route($login_url) : '' ); ?>
<?php ( $register_url = $register_url ? route($register_url) : '' ); ?>
<?php ( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' ); ?>
<?php else: ?>
<?php ( $login_url = $login_url ? url($login_url) : '' ); ?>
<?php ( $register_url = $register_url ? url($register_url) : '' ); ?>
<?php ( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' ); ?>
<?php endif; ?>


<?php $__env->startSection('auth_body'); ?>












<div class="log-in-t">
    <div class="container " dir="ltr">
        <div class="  main-login flex-column">

            <div class="  login-cont">
                <div class="mb-4 mt-5 text-center">
                    <img class="login-logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="">
            </div>
            <div class=" login-div ">
                <div class="my-shadow form-fog pb-0">
                    <div class=" content-log min-sky">
                        <div class="">
                            <h5 class=" text-center mb-3 log-dir font-weight-normal"> من فضلك قم بتسجل الدخول
                            </h5>
                        </div>
                        <form class="login-form" action="<?php echo e($login_url); ?>" method="post" dir="rtl">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group d-flex justify-content-start align-items-center">
                                <input type="email" name="email"
                                    class="form-control  border-left-0 d-flex input-field-2  icon-left   <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>  "
                                    placeholder="<?php echo e(__('adminlte::adminlte.email')); ?>" autofocus>
                                <i
                                    class="icofont-user-alt-4  icon-color  form-control d-flex justify-content-center align-items-center icons-input   icon-right border-right-0 <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></i>
                            </div>
                            <?php if($errors->has('email')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </div>
                            <?php endif; ?>


                            <div class="form-group d-flex justify-content-start align-items-center mb-3">
                                <input type="password" name="password"
                                    class="form-control   input-field-2  icon-left  border-left-0 <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?> "
                                    placeholder="<?php echo e(__('adminlte::adminlte.password')); ?>">
                                <i
                                    class="icofont-ui-lock  icon-color form-control d-flex justify-content-center align-items-center icons-input  icon-right border-right-0 <?php echo e(config('adminlte.classes_auth_icon', '')); ?>"></i>
                            </div>
                            <?php if($errors->has('password')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </div>
                            <?php endif; ?>


                            <div class="">
                                <div class="icheck-primary">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember"><?php echo e(__('adminlte::adminlte.remember_me')); ?></label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type=submit
                                    class="btn btn-block text-center py-2 btn-bl <?php echo e(config('adminlte.classes_auth_btn', 'btn-flat btn-primary')); ?>"><span
                                        class="fas fa-sign-in-alt"></span>
                                    <?php echo e(__('adminlte::adminlte.sign_in')); ?></button>
                            </div>
                        </form>
                        <?php $__env->stopSection(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





<?php $__env->startSection('auth_footer'); ?>

<?php if($password_reset_url): ?>
<p class="my-0">
    <a href="<?php echo e($password_reset_url); ?>">
        <?php echo e(__('adminlte::adminlte.i_forgot_my_password')); ?>

    </a>
</p>
<?php endif; ?>


<?php if($register_url): ?>
<p class="my-0">
    <a href="<?php echo e($register_url); ?>">
        <?php echo e(__('adminlte::adminlte.register_a_new_membership')); ?>

    </a>
</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::auth.auth-page', ['auth_type' => 'login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/auth/login.blade.php ENDPATH**/ ?>