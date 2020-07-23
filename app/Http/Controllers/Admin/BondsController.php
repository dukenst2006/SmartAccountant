<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\BondsAmmountRepository;
use Flash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Response;
use App\Models\Product;
use App\Repositories\Admin\{ BondsVouchersRepository};
use App\Http\Controllers\AppBaseController;


class BondsController extends AppBaseController
{

    /**
     * @var  BondsVouchersRepository
     * */
    private $BondsVouchersRepository;

    /**
     * @var  BondsAmmountRepository
     * */
    private $BondsAmmountRepository;

    public function __construct(BondsVouchersRepository $BondsVouchersRepository, BondsAmmountRepository $BondAmmountRepository)
    {
        $this->BondsVouchersRepository = $BondsVouchersRepository;
        $this->BondsAmmountRepository = $BondAmmountRepository;
    }

    public function bondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }




    public function CreateBondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }

    public function CreateBondAmmount()
    {

        return view('admin.Bonds.createbondamount');

    }

    /**
     * Store new bond voucher into database
     *
     * @return JsonResponse
     */
    public function storeBondVoucher()
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

    /**
     * Store new bond ammount into database
     *
     * @return RedirectResponse
     */
    public function storeBondAmmount()
    {
        $this->BondsAmmountRepository->create(request()->all());
        alert()->success('تم حفظ السند بنجاح');
        return back();
    }
}
