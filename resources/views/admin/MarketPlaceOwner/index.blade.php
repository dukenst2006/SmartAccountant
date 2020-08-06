@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a href="{{route('admin.marketplaceOwner.create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a>
        <div class="card m-2">
            <div class="card-header">
                {{__('Models/Bonds.Columns.MarketPlaceOwner')}}
            </div>
            <div class="card-body">
                <table class="table-bordered  table text-center">
                    <thead class="thead-dark">
                        <th>#</th>
                        <th>{{__('branch.name')}}</th>
                        <th>{{__('General.fields.Phonenumber')}}</th>
                        <th>{{__('')}}</th>
                    </thead>
                    <tbody>
                        @foreach($marketplaceOwners as $M)
                            <tr>
                                <td>{{$M->id}}</td>
                                <td>{{$M->user->Name}}</td>
                                <td>{{$M->PhoneNumber}}</td>
                                <td>
                                    <form action="{{route('admin.marketplaceOwner.destroy',$M)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('admin.marketplaceOwner.edit',$M)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$marketplaceOwners->links()}}
            </div>
        </div>
    </div>
@endsection
