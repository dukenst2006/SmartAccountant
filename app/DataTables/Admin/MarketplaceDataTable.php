<?php

namespace App\DataTables\Admin;

use App\Models\Marketplace;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MarketplaceDataTable extends DataTable
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
            ->addColumn('Logo', function($data) { return '<img src="https://picsum.photos/200/300" alt="" width="100" height="100">';})
            ->addColumn('action','admin.marketplaces.datatables_actions')
            ->rawColumns(['Logo', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Marketplace  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Marketplace $model)
    {
        return $model->newQuery();
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
            ->addAction(['width' => '120px', 'printable' => true])
            ->parameters([
                'dom' => 'Bfrtip',
                'stateSave' => true,
                'order' => [[0, 'desc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-primary btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-warning btn-sm no-corner',],
                    ['extend' => 'postExcel', 'className' => 'btn btn-success btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-danger btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-warning btn-sm no-corner',],
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
            ['data' => 'MarketplaceOwnerID', 'name' => 'MarketplaceOwnerID', 'title' => 'id'],
            'Name',
            'Country',
            'City',
            'SupervisorPhoneNumber',
            'Address',
            'TaxNumber',
            'Email',
            'Latitude',
            'Longitude',
            'CompanyRegisterImage',
            'Logo'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'marketplaces_datatable_'.time();
    }
}
