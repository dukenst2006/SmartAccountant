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
                <div class="card-body overflow-auto" style="max-height: 500px;">
                    <div class="card-body">
                        <?php echo Form::open(['route' => 'admin.productmoves.move.to', 'method' => 'post']); ?>


                            <?php echo Form::token(); ?>


                            <div class="form-group col-md-12">

                                <!-- Product Field -->
                                <div class="form-group col-sm-6">
                                    <label for="productselection">
                                        ادخل اسم المنتج او الباركود
                                    </label>
                                    <select name="ProductID" class="form-control select2-selection--single" id="productselection"></select>
                                </div>

                                <!-- Marketplaceid Field -->
                                <div class="form-group col-sm-6">
                                    <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

                                    <?php echo Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']); ?>

                                </div>

                               <!-- Quantity Field -->
                                <div class="form-group col-sm-6">
                                    <?php echo Form::label('Quantity', __('Models/Product.Quantity')); ?>

                                    <?php echo Form::number('Quantity', null, ['class' => 'form-control']); ?>

                                </div>

                                <!-- Submit Field -->
                                <div class="form-group col-sm-12">
                                    <button type="submit" name="MovementType" value="Warehouse" class="btn btn-primary">
                                        <?php echo e(__('Models/ProductMovement.WarehouseToInventory')); ?>

                                    </button>
                                    <br>
                                    <br>
                                    <button type="submit" name="MovementType" value="Inventory" class="btn btn-success">
                                        <?php echo e(__('Models/ProductMovement.InventoryToWarehouse')); ?>

                                    </button>
                                    <br>
                                    <br>
                                    <a href="/Admin"
                                       class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
                                </div>



                            <?php echo Form::close(); ?>

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

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        var _token = "<?php echo e(csrf_token()); ?>";
        var app = new Vue({
            el: '#root',
            data: {
                customrename: '',
                notes: '',
                bonddate:'',
                invoice_products: [],
                products:[],
                
            },
            methods: {

                resetdata() {
                    this.invoice_products = [];
                    this.customrename = "";
                    this.bonddate = "";
                },

                storebill() {
                    if (this.customrename == '' || this.invoice_products.length == null) {
                        swal.fire("خطأ!",
                            "<b>تأكد من ادخال</b>" +
                            "<ul style='direction: rtl; font-weight: 800; '>" +
                            "<li>اسم موظف</li>" +
                            "<li>اصناف الفاتورة</li>" +
                            "</ul>"
                            ,
                            "error");
                    } else {


                        // let $this = $("#btnFetch");
                        // $this.button('loading');
                        // $this.prop("disabled", true);
                        // $this.data('original-text', $this.html());
                        // $this.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`);


                        $.ajax({
                            type: "post",
                            url: "<?php echo e(url('Admin/BondVoucher/Store')); ?>",
                            dataType: 'json',
                            'contentType': 'application/json',

                            data:
                                JSON.stringify({
                                    'customername': this.customrename,
                                    'deliverday':this.deliverday,
                                    'bonddate':this.bonddate,
                                    'billitems': this.invoice_products,
                                    '_token': _token
                                }),

                        })
                            .done(data => {
                                swal.fire("Invoice", "Invoice successfully Created!", "success");
                                let $this = $("#btnFetch");
                                $this.prop("disabled", false);
                                $this.html($this.data('original-text'));
                                this.resetdata();
                                $("#printf").attr("src", "invoice/print/" + data.invoice_id);

                            })
                            .fail(function (data) {
                                swal.fire("Invoice !", "Make Sure From Your Data", "error");
                                let $this = $("#btnFetch");
                                $this.prop("disabled", false);
                                $this.html($this.data('original-text'));
                            });


                    }


                },

                addNewRow(ele) {
                    var product = this.products.filter((item) => {
                        return item.id === parseInt(ele.currentTarget.getAttribute('id'))
                    });
                    if ((this.invoice_products.filter(d => d.product_no === product[0].id).length) != 0) {
                        var ar2 = this.invoice_products.filter(d => d.product_no === product[0].id).slice();
                        ar2[0].product_qty += 1;
                    } else {

                        this.invoice_products.push({
                            product_no: product[0]['id'],
                            product_name: product[0]['Name'],
                            product_qty: 1,
                        });
                    }

                },
                deleteRow(index, invoice_product) {
                    var idx = this.invoice_products.indexOf(invoice_product);
                    console.log(idx, index);
                    if (idx > -1) {
                        this.invoice_products.splice(idx, 1);
                    }
                },




            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/xselect2-bootstrap.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/ProductsMoves/index.blade.php ENDPATH**/ ?>