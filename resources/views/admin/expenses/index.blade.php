@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('adminPanel.Expenses')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header {{session('locale')=='ar' ? 'text-left' : 'text-right'}}">
                    <a class="btn btn-success" href="{{route('admin.expenses.create')}}"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body" style="overflow: auto">
                    <table id="bills" class="table-striped table">
                        <thead>
                        <tr>
                            <th>{{__('expenses.main_cat')}}</th>
                            <th>{{__('expenses.sub_cat')}}</th>
                            <th>{{__('expenses.expense_type')}}</th>
                            <th>{{__('Price')}}</th>
                            <th>{{__('Description')}}</th>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        @foreach(\App\Expense::all() as $item)
                            <tr>
                                <td>{{$item->cat['name']}}</td>
                                <td>{{$item->subCat['name']}}</td>
                                <td>{{$item['type']}}</td>
                                <td>{{$item['amount']}}</td>
                                <td>{{$item['description']}}</td>
                                <td>{{$item['date']}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-primary ml-2" href="{{route('admin.expenses.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                    <form class="form-inline" action="{{route('admin.expenses.destroy', $item)}}" method="post" onsubmit="return confirm('{{__('Are you sure ?')}}')">
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
