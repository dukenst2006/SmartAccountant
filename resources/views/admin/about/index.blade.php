@extends('adminlte::page')
@section('content')

<div class="py-2 px-3 hager">
    <h3 class="mb-2">   <i class="fas fa-exclamation-circle"></i>    تعليمات مهمة </h3>
    <p class="mb-0">-  هنا يمكنك اضافة تعليمات</p>
</div>
<div class="mt-1">
    <p class="copy-am"><i class="fas fa-shield-alt"></i>   انت الان تستخدم نسخه مرخصة 1.0   </p>
    <p class="text-success px-3"> * لايوجد تحديثات حالية</p>
</div>

    <div>
        <div class="card-body storage_table">
            <table id="salaries" class="table table-bordered text-center">
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
    </div>
@endsection
