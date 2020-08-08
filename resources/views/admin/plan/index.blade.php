@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a class="btn btn-success" href="{{route('plan.create')}}"><i class="fa fa-plus"></i></a>
        <div class="card mt-2">
            <div class="card-header">
                {{__('General.All')}}
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <th>#</th>
                        <th>{{__('Models/User.Name')}}</th>
                        <th>{{__('Models/Expenses.Price')}}</th>
                        <th>{{__('')}}</th>
                    </thead>
                    <tbody>
                        @foreach($plans as $i => $plan)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{$plan->name}}</td>
                                <td>{{$plan->price}}</td>
                                <td>
                                    <form action="{{route('plan.destroy',$plan)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <a href="{{route('plan.edit',$plan)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
