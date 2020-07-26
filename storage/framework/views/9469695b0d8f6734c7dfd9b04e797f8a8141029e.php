<?php $__env->startSection('title', 'Suppliers'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e(__('Models/SupplierInvoices.SupplierInvoice')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">

        
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title"><?php echo e(__('Models/SupplierInvoices.CraeteNewSupplierInvoice')); ?></h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="text-center">
                    <div class="card-body p-0 ">
                        <?php echo Form::open(['route' => 'admin.supplier-invoice.store', 'method' => 'post']); ?>

                            
                            <?php echo Form::token(); ?> 

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('SupplierID', __('Models/SupplierInvoices.Supplier')); ?>

                                <?php echo Form::select('SupplierID',$suppliers, null,['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('PaymentTypeID', __('Models/Invoice.PaymentTypeID')); ?>

                                <?php echo Form::select('PaymentTypeID',$payment_types, null,['class' => 'form-control']); ?>

                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Total', __('Models/SupplierInvoices.Total')); ?>

                                <?php echo Form::text('Amount', null, ['class' => 'form-control']); ?>

                            </div>



                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Paid', __('Models/SupplierInvoices.Paid')); ?>

                                <?php echo Form::text('Paid', null, ['class' => 'form-control']); ?>

                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                <?php echo Form::label('Rest', __('Models/SupplierInvoices.Rest')); ?>

                                <?php echo Form::text('Rest', null, ['class' => 'form-control']); ?>

                            </div>

                            <!-- Description Field -->
                            <div class="orm-group row col-sm-6 m-3">
                                <?php echo Form::label('note', __('Models/SupplierInvoices.note').':'); ?>

                                <?php echo Form::textarea('Description',  __('Models/SupplierInvoices.note') , ['class' => 'form-control']); ?>

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
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/suppliers/invoice/create.blade.php ENDPATH**/ ?>