<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class WarehouseChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */

public $backgroundColor =  [
'rgb(255, 99, 132)',
'rgb(54, 162, 235)',
'rgb(255, 206, 86)',
'rgb(75, 192, 192)',
'rgb(153, 102, 255)',
'rgb(255, 159, 64)',
'rgb(111, 223, 252)',
'rgb(201, 158, 62)',
'rgb(55, 28, 53)',
'rgb(57, 136, 191)',
'rgb(145, 35, 14)',
'rgb(43, 2, 96)',
'rgb(201, 24, 86)',
'rgb(227, 3, 210)',
];
    public function __construct()
    {
        parent::__construct();
    }
}
