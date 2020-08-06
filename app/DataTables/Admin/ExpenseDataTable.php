<?php

namespace App\DataTables\Admin;

use App\Models\Expense;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ExpenseDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.expenses.datatables_actions')
            ->rawColumns(['action']);
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Expense $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Expense $model)
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
            new Column (['data'=>'id', 'name'=>'id' ,'title'=>'#']),
            new Column(['data'=>'marketplace.Name', 'name'=>'marketplace.Name','title'=>__('Models/Marketplace.Name')]),
            new Column(['data'=>'expensescategory.Name', 'name'=>'expensescategory.Name','title'=>__('Models/ExpensesCategory.Name')]),
            new Column(['data'=>'expensessubcategory.Name', 'name'=>'expensessubcategory.Name','title'=>__('Models/ExpensesSubCategory.Name')]),
            new Column(['data'=>'Name', 'name'=>'Name','title'=>__('Models/Expenses.Name')]),
            new Column(['data'=>'Price', 'name'=>'Price','title'=>__('Models/Expenses.Price')]),
            new Column(['data'=>'Description', 'name'=>'Description','title'=>__('Models/Expenses.Description')]),
            new Column(['data'=>'Date', 'name'=>'Date','title'=>__('Models/Expenses.Date')]),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'expenses_datatable_' . time();
    }
}
