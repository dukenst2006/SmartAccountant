@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <h3 class="col-12 text-center mb-3">{{__('human_r.title')}}</h3>
        <div class="row">
            <div class="col-4">
                <a href="{{route('admin.employees.index')}}">
                    <div class="card bg-info-gradient p-2">
                        <h4 class="col-12 text-center">
                            {{__('human_r.all_employees')}}
                        </h4>
                        <h6 class="col-12 text-center">
                            {{@App\Employee::all()->count()}}
                        </h6>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="{{route('admin.stoned_emps')}}">
                    <div class="card bg-danger-gradient p-2">
                        <h4 class="col-12 text-center">
                            {{__('human_r.stoned_employees')}}
                        </h4>
                        <h6 class="col-12 text-center">
                            {{@App\Employee::all()->where('status','stoned')->count()}}
                        </h6>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="{{route('admin.active_emps')}}">
                    <div class="card bg-success-gradient p-2">
                        <h4 class="col-12 text-center">
                            {{__('human_r.active_employees')}}
                        </h4>
                        <h6 class="col-12 text-center">
                            {{@App\Employee::all()->where('status','active')->count()}}
                        </h6>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="{{route('admin.employees.create')}}" class="btn btn-block btn-success">
                    {{__('employee.create')}}
                </a>
            </div>
            <div class="col-8">
                <form class="row" action="{{route('admin.brench_emps')}}" method="post">
                    @csrf
                    <div class="col=6">
                        <button class="btn btn-info btn-block col-12" id="search_btn" type="submit">
                            {{__('human_r.search in brench')}}
                        </button>
                    </div>
                    <di class="col-6">
                        <div class="form-group">
                            <select onchange="check()" name="brench_id" id="brench_id" class="form-control">
                                @foreach(@App\Brench::all() as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </di>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>{{__('human_r.salaries')}}</h4>
            </div>
            <div class="card-body">
                <table id="salaries" class="table table-bordered text-center">
                    <thead>
                        <td>{{__('human_r.brench name')}}</td>
                        <td>{{__('human_r.employees count')}}</td>
                        <td>{{__('human_r.salaries in brench')}}</td>
                    </thead>
                    @foreach(@App\Brench::all() as $b)
                        <tr>
                            <td>{{$b->name}}</td>
                            <td>{{$b->employees->count()}}</td>
                            <td>{{$b->employees->sum('salary')}}</td>
                        </tr>
                    @endforeach
                </table>
                <table class="table table-bordered text-center">
                    <tr>
                        <td colspan="2">{{__('human_r.all salaries')}}</td>
                        <td>{{@App\Employee::all()->sum('salary')}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
        if ($("#brench_id").val() !== "") {
            $('#search_btn').prop('disabled',false);
        }else{
            $('#search_btn').prop('disabled',true);
        }
        function check(){
            if ($("#brench_id").val() !== "") {
                $('#search_btn').prop('disabled',false);
            }
        }
    </script>
@endsection
@section('javascript')
    <x-datatable id="salaries"></x-datatable>
@endsection

