<?php

namespace App\Http\Controllers\Admin;

use App\{
    Bonds,
    Models\Product
};
use Flash;
use App\Repositories\Admin\BondsRepository;
use App\Http\Controllers\AppBaseController;
use Response;


class BondsController extends AppBaseController
{

    /**
     * @var  \App\Repositories\Admin\BondsRepository
     * */
    private $BondsRepository;

    public function __construct(BondsRepository $BondsRepository)
    {
        $this->BondsRepository = $BondsRepository;
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
     * Store new bond into database
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
                    $this->BondsRepository->createNewBond(request()->customername, request()->bonddate, $bill);
                    return response()->json('success', 200);
                }

                return response()->json("A product with name " . $bill['product_name'] . " Quantity more big than the exists Quantity in Inventore", 400);
            }
        }
    }
}
