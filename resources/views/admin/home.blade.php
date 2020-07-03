@extends('adminlte::page')
@section('content')
    <div class="container pt-3">


        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>اجمالي الطلبات علي المتاجر</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-chart-area"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>






        <div class="row">
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

        <div class="row">


            <div id="chart" style="height: 300px;">


            </div>


        </div>







    </div>
@endsection


@section('customejs')
<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sample_chart')",
    });

</script>
@endsection
