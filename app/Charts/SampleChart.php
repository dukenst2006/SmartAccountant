<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        return Chartisan::build()

            ->labels(['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'])
            ->dataset('المبيعات', [10000, 20000,30000,40000,50000,10000,30000,40000,70000,60000,65000,85000])
            ->dataset('حركات المخزن',  [11000, 8000,5000,6000,8000,10000,12000,20000,30000,15000,10000,50000])
            ->dataset('الخسائر',  [10000, 12000,13000,14000,18000,19000,20000,25000,26000,8000,7000,6000]);
    }
}
