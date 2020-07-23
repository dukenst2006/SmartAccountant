<?php

namespace App\Repositories\Admin;

use App\{
    Models\BondsVouchers,
    Models\Product
};
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BondsVouchersRepository
 * @package App\Repositories\Admin
 * @version July 22, 2020, 12:31 am UTC
*/

class BondsVouchersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID',
        'ProductID',
        'ClientName',
        'Quantity',
        'BondDate'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BondsVouchers::class;
    }

    /**
     * Create Bond record
     *
     * @param string $customername
     * @param string $bonddate
     * @param array  $bill
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function createNewBondVoucher(string $customername, string $bonddate, array $bill)
    {
        BondsVouchers::create([
            "MarketplaceOwnerID" => 1,
            "ProductID" => $bill['product_no'],
            "ClientName" => $customername,
            "Quantity" => $bill['product_qty'],
            "BondDate" => $bonddate
        ]);

        $this->updateProductQuantityAfterChange($bill['product_no'], $bill['product_qty']);

        return true;
    }

    /**
     * Update Product Quantity after bonding finished
     *
     * @param int $product_no
     * @param int $product_qty
     *
     * @return bool
     */
    private function updateProductQuantityAfterChange(int $product_no, int $product_qty)
    {
        $product = Product::find($product_no);

        $quantityAfterChange = $product->Quantity - $product_qty;

        $product->update(['Quantity' => $quantityAfterChange]);

        return true;
    }
}
