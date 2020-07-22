<?php

namespace App\Http\Controllers\Admin;

use Flash;
use Response;
use App\Models\Product;
use App\Repositories\Admin\BondsVouchersRepository;
use App\Http\Controllers\AppBaseController;


class BondsController extends AppBaseController
{

    /**
     * @var  \App\Repositories\Admin\BondsVouchersRepository
     * */
    private $BondsVouchersRepository;

    public function __construct(BondsVouchersRepository $BondsVouchersRepository)
    {
        $this->BondsVouchersRepository = $BondsVouchersRepository;
    }

    public function BondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }




    public function CreateBondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }

    /**
     * Store new bond voucher into database
     * 
     * @return RESPONSE_JSON
     */
    public function storebondvoucher()
    {
        $billitems = request()->billitems;
        $productsIDs = array_column(request()->billitems, 'product_no');
        $products = Product::whereIn('id', $productsIDs)->get(); 

        foreach ($billitems as $key => $bill) {

            if($products[$key]->id == $bill['product_no']) {

                if($bill['product_qty'] <= $products[$key]->Quantity) {
                    $this->BondsVouchersRepository->createNewBondVoucher(request()->customername, request()->bonddate, $bill);
                    return response()->json('success', 200);
                }

                return response()->json("A product with name " . $bill['product_name'] . " Quantity more big than the exists Quantity in Inventore", 400);
            }
        }
    }
}
