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
                <div class="card-header ">
                    <h4 class="card-title">{{__('Add new')}}</h4>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{route('admin.bills.index')}}"><i class="fa fa-list"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.bills.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="branch_id">{{__('bills.branch_name')}}</label>
                                    <select class="form-control" name="branch_id" id="branch_id">
                                        @foreach(\App\Brench::all() as $item)
                                            <option {{$item->id==$bill['branch_id'] ? 'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="branch_id"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">{{__('Phone')}}</label>
                                    <input class="form-control" type="tel" name="phone" id="phone" value="{{$bill['phone']}}">
                                    <x-error name="phone"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address">{{__('Address')}}</label>
                                    <input class="form-control" type="text" name="address" id="address" value="{{$bill['address']}}">
                                    <x-error name="address"></x-error>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="tax_number">{{__('bills.tax_number')}}</label>
                                    <input class="form-control" type="tel" name="tax_number" id="tax_number" value="{{$bill['tax_number']}}">
                                    <x-error name="tax_number"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="bill_number">{{__('bills.bill_number')}}</label>
                                    <input class="form-control" type="text" name="bill_number" id="bill_number" value="{{$bill['bill_number']}}">
                                    <x-error name="bill_number"></x-error>
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
@section('javascript')
    <x-datatable id="bills"></x-datatable>
@endsection
