<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ExpensesCategoryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateExpensesCategoryRequest;
use App\Http\Requests\Admin\UpdateExpensesCategoryRequest;
use App\Repositories\Admin\ExpensesCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ExpensesCategoryController extends AppBaseController
{
    /** @var  ExpensesCategoryRepository */
    private $expensesCategoryRepository;

    public function __construct(ExpensesCategoryRepository $expensesCategoryRepo)
    {
        $this->expensesCategoryRepository = $expensesCategoryRepo;
    }

    /**
     * Display a listing of the ExpensesCategory.
     *
     * @param ExpensesCategoryDataTable $expensesCategoryDataTable
     * @return Response
     */
    public function index(ExpensesCategoryDataTable $expensesCategoryDataTable)
    {
        return $expensesCategoryDataTable->render('admin.expenses_categories.index');
    }

    /**
     * Show the form for creating a new ExpensesCategory.
     *
     * @return Response
     */
    public function create()
    {
        $marketplaces = $this->expensesCategoryRepository->GetDataForSelect('marketplaces');
        return view('admin.expenses_categories.create',compact('marketplaces'));
    }

    /**
     * Store a newly created ExpensesCategory in storage.
     *
     * @param CreateExpensesCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateExpensesCategoryRequest $request)
    {
        $input = $request->all();

        $expensesCategory = $this->expensesCategoryRepository->create($input);

        Flash::success('Expenses Category saved successfully.');

        return redirect(route('admin.expensesCategories.index'));
    }

    /**
     * Display the specified ExpensesCategory.
     *
     * @param  int $id
     *
     * @return Response
     */

    public function show($id )
    {
        $expensesCategory = $this->expensesCategoryRepository->find($id );

        if (empty($expensesCategory)) {
            Flash::error('Expenses Category not found');

            return redirect(route('admin.expensesCategories.index'));
        }

        return view('admin.expenses_categories.show')->with('expensesCategory', $expensesCategory);
    }

    /**
     * Show the form for editing the specified ExpensesCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id )
    {
        $expensesCategory = $this->expensesCategoryRepository->find($id );

        if (empty($expensesCategory)) {
            Flash::error('Expenses Category not found');

            return redirect(route('admin.expensesCategories.index'));
        }

        return view('admin.expenses_categories.edit')->with('expensesCategory', $expensesCategory);
    }

    /**
     * Update the specified ExpensesCategory in storage.
     *
     * @param  int              $id
     * @param UpdateExpensesCategoryRequest $request
     *
     * @return Response
     */
    public function update($id , UpdateExpensesCategoryRequest $request)
    {
        $expensesCategory = $this->expensesCategoryRepository->find($id );

        if (empty($expensesCategory)) {
            Flash::error('Expenses Category not found');

            return redirect(route('admin.expensesCategories.index'));
        }

        $expensesCategory = $this->expensesCategoryRepository->update($request->all(), $id );

        Flash::success('Expenses Category updated successfully.');

        return redirect(route('admin.expensesCategories.index'));
    }

    /**
     * Remove the specified ExpensesCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id )
    {
        $expensesCategory = $this->expensesCategoryRepository->find($id );

        if (empty($expensesCategory)) {
            Flash::error('Expenses Category not found');

            return redirect(route('admin.expensesCategories.index'));
        }

        $this->expensesCategoryRepository->delete($id );

        Flash::success('Expenses Category deleted successfully.');

        return redirect(route('admin.expensesCategories.index'));
    }
}
