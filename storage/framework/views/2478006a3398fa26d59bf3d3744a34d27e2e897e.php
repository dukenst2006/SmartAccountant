
<?php $__env->startSection('title', 'فاتوره جديده'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>فاتورة جديده</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="root">
        <div class="row justify-content-center animated bounceInUp">
            <div class="col-10">
                <div class="card" style="font-family: 'Cairo', sans-serif;font-weight: 900;">
                    <div class="card-header">
                        <h3 class="card-title">تفاصيل الفاتورة</h3>
                    </div>
                    
                    <div class="card-body p-0 ">
                        <?php echo Form::open(['route' => 'admin.invoice.storerowinvoice', 'method' => 'post']); ?>

                            
                            <?php echo Form::token(); ?> 

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

                                <?php echo Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('PaymentTypeID', __('Models/Invoice.PaymentTypeID')); ?>

                                <?php echo Form::select('PaymentTypeID',$payment_types, null,['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('CustomerName', __('Models/Invoice.Name')); ?>

                                <?php echo Form::text('CustomerName', null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Total', __('Models/Invoice.Total')); ?>

                                <?php echo Form::text('Total', null, ['class' => 'form-control']); ?>

                            </div>



                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Paid', __('Models/Invoice.Paid')); ?>

                                <?php echo Form::text('Paid', null, ['class' => 'form-control']); ?>

                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Rest', __('Models/Invoice.Rest')); ?>

                                <?php echo Form::text('Rest', null, ['class' => 'form-control']); ?>

                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('RawFile', __('Models/Invoice.File')); ?>

                                <?php echo Form::file('RawFile', ['class' => 'form-control']); ?>

                            </div>



                        </div>


                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-lg btn-success"><?php echo e(__('Buttons.Save')); ?></button>
                            <button class="btn btn-lg btn-default"><?php echo e(__('Buttons.Cancel')); ?></button>
                        </div>

                    <?php echo Form::close(); ?>

                </div>
            </div>

        </div>



    </div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/xselect2-bootstrap.min.css')); ?>">

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Invoices/createRaw.blade.php ENDPATH**/ ?>