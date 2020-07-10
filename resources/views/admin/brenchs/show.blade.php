@extends('adminlte::page')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card overflow-auto">
                <div class="card-header">
                    <h3 class="card-title">{{$brench['name']}}</h3>
                    <div class="card-tools">
                        <a href="{{route('admin.brenchs.index')}}" class="btn btn-primary"><i class="fa fa-list"></i></a>
                    </div>
                </div>
                <div class="card-body" style="overflow: auto">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="name">{{trans('branch.name')}}</label>
                                <div type="text" value="" class="form-control">{{$brench['name']}}</div>
                            </div>
                            <div class="form-group">
                                <label for="country">{{trans('branch.country')}}</label>
                                <div type="text" class="form-control">{{$brench['country']}}</div>
                            </div>
                            <div class="form-group">
                                <label for="city">{{trans('branch.city')}}</label>
                                <div type="text" value="" class="form-control" name="city" id="city">{{$brench['city']}}</div>
                            </div>
                            <div class="form-group">
                                <label for="manger_phone">{{trans('branch.manger_phone')}}</label>
                                <div type="text" value="" class="form-control" name="manger_phone" id="manger_phone">{{$brench['manger_phone']}}</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="address">{{__('branch.address')}}</label>
                                <div class="form-control" name="address" id="address">{{$brench['address']}}"</div>
                            </div>
                            <div class="form-group">
                                <label for="tax_number">{{trans('branch.tax_number')}}</label>
                                <div type="text" value="" class="form-control" name="tax_number" id="tax_number">{{$brench['tax_number']}}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">{{trans('branch.email')}}</label>
                                <div type="text" value="" class="form-control" name="email" id="email">{{$brench['email']}}</div>
                            </div>
                            <div class="form-group">
                                <label for="long">{{trans('branch.long')}}</label>
                                <div type="text" value="" class="form-control" name="long" id="long">{{$brench['long']}}</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="lat">{{trans('branch.lat')}}</label>
                                <div type="text" value="" class="form-control" name="lat" id="lat">{{$brench['lat']}}</div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail w-100" src="{{asset($brench['tax_image'])}}" height="100px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{trans('products.Products')}} - {{$brench['name']}}</h3>
                </div>
                <div class="card-body" style="overflow: auto">
                    <table id="products" class="table-striped table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('Name')}}</th>
                            <th>{{trans('groups.main_group')}}</th>
                            <th>{{trans('groups.sub_group')}}</th>
                            <th>{{trans('products.quantity')}}</th>
                            <th>{{trans('products.quantity_type')}}</th>
                            <th>{{trans('products.buying_price')}}</th>
                            <th>{{trans('products.selling_price')}}</th>
                            <th>{{trans('products.lower_price')}}</th>
                            <th>{{trans('Image')}}</th>
                            <th>{{trans('products.expires_at')}}</th>
                            <th>{{trans('products.bar_code')}}</th>
                            <th>{{trans('products.can_sell_unavailable')}}</th>
                            <th>{{trans('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brench->products as $index=>$item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item->group['name']}}</td>
                                <td>{{$item->sub_group['name']}}</td>
                                <td>{{$item->pivot['quantity']}}</td>
                                <td>{{$item['quantity_type']}}</td>
                                <td>{{$item['buying_price']}}</td>
                                <td>{{$item['selling_price']}}</td>
                                <td>{{$item['lower_price']}}</td>
                                <td>@if($item['img'])<img style="width: 75px;height: 75px;" src="{{asset($item['img'])}}" alt="">@endif</td>
                                <td>{{$item['expired_at']}}</td>
                                <td>{{$item['bar_code']}}</td>
                                <td>{{$item['can_sell_unavailable']}}</td>
                                <td class="d-flex">
                                    <a href="{{route('admin.products.edit', $item)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('admin.products.destroy', $item)}}" method="post" onsubmit="return confirm('{{trans('Are you sure ?')}}')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <x-datatable id="products"></x-datatable>
@endsection

