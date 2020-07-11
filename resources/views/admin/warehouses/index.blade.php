@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
    <h1>المخزن الرئيسي</h1>
@stop

@section('content')
    {{-- Cards --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{__('Models/Warehouse.CardTitle')}}</h3>
        </div>
        <div class="card-body card-body table-responsive p-0">

            <div class="col-3 animated bounceInUp">

                <div class="info-box bg-warning">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Models/Warehouse.ProductCount')}}</h4>
                        <h4 class="info-box-number">

                            {{ $warehouse->products_count }}

                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x  fa-boxes"></i>
                    </span>

                </div>



            </div>

            @include('flash::message')
            @include('admin.warehouses.table')




        </div>
    </div>



@endsection

