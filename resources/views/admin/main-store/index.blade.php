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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('products.Products')}} - {{__('Main store')}}</h3>
                    <div class="card-tools">
                        <a class="btn btn-primary" href="{{route('admin.products.create')}}"><i class="fa fa-plus"></i></a>
                    </div>
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
                        @foreach(\App\MainStore::MainStore()->products as $index=>$item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item->group['name']}}</td>
                                <td>{{$item->sub_group['name']}}</td>
                                <td>{{$item['quantity']}}</td>
                                <td>{{$item['quantity_type']}}</td>
                                <td>{{$item['buying_price']}}</td>
                                <td>{{$item['selling_price']}}</td>
                                <td>{{$item['lower_price']}}</td>
                                <td>@if($item['img'])<img style="width: 75px;height: 75px;" src="{{asset($item['img'])}}" alt="">@endif</td>
                                <td>{{$item['expired_at']}}</td>
                                <td>{{$item['bar_code']}}</td>
                                <td>{{$item['can_sell_unavailable']}}</td>
                                <td class="d-flex">
                                    <a href="{{route('admin.products.edit', $item)}}" class="btn btn-primary m-1"><i class="fa fa-edit"></i></a>
                                    <form class="m-1" action="{{route('admin.products.destroy', $item)}}" method="post" onsubmit="return confirm('{{trans('Are you sure ?')}}')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$item->id}}"><i class="fa fa-sign-in"></i></button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{__("Send to branch ")}}</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.distribute-product', $item)}}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="number" name="quantity" id="quantity" class="form-control" placeholder="{{__('Quantity')}} ...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="branch_id">{{__('Please select branch')}}</label>
                                                            <select class="form-control" name="branch_id" id="branch_id">
                                                                @foreach(\App\Brench::all() as $item)
                                                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">{{__("Send to branch ")}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


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

