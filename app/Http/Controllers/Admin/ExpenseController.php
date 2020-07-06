<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ExpenseDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateExpenseRequest;
use App\Http\Requests\Admin\UpdateExpenseRequest;
use App\Repositories\Admin\ExpenseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

class ExpenseController extends AppBaseController
{
    /** @var  ExpenseRepository */
    private $expenseRepository;

    public function __construct(ExpenseRepository $expenseRepo)
    {
        $this->expenseRepository = $expenseRepo;
    }

    /**
     * Display a listing of the Expense.
     *
     * @param ExpenseDataTable $expenseDataTable
     * @return Response
     */
    public function index(ExpenseDataTable $expenseDataTable)
    {
        return $expenseDataTable->render('admin.expenses.index');
    }

    /**
     * Show the form for creating a new Expense.
     *
     * @return Response
     */
    public function create()
    {
        $market_places = $this->expenseRepository->GetDataForSelect('marketplaces');
        $categories = $this->expenseRepository->GetDataForSelect('expenses_categories');
        $sub_categories = $this->expenseRepository->GetDataForSelect('expenses_sub_categories');
        return view('admin.expenses.create',compact('market_places','categories','sub_categories'));
    }

    /**
     * Store a newly created Expense in storage.
     *
     * @param CreateExpenseRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenseRequest $request)
    {
        $input = $request->all();

        $expense = $this->expenseRepository->create($input);

        Flash::success('Expense saved successfully.');

        return redirect(route('admin.expenses.index'));
    }

    /**
     * Display the specified Expense.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $expense = $this->expenseRepository->find($ID );

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        return view('admin.expenses.show')->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified Expense.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $expense = $this->expenseRepository->find($ID );

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        return view('admin.expenses.edit')->with('expense', $expense);
    }

    /**
     * Update the specified Expense in storage.
     *
     * @param  int              $ID
     * @param UpdateExpenseRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateExpenseRequest $request)
    {
        $expense = $this->expenseRepository->find($ID );

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        $expense = $this->expenseRepository->update($request->all(), $ID );

        Flash::success('Expense updated successfully.');

        return redirect(route('admin.expenses.index'));
    }

    /**
     * Remove the specified Expense from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $expense = $this->expenseRepository->find($ID );

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        $this->expenseRepository->delete($ID );

        Flash::success('Expense deleted successfully.');

        return redirect(route('admin.expenses.index'));
    }

}
