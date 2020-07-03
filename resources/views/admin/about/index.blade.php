@extends('adminlte::page')
@section('content')


<div class="alert alert-danger alert-dismissible pr-3">
    <h1><i class="icon fas fa-exclamation-circle"></i>  تعليمات مهمة</h1>
     هنا يمكنك اضافة تعليمات
</div>


<div class="alert alert-success alert-dismissible pr-3">
    <h4> <i class="icon fas fas fas fa-shield-alt"></i> انت الان تستخدم نسخه مرخصة 1.0</h4>
</div>


    <div>

        <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>م</th>
                        <th>الخدمة</th>
                        <th>التكلفة</th>
                        <th>الطلب</th>
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
