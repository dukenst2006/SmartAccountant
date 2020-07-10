@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('adminPanel.Invoices')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header {{session('locale')=='ar' ? 'text-left' : 'text-right'}}">
                    <a class="btn btn-success" href="{{route('admin.bills.create')}}"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body" style="overflow: auto">
                    <table id="bills" class="table-striped text-center table">
                        <thead>
                        <tr>
                            <th>{{__('bills.bill_number')}}</th>
                            <th>{{__('bills.bill_date')}}</th>
                            <th>{{__('bills.products_count')}}</th>
                            <th>{{__('bills.discount')}}</th>
                            <th>{{__('bills.bill way')}}</th>
                            <th>{{__('bills.bill statue')}}</th>
                            <th>{{__('bills.bill value')}}</th>
                            <th>{{__('bills.discount value')}}</th>
                            <th>{{__('bills.total')}}</th>
                            <th>{{__('bills.reward')}}</th>
                            <th>{{__('bills.employee name')}}</th>
                            <th>{{__('bills.branch_name')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        @foreach(\App\Bill::all() as $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['created_at']->format('Y-m-d')}}</td>
                                <td>{{$item['products']->count()}}</td>
                                <td>0</td>
                                <td>{{__('bills.'.$item['pay_way'])}}</td>
                                <td>{{__('bills.'.$item['pay_way'])}}</td>
                                <td>{{$item['products']->sum('selling_price')}}</td>
                                <td>0</td>
                                <td>{{$item['products']->sum('selling_price')}}</td>
                                <td>{{$item['products']->sum('selling_price') - $item['products']->sum('buying_price')}}</td>
                                <td>{{$item['employee']->name}}</td>
                                <td>{{$item['branch']->name}}</td>
                                <td class="d-flex">
{{--                                <a class="btn btn-primary ml-2" href="{{route('admin.bills.edit', $item)}}"><i class="fa fa-edit"></i></a>--}}
                                    <form class="form-inline" action="{{route('admin.bills.destroy', $item)}}" method="post" onsubmit="return confirm('{{__('Are you sure ?')}}')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <x-datatable id="bills"></x-datatable>
@endsection
