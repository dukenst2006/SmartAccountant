@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a href="{{route('admin.marketplaceOwner.create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a>
        <div class="card m-2">
            <div class="card-header">
                <a class="btn btn-success" href="#">المشتركين الفعالين 30</a>
                <a class="btn btn-danger" href="{{route('admin.marketplaceOwner.index')}}?statue=ended ">المشتركين منتهي الاشتراك
                    {{@App\Models\MarketplaceOwner::EndedOwners()->count()}}
                </a>
            </div>
            <div class="card-body">
                <table class="table-bordered  table text-center">
                    <thead class="thead-dark">
                    <th>{{__('branch.name')}}</th>
                    <th>{{__('اسم المتجر')}}</th>
                    <th>{{__('باقة الاشتراك')}}</th>
                    <th>{{__('بداية الاشتراك')}}</th>
                    <th>{{__('نهاية الاشتراك')}}</th>
                    <th>{{__('التحكم')}}</th>
                    </thead>
                    <tbody>
                    @foreach($marketplaceOwners as $M)
                        <tr>
                            <td>{{$M->user->Name}}</td>
                            <td>{{$M->user->settings->AppName ?? "غير معروف"}}</td>
                            <td>لم تحدد</td>
                            <td>{{$M->created_at->format('Y-m-d')}}</td>
                            <td>{{$M->user->settings->ProgramEndDate}}</td>
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
