<?php

namespace App\Repositories;

use App\Models\{
    Invoice,
    InvoiceItem
};
use App\Repositories\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version July 13, 2020, 1:26 pm UTC
*/

class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceID',
        'UserID',
        'Total',
        'Paid',
        'Rest',
        'PaymentTypeID',
        'IsRaw',
        'RawFile',
        'acc_number'
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
        return Invoice::class;
    }

    /**
     * Create Raw Invoice record
     *
     * @param array $inputs
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function createNewRawInvoice(array $inputs)
    {
        $user_id = auth()->user()->id;
        $model = $this->model->newInstance($inputs);
        
        $model->MarketplaceID = $inputs['MarketplaceID'];
        $model->CustomerName = $inputs['CustomerName'];
        $model->UserID = auth()->user()->id || $user_id;
        $model->Total = $inputs['Total'];
        $model->Paid = $inputs['Paid'];
        $model->Rest = $inputs['Rest'];
        $model->PaymentTypeID = 1;
        $model->IsRaw = true;
        $model->RawFile = \Storage::put('RawInvoices', $inputs['RawFile']);
        $model->save();

        return $model;
    }

    public function getAllRawInvoices()
    {
        return Invoice::where('isRaw', true);
    }

    public function deleteRawInvoice(int $id)
    {
        Invoice::where('id',$id)->delete();
    }

    /**
     * Create Sale Invoice record
     *
     * @param array $inputs
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function createNewSaleInvoice(array $inputs)
    {
        dd($inputs);
        $user_id = auth()->user()->id;
        $model = $this->model->newInstance($inputs);
        
        $model->MarketplaceID = 1;
        $model->UserID = auth()->user()->id || $user_id;
        $model->Total = $this->_calculateTotalWithVAT($inputs);
        $model->Paid = $inputs['paid'];
        $model->Rest = $inputs['reset'];
        $model->PaymentTypeID = 1;
        $model->IsRaw = false;
        $model->save();

        foreach ($inputs['billitems'] as $item) {
            InvoiceItem::create([
                'InvoiceID' => $model->id,
                'ProductID' => $item['product_no'],
                'QuantityTypeID' => 1,
                'Quantity' => $item['product_qty'],
                'UnitPrice' => $item['product_price'],
                'Total' => $item['line_total']
            ]);
        }

        return $model;
    }

    private function _calculateTotalWithVAT(array $inputs) : float
    {
        $total = 0;

        foreach ($inputs['billitems'] as $product) {

            if(\App\Models\Product::find($product['product_no'])->ExcludeFromVAT != 1) {
                $total += $item['line_total'];
            }

        }
        
        return ($total * auth()->user()->settings->VAT) + $inputs['total'];
    }
}
