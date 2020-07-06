<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Employee;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeeDataTable extends DataTable
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
            ->addColumn('ProfileImage', function($data) { return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';})
            ->addColumn('IdentityImage', function($data) { return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';})
            ->addColumn('EmploymentContractImage', function($data) { return '<img src="https://picsum.photos/100/100" alt="" width="50" class=" img-fluid">';})
            ->addColumn('action', 'admin.employees.datatables_actions')
            ->rawColumns(['ProfileImage','IdentityImage','EmploymentContractImage','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model)
    {
        $ss = $model->newQuery();
        return $model->newQuery()->getRelation('users');
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

  //   new Column(['data'=>'customer', 'name'=>'user.name']),
            'MarketplaceID',
            'MarketplaceOwnerID',
            'Nationality',
            'JobTitle',
            'NationalID',
            'PhoneNumber',
            'ProfileImage',
            'IdentityImage',
            'EmploymentContractImage',
            'IBAN',
            'Sex',
            'Salary'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'employees_datatable_' . time();
    }
}
