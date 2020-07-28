@extends('adminlte::page')
@section('title', 'تقارير المنتجات')

@section('content_header')
    <h1>تقارير المنتجات</h1>
@stop

@section('content')

    @include('flash::message')
    <div class="row justify-content-center">


    <div class="col-md-10">



    </div>
        <div class="card">
            <div class="card-header">
                {{__('Models/Product.Products')}}
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>

                    </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <td></td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$products->links()}}
            </div>
        </div>
    </div>






@endsection

@section('customejs')
    {!! $productchart->script() !!}
@endsection

