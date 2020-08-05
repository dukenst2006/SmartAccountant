@extends('adminlte::page')
@section('title', 'عن البرنامج')
@section('content')


<div class="alert alert-danger alert-dismissible pr-3">
    <h2><i class="icon fas fa-exclamation-circle"></i> {{__('General.About.Important instruction')}}</h2>

</div>


<div class="alert alert-success alert-dismissible pr-3">
    <h4 class="mb-0"> <i class="icon fas fas fas fa-shield-alt"></i>
        {{__("General.About.You now using licensed version")}}
        1.0</h4>
</div>


    <div>

        <table class="table table-hover table-border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__("General.About.Service")}}</th>
                        <th>{{__("General.About.Cost")}}</th>
                        <th>{{__("General.About.Order")}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> تحديثات مهمة</td>
                        <td>مجانية</td>
                        <td><h4><a class="text-info"> <i class="far fa-arrow-alt-circle-left"></i> </a></h4></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> ترقية للإصدار الرابع</td>
                        <td>100 ريال</td>
                        <td><h4><a class="text-info"> <i class="far fa-arrow-alt-circle-left"></i> </a></h4></td>
                    </tr>
                </tbody>
            </table>

        </div>

@endsection
