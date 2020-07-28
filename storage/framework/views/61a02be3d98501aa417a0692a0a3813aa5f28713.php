
<?php $__env->startSection('title', 'New Bond'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>سند جديد</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center animated bounceInLeft">

        <div class="col-md-8">
            <h2 class="mb-4 text-center" style="font-weight: 800;">إذن صرف كمية من المخزن </h2>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">منتجات المخزن الرئيسي</h3>
                </div>
                <div class="card-body overflow-auto" style="max-height: 200px; padding: 10px !important;">
                    <div class="card-body">
                        <div class="form-group col-md-12">
                            <label for="productselection">
                                قائمة المنتجات
                            </label>
                            <select class="form-control select2-selection--single" id="productselection"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="root">
        <div class="row animated bounceInUp">
            <div class="col-12">
                <div class="card" style="font-family: 'Cairo', sans-serif;font-weight: 900;">
                    <div class="card-header">
                        <h3 class="card-title">تفاصيل الفاتورة</h3>
                    </div>
                    <div class="card-body p-0 " style="padding: 10px !important;">
                        <div class="row">
                            <div class="row col-sm-12 justify-content-center">

                                <div class="form-group " style="direction: rtl;width: 609px;">

                                    <label class="form-check-label float-right" for="cusname"> اسم الموظف</label>


                                    <input name="cusname" id="cusname" type="text" placeholder="اسم الموظف"
                                           v-model="customrename" class=" text-center form-control input-lg mw-50"
                                           style="    font-weight: 800;">
                                    <!-- Date Field -->
                                    <div class="form-group">
                                        <?php echo Form::label('Date','التاريخ'); ?>

                                        <?php echo Form::date('Date', null, ['class' => 'form-control','id'=>'Date', 'v-model'=>'bonddate'  ]); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <table style="direction: rtl;" id="product_table"
                                       class="table table-bordered table-hover dataTable dtr-inline calculateclass"
                                       role="grid">
                                    <thead>
                                    <tr class="text-center" role="row">
                                        <th class="text-center" tabindex="0" rowspan="1"> كود الصنف
                                        </th>
                                        <th class="text-center" tabindex="0">
                                            اسم الصنف
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            الكميه
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            ملاحظات
                                        </th>

                                        <th class="text-center" tabindex="0" rowspan="1">
                                            اجراء
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="product_Body">

                                    <tr class='text-center' role='row'
                                        v-for="(invoice_product, k) in invoice_products" :key="k">
                                        <td v-text="invoice_product.product_no" id='td_barcode'></td>
                                        <td v-text="invoice_product.product_name" id='td_name'></td>
                                        <td><input
                                                   v-model="invoice_product.product_qty" type='number'
                                                   class='text-center text-bold' id='td_quantity' value='1' min='0'
                                                   step='1'></td>

                                        <td>
                                            <textarea v-model="notes"  class='text-center text-bold' id='td_Notes'>
                                            </textarea>

                                        </td>

                                        <td><span class='text-center text-red'></span>
                                            <i style="cursor: pointer;" class="fas fa-plus fa-trash text-red"
                                               @click="deleteRow(k, invoice_product)"></i>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>


        <div class="row text-center animated bounceInDown ">
            <div class="col-md-12" style="font-family: 'Cairo SemiBold',serif;">

                <button @click="resetdata" id="cleardata" class="btn btn-danger btn-sm  float-left"
                        style="font-family: cairo, serif; font-weight: 700;">
                    <i class="fas fa-fw fa-trash"></i>
                    تفريغ

                </button>

                <button @click="storebill" id="btnFetch" class="btn btn-success btn-lg"
                        style="font-family: cairo, serif; font-weight: 700;">

                    <i class="fas fa-fw fa-save"></i>
                    حفظ                 </button>


            </div>
        </div>


    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
    <script>
        var _token = "<?php echo e(csrf_token()); ?>";
        $.ajaxSetup({headers: {'csrftoken': '<?php echo e(csrf_token()); ?>'}});
        $.fn.select2.defaults.set( "theme", "bootstrap" );
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
                "<div class='select2-result-Product clearfix'>" + "<i class='float-right fas fa-plus-circle fa-2x ml-2 text-green'></i>" +
                "<div class='select2-result-Product__name'></div>" +
                "<div class='select2-result-Product__barcode'></div>" +
                "</div>"
            );
            $container.find(".select2-result-Product__name").text('Name : ' + product.Name);
            $container.find(".select2-result-Product__barcode").text('Barcode : ' + product.Barcode);
            return $container;
        }

        $("#productselection").on('select2:select', function (selection) {
            document.getElementById('root').__vue__.invoice_products.push({
                product_no: selection.params.data.id,
                product_name: selection.params.data.Name,
                product_price: selection.params.data.SellingPrice,
                product_qty: 1,
                line_total:selection.params.data.SellingPrice,
            });


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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Bonds/createbondvoucher.blade.php ENDPATH**/ ?>