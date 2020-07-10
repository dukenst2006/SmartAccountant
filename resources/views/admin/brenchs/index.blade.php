@extends('adminlte::page')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('branch.all_header')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card overflow-auto">
                <div class="card-body" style="overflow: auto">
                    <table id="brench" class="table table-bordered">
                        <thead>
                        <th>{{__('branch.name')}}</th>
                        <th>{{__('branch.country')}}</th>
                        <th>{{__('branch.city')}}</th>
                        <th>{{__('branch.address')}}</th>
                        <th>{{__('branch.manger_phone')}}</th>
                        <th>{{__('branch.tax_number')}}</th>
                        <th>{{__('branch.tax_image')}}</th>
                        <th>{{__('branch.email')}}</th>
                        <th>{{__('branch.long')}}</th>
                        <th>{{__('branch.lat')}}</th>
                        <th>{{__('employee.status')}}</th>
                        <th>{{__('branch.controller')}}</th>
                        </thead>
                        @foreach($brenchs as $brench)
                            <tr>
                                <td>{{$brench->name}}</td>
                                <td>{{$brench->country}}</td>
                                <td>{{$brench->city}}</td>
                                <td>{{$brench->address}}</td>
                                <td>{{$brench->manger_phone}}</td>
                                <td>{{$brench->tax_number}}</td>
                                <td>
                                    <img class="img-thumbnail w-75" src="{{asset($brench->tax_image)}}">
                                </td>
                                <td>{{$brench->email}}</td>
                                <td>{{$brench->long}}</td>
                                <td>{{$brench->lat}}</td>
                                <td>{{__('branch.'.$brench->status)}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-primary" href="{{route('admin.brenchs.show',$brench)}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-info" href="{{route('admin.brenchs.edit',$brench)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn {{$brench->status=='active' ? 'btn-success' : 'btn-warning'}}" href="{{route($brench->status == "stoned"?'admin.brench_activating':'admin.brench_stoning',$brench)}}">
                                        <i class="fa {{$brench->status=='active' ? 'fa-toggle-on' : 'fa-toggle-off'}}" ></i>
                                    </a>
                                    <form action="{{route('admin.brenchs.destroy',$brench)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            {{__('branch.delete')}}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-3">
    </div>
@endsection
@section('javascript')
    <x-datatable id="brench"></x-datatable>
@endsection

