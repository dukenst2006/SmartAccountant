@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
@stop

@section('content')


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
                                {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
                                {!! Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']) !!}
                            </div>


                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit(__('Buttons.Create'), ['class' => 'btn btn-primary']) !!}
                                <a href="/Admin"
                                   class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
                            </div>


                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection

@section('customejs')



    <script>
        var _token = "{{ csrf_token() }}";
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        $.fn.select2.defaults.set("theme", "bootstrap");
        $('#productselection').select2({
            theme: "bootstrap",
            width: null,
            containerCssClass: ':all:',
            cache: true,
            ajax: {
                placeholder: 'Search for a Products',
                url: '{{route('product.LiveSearch')}}',
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
                "</div>"
            );
            $container.find(".select2-result-Product__name").text('Name : ' + product.Name);
            $container.find(".select2-result-Product__barcode").text('Barcode : ' + product.Barcode);
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
@endsection

@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('css/xselect2-bootstrap.min.css')}}">

@endsection
