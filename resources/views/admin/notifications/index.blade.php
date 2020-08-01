@extends('adminlte::page')
@section('title', 'الاشعارات')

@section('content_header')
    <h1><i class="fas fa-dollar-sign"></i> الإشعارات </h1>
@stop

@section('content')
    <div>
        <div class="main-tbl" style="overflow:auto;">
        <table class="table table-bordered  table-striped">
            <tr  class=" text-white main-bg-blu-color">
                <th>مسلسل</th>
                <th>الإشعار</th>
                <th>التاريخ</th>
            </tr>
            @if(!empty($notifications) && $notifications->count() != 0)
            @foreach($notifications as $notification)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $notification->data['message'] }}</td>
                    <td>{{ $notification->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">
                        لا توجد اشعارات
                    </td>
                </tr>
            @endif
        </table>
        </div>
    </div>
@endsection
