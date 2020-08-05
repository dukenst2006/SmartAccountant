@extends('adminlte::page')
@section('title', 'السندات')

@section('content_header')
@stop

@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                فلتر
            </div>
            <div class="card-body p-2">
                <form class="p-3" action="{{route('admin.bondsreport')}}" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">{{__('Safe.From')}}</label>
                                <input type="date" class="form-control" name="from">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">{{__('Safe.To')}}</label>
                                <input type="date" class="form-control" name="to">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">{{__('بحث')}}</button>
                </form>
            </div>
        </div>



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

        @if(!$BondAmounts->isEmpty())


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
    @else
            <div class="row text-center"><h3 class="text-center my-3 w-100"> لا توجد اي سندات مضافة</h3></div>

 @endif


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

