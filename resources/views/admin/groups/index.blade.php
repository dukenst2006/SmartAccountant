@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('groups.group_mange')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline justify-content-between" action="{{route('admin.groups.store')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @endif" type="tel" name="name" id="name" value="{{old('name')}}" placeholder="{{__('Add new')}}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body" style="overflow: auto">
                    <table id="bills" class="table-striped table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        @foreach(\App\Group::all()->filter(function ($value){if ($value['group_id']==null) return $value;}) as $index => $item)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item['name']}}
                                    <div class="badge badge-info">{{$item->subGroups()->count()}}</div>
                                </td>
                                <td class="d-flex">
                                    <a class="btn btn-success ml-2" href="{{route('admin.groups.show', $item)}}"><i class="fa fa-plus"></i></a>
                                    <a class="btn btn-primary ml-2" href="{{route('admin.groups.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                    <form class="form-inline" action="{{route('admin.groups.destroy', $item)}}" method="post" onsubmit="return confirm('{{__('Are you sure ?')}}')">
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
