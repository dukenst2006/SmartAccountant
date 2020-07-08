<?php

namespace App\DataTables\Admin;

use App\Models\Marketplace;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MarketplaceDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        $dataTable = new EloquentDataTable($query);

        return $dataTable

            ->addColumn('Logo', function($data) { return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';})
            ->addColumn('CompanyRegisterImage', function($data) { return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';})
            ->addColumn('action','admin.marketplaces.datatables_actions')
            ->rawColumns(['Logo', 'CompanyRegisterImage','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \\App\Models\Marketplace $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Marketplace $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
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
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            new Column(['data'=>'Name', 'name'=>'Name' ,'title'=>__('Models/Marketplace.Name')]),
            new Column(['data'=>'Country', 'name'=>'Country' ,'title'=>__('Models/Marketplace.Country')]),
            new Column(['data'=>'City', 'name'=>'City' ,'title'=>__('Models/Marketplace.City')]),
            new Column(['data'=>'SupervisorPhoneNumber', 'name'=>'SupervisorPhoneNumber' ,'title'=>__('Models/Marketplace.SupervisorPhoneNumber')]),
            new Column(['data'=>'Address', 'name'=>'Address' ,'title'=>__('Models/Marketplace.Address')]),
            new Column(['data'=>'TaxNumber', 'name'=>'TaxNumber' ,'title'=>__('Models/Marketplace.TaxNumber')]),
            new Column(['data'=>'Email', 'name'=>'Email' ,'title'=>__('Models/Marketplace.Email')]),
            new Column(['data'=>'Latitude', 'name'=>'Latitude' ,'title'=>__('Models/Marketplace.Latitude')]),
            new Column(['data'=>'Longitude', 'name'=>'Longitude' ,'title'=>__('Models/Marketplace.Longitude')]),
            new Column(['data'=>'SafeBalance', 'name'=>'SafeBalance' ,'title'=>__('Models/Marketplace.SafeBalance')]),
            new Column(['data'=>'CompanyRegisterImage', 'name'=>'CompanyRegisterImage' ,'title'=>__('Models/Marketplace.CompanyRegisterImage')]),
            new Column(['data'=>'Logo', 'name'=>'Logo' ,'title'=>__('Models/Marketplace.Logo')]),













        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'marketplaces_datatable_' . time();
    }
}
