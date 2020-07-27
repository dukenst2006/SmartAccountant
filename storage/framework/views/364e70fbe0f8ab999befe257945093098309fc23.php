<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 d-flex flex-wrap">
                    <h1 class="m-0 text-dark"><?php echo e(__('adminPanel.Settings')); ?> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12 d-flex justify-content-center w-100">
                    <form action="<?php echo e(route('admin.settings.update', '1')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <span class="d-inline-block d-flex flex-wrap">
                       <label class="d-flex align-items-center" for=""><?php echo e(__("General.Enter initial Capital")); ?></label>
                       <input type="text" class="capital-input mr-2 mb-2" name="Capital" value="<?php echo e($setting->Capital); ?>"
                              placeholder="ادخل رأس المال الإفتتاحى">
                       <button class="btn btn-success d-inline-block mb-2 mr-2 "><i class="fas fa-pencil-alt"></i> تعديل </button>
                        </span>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row m-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="padding: 20px !important;">
                    <form action="<?php echo e(route('admin.settings.update', '1')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="is_site_active"><?php echo e(__('adminPanel.is_site_active')); ?></label>
                                <select class="form-control" name="IsSiteActive" id="is_site_active">
                                    <option
                                            <?php echo e(auth()->user()->settings->IsSiteActive ?'selected':''); ?> value="1"><?php echo e(__('General.Activate')); ?></option>
                                    <option
                                            <?php echo e(auth()->user()->settings->IsSiteActive ?'selected':''); ?> value="0"><?php echo e(__('General.Deactivate')); ?></option>
                                </select>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="store_name"><?php echo e(__('adminPanel.store_name')); ?></label>
                                <input type="text" name="AppName" id="store_name" class="form-control"
                                       value="<?php echo e($setting->AppName); ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="logo_pic"><?php echo e(__('adminPanel.logo_picture')); ?></label>
                                <input type="file" name="Logo" id="logo_pic" class="form-control">
                            </div>

                            <div class="form-group col-sm-6">

                                <?php echo Form::label('Stamp',     __('General.Stamp')); ?>

                                <?php echo Form::file('Stamp',      ['class' => 'form-control']); ?>


                            </div>

                            <div class="form-group col-sm-6">
                                <?php echo Form::label('VAT',  __('General.VAT') . ' %' ); ?>

                                <?php echo Form::number('VAT', $setting->VAT, ['class' => 'form-control']); ?>




                                <label class="checkbox-inline">
                                    <?php echo Form::hidden('EnableVAT', 0); ?>

                                    <?php echo Form::checkbox('EnableVAT', '1', $setting->EnableVAT); ?>

                                </label>
                                <?php echo Form::label('EnableVAT',  __('General.EnableVAT')); ?>

                            </div>


                            <div class="form-group col-md-6">
                                <label for="phone"><?php echo e(__('adminPanel.phone')); ?></label>
                                <input type="number" name="PhoneNumber" id="phone" class="form-control"
                                       value="<?php echo e($setting->PhoneNumber); ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="subscribe_number"><?php echo e(__('adminPanel.subscribe_number')); ?></label>
                                <input type="number" name="SerialNumber" id="subscribe_number" class="form-control"
                                       value="<?php echo e($setting->SerialNumber); ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email_address"><?php echo e(__('adminPanel.email_address')); ?></label>
                                <input type="email" name="Email" id="email_address" class="form-control"
                                       value="<?php echo e($setting->Email); ?>">
                            </div>

                            <div class="form-group col-sm-6">
                                <?php echo Form::label('Currency', __('General.Currency')); ?>

                                <?php echo Form::select('Currency',['SAR'=>'ريال','AED'=>'درهم','USD'=>'دولار'], $setting->Currency,['class' => 'form-control']); ?>

                            </div>
</div>
<div class="row">









<div class="col-12">
 <label for="closingMessageArabic"><?php echo e(__('adminPanel.closing_message')); ?>

     - <?php echo e(__('Arabic')); ?></label>
 <textarea class="form-control msg" name="message_ar" id="message_ar" cols="30"
           rows="10">


</textarea>
 
</div>
</div>

<div class="row mt-2">
<div class="form-group col-md-6">
 <label for="program_status"><?php echo e(__('adminPanel.is_program_active')); ?></label>
 <select class="form-control" name="program_status" id="program_status">
     
     
 </select>
 
</div>

<div class="form-group col-md-6">
 <label for="end_date"><?php echo e(__('adminPanel.program_end_date')); ?></label>
 <input type="date" name="program_end_date" id="end_date" class="form-control" value=" ">
 
</div>
</div>


<div class="row mt-5">
<div class="col-12">
 <button class="btn btn-primary" type="submit"><i
             class="fa fa-save"></i> <?php echo e(__('Buttons.Save')); ?> </button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customejs'); ?>
<script src="<?php echo e(asset('tinymce/tinymce.min.js')); ?>"></script>
<script>

tinymce.init({
selector: "#message_ar",
language: 'ar',
directionality: "rtl"
});
tinymce.init({
selector: "#message_en",
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/settings/index.blade.php ENDPATH**/ ?>