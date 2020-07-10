@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('expenses.expenses_subCat')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <form class="form-inline" action="{{route('admin.expenses-categories.store')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$expensesCategory['id']}}" name="cat_id">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="name" id="name" value="{{old('name')}}" placeholder="{{__('Add new')}}">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>


                        <div class="row mr-auto">
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a class="btn btn-primary" href="{{route('admin.expenses-categories.index')}}"><i class="fa fa-list"></i></a>
                </div>
                <div class="card-body" style="overflow: auto">
                    <table id="bills" class="table-striped table">
                        <thead>
                        <tr>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        @foreach($expensesCategory->subCats as $item)
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-primary ml-2" href="{{route('admin.expenses-categories.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                    <form class="form-inline" action="{{route('admin.expenses-categories.destroy', $item)}}" method="post" onsubmit="return confirm('{{__('Are you sure ?')}}')">
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
