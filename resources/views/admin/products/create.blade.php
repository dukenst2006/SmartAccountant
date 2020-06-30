@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('products.Products')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="card-title">{{__('Add new')}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">{{__('Name')}}</label>
                                    <input class="form-control" type="tel" name="name" id="name" value="{{old('name')}}">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="group-container">
                            <div class="col-6" id="main-group">
                                <div class="form-group">
                                    <label for="group_id">{{__('groups.main_group')}}</label>
                                    <select name="group_id" class="form-control" id="group_id">
                                        @foreach(\App\Group::all()->filter(function ($value){if ($value['group_id']==null) return $value;}) as $item)
                                            <option {{old('group_id')==$item['id'] ? 'selected':''}} value="{{$item->id}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="group_id"></x-error>
                                </div>
                            </div>
                            <div class="col-6" id="sub-group">
                                <div class="form-group">
                                    <label for="sub_group_id">{{__('groups.sub_group')}}</label>
                                    <select name="sub_group_id" class="form-control" id="sub_group_id">
                                        @foreach(\App\Group::all()->filter(function ($value){if ($value['group_id']!=null) return $value;}) as $item)
                                            <option {{old('sub_group_id')==$item['id'] ? 'selected':''}} value="{{$item->id}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="sub_group_id"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="quantity">{{__('products.quantity')}}</label>
                                    <input class="form-control" type="number" step=".1" name="quantity" id="quantity" value="{{old('quantity')}}">
                                    <x-error name="quantity"></x-error>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="quantity_type">{{__('products.quantity_type')}}</label>
                                    <select class="form-control" type="text" name="quantity_type" id="quantity_type">
                                        <option {{old('quantity_type')=='piece' ? 'selected':''}} value="piece">{{__('products.piece')}}</option>
                                        <option {{old('quantity_type')=='Carton' ? 'selected':''}} value="Carton">{{__('products.carton')}}</option>
                                        <option {{old('quantity_type')=='grain' ? 'selected':''}} value="grain">{{__('products.grain')}}</option>
                                    </select>
                                    <x-error name="quantity_type"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="selling_price">{{__('products.selling_price')}}</label>
                                    <input class="form-control" type="text" name="selling_price" id="selling_price" value="{{old('selling_price')}}">
                                    <x-error name="selling_price"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="buying_price">{{__('products.buying_price')}}</label>
                                    <input class="form-control" type="text" name="buying_price" id="buying_price" value="{{old('buying_price')}}">
                                    <x-error name="buying_price"></x-error>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="lower_price">{{__('products.lower_price')}}</label>
                                    <input class="form-control" type="text" name="lower_price" id="lower_price" value="{{old('lower_price')}}">
                                    <x-error name="lower_price"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="img_temp">{{__('Image')}}</label>
                                    <input class="form-control" type="file" name="img_temp" id="img_temp" value="{{old('img_temp')}}">
                                    <x-error name="img_temp"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="expired_at">{{__('products.expires_at')}}</label>
                                    <input class="form-control" type="date" name="expired_at" id="expired_at" value="{{old('expired_at')}}">
                                    <x-error name="expired_at"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="bar_code">{{__('products.bar_code')}}</label>
                                    <input class="form-control" type="text" name="bar_code" id="bar_code" value="{{old('bar_code')}}">
                                    <x-error name="bar_code"></x-error>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="can_sell_unavailable">{{__('products.can_sell_unavailable')}}</label>
                                    <select class="form-control" name="can_sell_unavailable" id="can_sell_unavailable">
                                        <option value="1">{{__("Yes")}}</option>
                                        <option value="0">{{__("No")}}</option>
                                    </select>
                                    <x-error name="can_sell_unavailable"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Save')}}</button>
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
