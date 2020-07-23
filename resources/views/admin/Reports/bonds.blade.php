@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
@stop

@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

                {!! $ammountchart->container() !!}

            </div>


    </div>

    </div>
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

                {!! $voucherchart->container() !!}

            </div>


    </div>
    </div>

    <div class=" row">
        <div class="col-6">
            <table class="table-bordered table">
                <thead class="thead-light">
                    <th>#</th>
                    <th>{{__('Models/Bonds.Columns.MarketPlaceOwner')}}</th>
                    <th>{{__('Models/Bonds.Columns.ClientName')}}</th>
                    <th>{{__('Models/Bonds.Columns.Amount')}}</th>
                    <th>{{__('Models/Bonds.Columns.BondDate')}}</th>
                </thead>
                <tbody>
                    @foreach($BondAmounts as $B)
                        <td>{{$B->id}}</td>
                        <td>{{$B->MarketPlace}}</td>
                        <td>{{$B->ClientName}}</td>
                        <td>{{$B->ammount}}</td>
                        <td>{{$B->ammount_date}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <table class="table-bordered table">
                <thead class="thead-light">
                    <th>#</th>
                    <th>{{__('Models/Bonds.Columns.MarketPlaceOwner')}}</th>
                    <th>{{__('Models/Bonds.Columns.Products')}}</th>
                    <th>{{__('Models/Bonds.Columns.ClientName')}}</th>
                    <th>{{__('Models/Bonds.Columns.Quantity')}}</th>
                    <th>{{__('Models/Bonds.Columns.BondDate')}}</th>
                </thead>
                <tbody>
                    @foreach($BondVouchers as $B)
                        <tr>
                            <td>{{$B->id}}</td>
                            <td>{{$B->MarketPlaceOwner}}</td>
                            <td>{{$B->Product->Name}}</td>
                            <td>{{$B->ClientName}}</td>
                            <td>{{$B->Quantity}}</td>
                            <td>{{$B->BondDate}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">
{{--        @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

        </div>

@endsection

@section('customejs')
    {!! $ammountchart->script() !!}
    {!! $voucherchart->script() !!}
@endsection

