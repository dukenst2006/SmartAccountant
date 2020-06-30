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
                <div class="card-header ">
                    <h4 class="card-title">{{__('Edit')}}</h4>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{route('admin.expenses.index')}}"><i class="fa fa-list"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.expenses.update', $expense)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cat_id">{{__('expenses.main_cat')}}</label>
                                    <select class="form-control" name="cat_id" id="cat_id">
                                        @foreach(\App\ExpensesCategory::all()->filter(function ($value){if (!$value['cat_id']) return $value;}) as $item)
                                            <option {{$item->id==$expense['cat_id'] ? 'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="cat_id"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sub_cat_id">{{__('expenses.sub_cat')}}</label>
                                    <select class="form-control" name="sub_cat_id" id="sub_cat_id">
                                        @foreach(\App\ExpensesCategory::all()->filter(function ($value){if ($value['cat_id']) return $value;}) as $item)
                                            <option {{$item->id==$expense['sub_cat_id'] ? 'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="sub_cat_id"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="type">{{__('expenses.expense_type')}}</label>
                                    <input class="form-control" type="text" name="type" id="type" value="{{$expense['type']}}">
                                    <x-error name="type"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="amount">{{__('Price')}}</label>
                                    <input class="form-control" type="number" step="0.1" name="amount" id="amount" value="{{$expense['amount']}}">
                                    <x-error name="amount"></x-error>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">{{__('Description')}}</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{$expense['description']}}</textarea>
                                    <x-error name="description"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="date">{{__('Date')}}</label>
                                    <input class="form-control" type="date" name="date" id="bill_number" value="{{$expense['date']}}">
                                    <x-error name="date"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Save')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
