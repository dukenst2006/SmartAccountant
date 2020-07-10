@extends('adminlte::page')
@section('title', 'FinicalReports')

@section('content_header')
    <h1>التقارير المالية</h1>
@stop

@section('content')

        <div class="row col-12  justify-content-center">
            <div class="row col-md-6 col-sm-6 col-6">
                <div class="col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-danger  ">
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-sort-amount-down-alt index-val"></i>
                    </span>
                        <div class="info-box-content">
                            <h1 class="info-box-text">الخسائر</h1>
                            <h2 class="info-box-number">
                            99999
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fas fa-2x fa-sort-amount-up index-val"></i></span>

                        <div class="info-box-content">
                            <h1 class="info-box-text">الأرباح</h1>
                            <h2 class="info-box-number">
                            99999
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>


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
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1'])
                .responsive()
                .beginAtZero()
                .legend({ position: 'bottom' })
            //    .title('This is a sample chart using chartisan!')
               // .datasets([{ type: 'line', fill: false }, 'bar']),
        });

    </script>
@endsection
