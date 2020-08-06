<?php

namespace App\DataTables\Admin;

use App\Models\Product;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('Image', function ($data) {
                return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';
            })
            ->addColumn('action', 'admin.products.datatables_actions')
            ->rawColumns(['Image', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
    {
        return $model->newQuery()->with( ['marketplaceOwner.user:id,Name','productcategory:id,Name', 'productsubcategory:id,Name' ]);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [

                    [
                        'extend' => 'create',
                        'className' => 'btn btn-default btn-sm no-corner',
                        'text' => '<i class="fa fa-plus"></i> ' .__('Buttons.Create').''
                    ],
                    [
                        'extend' => 'export',
                        'className' => 'btn btn-default btn-sm no-corner',
                        'text' => '<i class="fa fa-download"></i> ' .__('Buttons.Export').''
                    ],
                    [
                        'extend' => 'print',
                        'className' => 'btn btn-default btn-sm no-corner',
                        'text' => '<i class="fa fa-print"></i> ' .__('Buttons.Print').''
                    ],
                    [
                        'extend' => 'reset',
                        'className' => 'btn btn-default btn-sm no-corner',
                        'text' => '<i class="fa fa-undo"></i> ' .__('Buttons.Reset').''
                    ],
                    [
                        'extend' => 'reload',
                        'className' => 'btn btn-default btn-sm no-corner',
                        'text' => '<i class="fa fa-sync-alt"></i> ' .__('Buttons.Reload').''
                    ],
                ],
            ]);
    }


    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            new Column([ 'data' => 'id', 'name' => 'id', 'title' => '#' ]),
            new Column([ 'data' => 'productcategory.Name', 'name' => 'productcategory.Name', 'title' => __('Models/Product.ProductCategoryID') ]),
            new Column([ "defaultContent"=> "-", 'data' => 'productsubcategory.Name', 'name' => 'productsubcategory.Name', 'title' => __('Models/Product.ProductSubCategoryID') ]),
            new Column([ 'data' => 'Name', 'name' => 'Name', 'title' => __('Models/Product.Name')]), new Column(['data' => 'Quantity', 'name' => 'Quantity', 'title' => __('Models/Product.Quantity')]),
            new Column([ 'data' => 'PurchasingPrice' , 'name' => 'PurchasingPrice' , 'title' => __('Models/Product.PurchasingPrice') ]),
            new Column([ 'data' => 'SellingPrice', 'name' => 'SellingPrice', 'title' => __('Models/Product.SellingPrice') ]),
            new Column(['data' => 'LowPrice', 'name' => 'LowPrice', 'title' => __('Models/Product.LowPrice')]),
            new Column(['data' => 'Image', 'name' => 'Image', 'title' => __('Models/Product.Image')]),
            new Column(['data' => 'ExpiryDate', 'name' => 'ExpiryDate', 'title' => __('Models/Product.ExpiryDate')]),
            new Column(['data' => 'Barcode', 'name' => 'Barcode', 'title' => __('Models/Product.Barcode')]),
            new Column(['data' => 'ExcludeFromVAT', 'name' => 'ExcludeFromVAT', 'title' => __('Models/Product.ExcludeFromVAT')]),
            new Column([ 'data' => 'UnlimitedQuantity', 'name' => 'UnlimitedQuantity', 'title' => __('Models/Product.UnlimitedQuantity') ]),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'products_datatable_'.time();
    }





    /**
     * Process dataTables needed render output.
     *
     * @param string $view
     * @param array $data
     * @param array $mergeData
     * @return mixed
     */
    public function render($view, $data = [], $mergeData = [])
    {
        if ($this->request()->ajax() && $this->request()->wantsJson()) {
            return app()->call([$this, 'ajax']);
        }

        if ($action = $this->request()->get('action') and in_array($action, $this->actions)) {
            if ($action == 'print') {
                return app()->call([$this, 'printPreview']);
            }

            return app()->call([$this, $action]);
        }

        return view($view, $data, $mergeData)->with($this->dataTableVariable, $this->getHtmlBuilder());
    }


}


