@extends('adminlte::page')
@section('content')
    <div class="container pt-3">


        <div class="row col-12">
            <div class="col-3 animated bounceInUp">


                <div class="info-box bg-info">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Dashboard.Capital')}}</h4>
                        <h4 class="info-box-number">
                                  500,000 ر.س
                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-hand-holding-usd"></i>
                    </span>

                </div>





            </div>




            <!-- ./col -->
            <div class="col-3 animated bounceInDown">

                <div class="info-box bg-success">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Dashboard.Profits')}}</h4>
                        <h4 class="info-box-number">
                                  784,548 ر.س
                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-chart-line"></i>
                    </span>

                </div>

            </div>
            <!-- ./col -->
            <div class="col-3 animated bounceInUp">

                <div class="info-box bg-warning">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Dashboard.Sales')}}</h4>
                        <h4 class="info-box-number">
                                       24,489
                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-file-invoice-dollar"></i>
                    </span>

                </div>



            </div>
            <!-- ./col -->
            <div class="col-3 animated bounceInDown">
                <!-- small box -->
                <div class="info-box bg-danger">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Dashboard.Losses')}}</h4>
                        <h4 class="info-box-number">
                                  53,963 ر.س
                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-angle-double-down"></i>
                    </span>

                </div>
            </div>
            <!-- ./col -->
        </div>






        <div class="row animated flipInX">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">


                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                    </div>
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-2x  fa-cog"></i></span>

                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                        <span class="info-box-text">المنتجات</span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-2x  fa-boxes"></i></span>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                        <b class="info-box-text">عدد المتاجر</b>
                        <span class="info-box-number">760</span>
                    </div>
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-w-2  fa-shopping-cart"></i></span>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">

                    <div class="info-box-content">
                        <b class="info-box-text">عدد الموظفين</b>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-2x fa-user-tie"></i></span>

                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>



        <div class="col-md-12">
            <p class="text-center">
                <strong>Sales: 1 Jan, 2020 - 30 Dec, 2020</strong>
            </p>

            <div class="chart">


                <div id="chart" style="height: 300px; width: 1072px;" height="300" width="1072">

                    {!! $usersChart->container() !!}

                </div>
            </div>

        </div>






    </div>
@endsection


@section('customejs')
    {!! $usersChart->script() !!}
@endsection
