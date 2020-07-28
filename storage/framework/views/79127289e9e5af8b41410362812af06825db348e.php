<?php $__env->startSection('title', 'Stocks'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row justify-content-center animated bounceInLeft">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">المنتجات</h3>
                </div>
                <div class="card-body overflow-auto" style="max-height: 200px;">
                    <div class="card-body">
                        <div class="form-group col-md-12">
                            <label for="productselection">
                                ادخل اسم المنتج او الباركود
                            </label>
                            <select class="form-control select2-selection--single" id="productselection"></select>


                            <!-- Marketplaceid Field -->
                            <div class="form-group col-sm-6">
                                <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

                                <?php echo Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']); ?>

                            </div>

                            <!-- Product Movement Field -->
                            <div class="form-group col-sm-6">
                                <?php echo Form::label('ProductMovementID', __('Models/ProductMovement.ProductMovementType')); ?>

                                <?php echo Form::select('ProductMovementID',$productmovements  , null,['class' => 'form-control']); ?>

                            </div>


                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                <?php echo Form::submit(__('Buttons.Create'), ['class' => 'btn btn-primary']); ?>

                                <a href="/Admin"
                                   class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
                            </div>


                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>



    <script>
        var _token = "<?php echo e(csrf_token()); ?>";
        $.ajaxSetup({headers: {'csrftoken': '<?php echo e(csrf_token()); ?>'}});
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#productselection').select2({
            theme: "bootstrap",
            width: null,
            containerCssClass: ':all:',
            cache: true,
            ajax: {
                placeholder: 'Search for a Products',
                url: '<?php echo e(route('product.LiveSearch')); ?>',
                dataType: 'json',

                data: function (params) {
                    var query = {
                        q: params.term,
                    };
                    return query;
                },
                processResults: function (data) {
                    return {
                        results: data.results,
                    };
                },
            },
            templateResult: formatRepo,
            minimumInputLength: 1,
        });

        function formatRepo(product) {
            if (product.loading) {
                return product.name;
            }
            var $container = $(
                "<div class='select2-result-Product clearfix'>" + "<i class='float-right fas fa-plus text-green'></i>" +
                "<div class='select2-result-Product__name'></div>" +
                "<div class='select2-result-Product__barcode'></div>" +
                "<div class='select2-result-IsInWarehouse text-red text-bold'></div>" +
                "</div>"
            );
            $container.find(".select2-result-Product__name").text('Name : ' + product.Name);
            $container.find(".select2-result-Product__barcode").text('Barcode : ' + product.Barcode);
            if( product.WarehouseID!=null)
            $container.find(".select2-result-IsInWarehouse").text('المنتج بالمخزن الرئيسي');
            return $container;
        }

        $("#productselection").on('select2:select', function (selection) {
            // document.getElementById('root').__vue__.invoice_products.push({
            //     product_no: selection.params.data.id,
            //     product_name: selection.params.data.Name,
            //     product_price: selection.params.data.SellingPrice,
            //     product_qty: 1,
            //     line_total:selection.params.data.SellingPrice,
            // });


        });


    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/xselect2-bootstrap.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/ProductsMoves/index.blade.php ENDPATH**/ ?>