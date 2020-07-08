@extends('adminlte::page')
@section('title', 'Safe')

@section('content_header')
    <h1>الخزنة</h1>
@stop

@section('content')
    <div id="root">
    <div class="row col-12  justify-content-center">
        <div class="row col-md-6 col-sm-6 col-6">


            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-2x fa-sort-amount-down-alt index-val"></i></span>

                    <div class="info-box-content">
                        <h1 class="info-box-text">الخسائر</h1>
                        <h2 class="info-box-number">41,410</h2>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="fas fa-2x fa-sort-amount-up index-val"></i></span>

                    <div class="info-box-content">
                        <h1 class="info-box-text">الأرباح</h1>
                        <h2 class="info-box-number">41,410</h2>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>




        </div>

        <div class="row justify-content-center">
            <div class="card card-primary col-8">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row"><h4 class="col-12 text-right">اختار تاريخ</h4>
                        <div class="form-group col-4"><label for="">من</label> <input type="date" name="from" id="from"
                                                                                      class="form-control"></div>
                        <div class="form-group col-4"><label for="">الي</label> <input type="date" name="to" id="to"
                                                                                       class="form-control"></div>
                        <div class="form-group col-4"><label for="">اسم الفرع</label> <select name="branch" id=""
                                                                                              class="form-control">
                                <option value="all">الكل</option>
                                <option value="1">الفرع الاول</option>
                            </select></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>




    </div>

@endsection
