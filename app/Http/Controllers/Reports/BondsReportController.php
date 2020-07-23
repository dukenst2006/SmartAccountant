<?php

namespace App\Http\Controllers\Reports;
use App\Charts\BondsChart;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\BondsVouchersRepository;
use App\Repositories\BondsAmmountRepository;

class BondsReportController extends AppBaseController
{
    private $bondsammountrepository;
    private $bondsvouchersrepository;
    /** @var  BondsAmmountRepository */
    /** @var  BondsVouchersRepository */
    private $userRepository;


    public function __construct(BondsAmmountRepository $bondsammountRepo,BondsVouchersRepository $BondsVouchersRepo)
    {
        $this->bondsammountrepository = $bondsammountRepo;
        $this->bondsvouchersrepository = $BondsVouchersRepo;
    }
    public function index()
    {

        $ammountchart = new BondsChart();
        $ammounts =  $this->bondsammountrepository->all()->take(30);
        $ammountchart->labels($ammounts->pluck('ClientName'));
        $ammountchart->dataset('سندات الصرف', 'bar',$ammounts->pluck('Quantity'))->backgroundcolor('rgb(153, 102, 255)')->color("'rgb(153, 102, 255)'");


        $voucherchart = new BondsChart();
        $vouchers =  $this->bondsvouchersrepository ->all()->take(30);
        $voucherchart->labels($vouchers->pluck('client_name'));
        $voucherchart->dataset('سندات المبالغ', 'bar',$vouchers->pluck('ammount'))->backgroundcolor("rgb(255, 159, 64)")->color("rgb(255, 159, 64)");

        return view('admin.Reports.bonds',compact('ammountchart','voucherchart'));
    }

}
