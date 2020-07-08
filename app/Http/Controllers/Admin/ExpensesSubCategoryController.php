<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ExpensesSubCategoryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateExpensesSubCategoryRequest;
use App\Http\Requests\Admin\UpdateExpensesSubCategoryRequest;
use App\Repositories\Admin\ExpensesSubCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ExpensesSubCategoryController extends AppBaseController
{
    /** @var  ExpensesSubCategoryRepository */
    private $expensesSubCategoryRepository;

    public function __construct(ExpensesSubCategoryRepository $expensesSubCategoryRepo)
    {
        $this->expensesSubCategoryRepository = $expensesSubCategoryRepo;
    }

    /**
     * Display a listing of the ExpensesSubCategory.
     *
     * @param ExpensesSubCategoryDataTable $expensesSubCategoryDataTable
     * @return Response
     */
    public function index(ExpensesSubCategoryDataTable $expensesSubCategoryDataTable)
    {
        return $expensesSubCategoryDataTable->render('admin.expenses_sub_categories.index');
    }

    /**
     * Show the form for creating a new ExpensesSubCategory.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->expensesSubCategoryRepository->GetDataForSelect('expenses_categories');
        return view('admin.expenses_sub_categories.create',compact('categories'));
    }

    /**
     * Store a newly created ExpensesSubCategory in storage.
     *
     * @param CreateExpensesSubCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateExpensesSubCategoryRequest $request)
    {
        $input = $request->all();

        $expensesSubCategory = $this->expensesSubCategoryRepository->create($input);

        Flash::success('Expenses Sub Category saved successfully.');

        return redirect(route('admin.expensesSubCategories.index'));
    }

    /**
     * Display the specified ExpensesSubCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id )
    {
        $expensesSubCategory = $this->expensesSubCategoryRepository->find($id );

        if (empty($expensesSubCategory)) {
            Flash::error('Expenses Sub Category not found');

            return redirect(route('admin.expensesSubCategories.index'));
        }

        return view('admin.expenses_sub_categories.show')->with('expensesSubCategory', $expensesSubCategory);
    }

    /**
     * Show the form for editing the specified ExpensesSubCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id )
    {
        $expensesSubCategory = $this->expensesSubCategoryRepository->find($id );

        if (empty($expensesSubCategory)) {
            Flash::error('Expenses Sub Category not found');

            return redirect(route('admin.expensesSubCategories.index'));
        }

        return view('admin.expenses_sub_categories.edit')->with('expensesSubCategory', $expensesSubCategory);
    }

    /**
     * Update the specified ExpensesSubCategory in storage.
     *
     * @param  int              $id
     * @param UpdateExpensesSubCategoryRequest $request
     *
     * @return Response
     */
    public function update($id , UpdateExpensesSubCategoryRequest $request)
    {
        $expensesSubCategory = $this->expensesSubCategoryRepository->find($id );

        if (empty($expensesSubCategory)) {
            Flash::error('Expenses Sub Category not found');

            return redirect(route('admin.expensesSubCategories.index'));
        }

        $expensesSubCategory = $this->expensesSubCategoryRepository->update($request->all(), $id );

        Flash::success('Expenses Sub Category updated successfully.');

        return redirect(route('admin.expensesSubCategories.index'));
    }

    /**
     * Remove the specified ExpensesSubCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id )
    {
        $expensesSubCategory = $this->expensesSubCategoryRepository->find($id );

        if (empty($expensesSubCategory)) {
            Flash::error('Expenses Sub Category not found');

            return redirect(route('admin.expensesSubCategories.index'));
        }

        $this->expensesSubCategoryRepository->delete($id );

        Flash::success('Expenses Sub Category deleted successfully.');

        return redirect(route('admin.expensesSubCategories.index'));
    }
}
