@extends('adminlte::page')
@section('content')
    <div class="container pt-3">

        <div class="card p-3">
            <form action="{{route('admin.ProductTableView')}}" method="get">
                <div class="form-group">
                    <label for="">{{__('Models/Marketplace.Name')}}</label>
                    <select name="MarketID" class="form-control">
                        <option value="">{{__('General.All')}}</option>
                        @foreach(@App\Models\Marketplace::all() as $M)
                            <option value="{{$M->id}}">{{$M->Name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success">{{__('money.search')}}</button>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="{{route('admin.products.create')}}"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-bordered m-2">
                    <thead class="thead-light">
                    <th>#</th>
                    <th>{{__('Models/Product.Name')}}</th>
                    <th>{{__('Models/Product.LowPrice')}}</th>
                    <th>{{__('Models/Product.ExpiryDate')}}</th>
                    <th>{{__('Models/Product.Quantity')}}</th>
                    <th>{{__('Models/Product.PurchasingPrice')}}</th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->Name}}</td>
                            <td>{{$product->LowPrice}}</td>
                            <td>{{$product->ExpiryDate}}</td>
                            <td>{{$product->Quantity}}</td>
                            <td>{{$product->PurchasingPrice}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if($products->count() > 0)
                    {{$products->links()}}
                @endif
            </div>
        </div>
    </div>
@endsection
