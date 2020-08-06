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
            ->addColumn('CompanyRegisterImage', function($data) {
                return $this->fileColumn($data->CompanyRegisterImage);
            })
            ->addColumn('CommercialRegister', function($data) {
                return $this->fileColumn($data->CommercialRegister);
            })
            ->addColumn('LeaseContract', function($data) {
                return $this->fileColumn($data->LeaseContract);
            })
            ->addColumn('Attachment', function($data) {
                return $this->fileColumn($data->Attachment);
            })
            ->addColumn('action','admin.marketplaces.datatables_actions')
            ->rawColumns([
                'CompanyRegisterImage',
                'CommercialRegister',
                'LeaseContract',
                'Attachment',
                'action',
                ]);
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
    public function fileColumn($data){
        return "<a class='btn btn-success' href='".asset($data == null ? "https://www.elegantthemes.com/blog/wp-content/uploads/2020/02/000-404.png" :'storage/'.$data)."' download> <i class='fa fa-save'></i> </a>";
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
            new Column(['data'=>'id', 'name'=>'id' ,'title'=>'#']),
            new Column(['data'=>'Name', 'name'=>'Name' ,'title'=>__('Models/Marketplace.Name')]),
            new Column(['data'=>'Country', 'name'=>'Country' ,'title'=>__('Models/Marketplace.Country')]),
            new Column(['data'=>'City', 'name'=>'City' ,'title'=>__('Models/Marketplace.City')]),
            new Column(['data'=>'SupervisorPhoneNumber', 'name'=>'SupervisorPhoneNumber' ,'title'=>__('Models/Marketplace.SupervisorPhoneNumber')]),
            new Column(['data'=>'Address', 'name'=>'Address' ,'title'=>__('Models/Marketplace.Address')]),
            new Column(['data'=>'TaxNumber', 'name'=>'TaxNumber' ,'title'=>__('Models/Marketplace.TaxNumber')]),
            new Column(['data'=>'Email', 'name'=>'Email' ,'title'=>__('Models/Marketplace.Email')]),
            new Column(['data'=>'SafeBalance', 'name'=>'SafeBalance' ,'title'=>__('Models/Marketplace.SafeBalance')]),
            new Column(['data'=>'CompanyRegisterImage', 'name'=>'CompanyRegisterImage' ,'title'=>__('Models/Marketplace.CompanyRegisterImage')]),
            new Column(['data'=>'CommercialRegister', 'name'=>'CommercialRegister' ,'title'=>__("General.Marketplace.CommercialRegister")]),
            new Column(['data'=>'LeaseContract', 'name'=>'LeaseContract' ,'title'=>__("General.Marketplace.LeaseContract")]),
            new Column(['data'=>'Attachment', 'name'=>'Attachment' ,'title'=>__("General.Marketplace.Attachment")]),













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
