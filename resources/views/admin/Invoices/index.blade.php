@extends('adminlte::page')
@section('title', 'الفواتير')

@section('content_header')
    <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> الفواتير </h1>
@stop


@section('content')

<div class="main-tbl" style="overflow:auto;">
    <table class="table table-striped" style="min-width: 1000px">
        <thead class="text-center">
        <tr style="color: #FFF;background-color: #5b75b5">
            <th scope="col">الفاتوره</th>
            <th scope="col">تم انشاؤه فى</th>
            <th scope="col">اسم العميل</th>
            <th scope="col">الفرع</th>
            <th scope="col">اسم الموظف</th>
            <th scope="col">المبلغ</th>
            <th scope="col">الرصيد</th>
            <th scope="col">الوضع</th>
            <th scope="col"><input type="checkbox"></th>
            <th scope="col">اجراءات</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <tr>
            <th class="text-info">DFII</th>
            <td>٢٠/١٠/٢٠٢٠</td>
            <td class="text-info">السيد حسين</td>
            <td> جده </td>
            <td class="text-info"> كريم سالم </td>
            <td>  SAR 1,500 </td>
            <td> SAR 1,500  </td>
            <td>  <span class="badge badge-success p-2 text-center" style="width: 80px">مدفوعة</span> </td>
            <td><input type="checkbox"> </td>
            <td>
                <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a>
                <a title="حذف" href="" class="text-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <tr>
            <th class="text-info">DFII</th>
            <td>٢٠/١٠/٢٠٢٠</td>
            <td class="text-info">السيد حسين</td>
            <td> جده </td>
            <td class="text-info"> كريم سالم </td>
            <td>  SAR 1,500 </td>
            <td> SAR 1,500  </td>
            <td>  <span class="badge badge-danger p-2 text-center" style="width: 80px">غير مدفوعة</span> </td>
            <td><input type="checkbox"> </td>
            <td>
                <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a>
                <a title="حذف" href="" class="text-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>



@stop