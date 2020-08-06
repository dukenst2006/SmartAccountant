@extends('adminlte::page')
@section('title', 'تقارير المنتجات')

@section('content_header')
    <h1>تقارير المنتجات</h1>
@stop

@section('content')

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> أعلي 10 منتجات مبيعاً هذا الشهر</strong>
            </p>
            <div id="chart">

                {!! $productchart->container() !!}

            </div>



        </div>

    </div>
    <div class="row justify-content-center">


    <div class="col-md-8">




            <div id="chart">

               {!! $productchart->container() !!}

            </div>


    </div>
        <div class="card">
            <div class="card-header">
                {{__('Models/Product.Products')}}
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                    <th>#</th>
                    <th>{{__("Models/Product.Name")}}</th>
                    <th>{{__("Models/Product.Quantity")}}</th>
                    <th>{{__("Models/Product.PurchasingPrice")}}</th>
                    <th>{{__("Models/Product.SellingPrice")}}</th>
                    <th>{{__("Models/Product.LowPrice")}}</th>
                    <th>{{__("Models/Product.ExpiryDate")}}</th>
                    <th>{{__("Models/Product.ProductCategoryID")}}</th>
                    <th>{{__("Models/Product.ProductSubCategoryID")}}</th>
                    <th>{{__("عدد مرات البيع")}}</th>
                    <th>{{__("قيمة الارباح من المنتج")}}</th>
                    </thead>
                    <tbody>
                    @foreach($products as $P)
                        <tr>
                            <td>{{$P->id}}</td>
                            <td>{{$P->Name}}</td>
                            <td>{{$P->Quantity}}</td>
                            <td>{{$P->PurchasingPrice}}</td>
                            <td>{{$P->SellingPrice}}</td>
                            <td>{{$P->LowPrice}}</td>
                            <td>{{$P->ExpiryDate}}</td>
                            <td>{{$P->ProductCategory->Name}}</td>
                            <td>{{$P->ProductSubCategory->Name}}</td>
                            <td>{{$P->invoices->count()}}</td>
                            <td>{{$P->invoices->count() * ( $P->SellingPrice - $P->PurchasingPrice)}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$products->links()}}
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">
{{--       @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

        </div>

@endsection

@section('customejs')
{{--    {!! $productchart->script() !!}--}}
@endsection

