<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductSubCategoryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductSubCategoryRequest;
use App\Http\Requests\Admin\UpdateProductSubCategoryRequest;
use App\Repositories\Admin\ProductSubCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductSubCategoryController extends AppBaseController
{
    /** @var  ProductSubCategoryRepository */
    private $productSubCategoryRepository;

    public function __construct(ProductSubCategoryRepository $productSubCategoryRepo)
    {
        $this->productSubCategoryRepository = $productSubCategoryRepo;
    }

    /**
     * Display a listing of the ProductSubCategory.
     *
     * @param ProductSubCategoryDataTable $productSubCategoryDataTable
     * @return Response
     */
    public function index(ProductSubCategoryDataTable $productSubCategoryDataTable)
    {
        return $productSubCategoryDataTable->render('admin.product_sub_categories.index');
    }

    /**
     * Show the form for creating a new ProductSubCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.product_sub_categories.create');
    }

    /**
     * Store a newly created ProductSubCategory in storage.
     *
     * @param CreateProductSubCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateProductSubCategoryRequest $request)
    {
        $input = $request->all();

        $productSubCategory = $this->productSubCategoryRepository->create($input);

        Flash::success('Product Sub Category saved successfully.');

        return redirect(route('admin.productSubCategories.index'));
    }

    /**
     * Display the specified ProductSubCategory.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $productSubCategory = $this->productSubCategoryRepository->find($ID );

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('admin.productSubCategories.index'));
        }

        return view('admin.product_sub_categories.show')->with('productSubCategory', $productSubCategory);
    }

    /**
     * Show the form for editing the specified ProductSubCategory.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $productSubCategory = $this->productSubCategoryRepository->find($ID );

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('admin.productSubCategories.index'));
        }

        return view('admin.product_sub_categories.edit')->with('productSubCategory', $productSubCategory);
    }

    /**
     * Update the specified ProductSubCategory in storage.
     *
     * @param  int              $ID
     * @param UpdateProductSubCategoryRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateProductSubCategoryRequest $request)
    {
        $productSubCategory = $this->productSubCategoryRepository->find($ID );

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('admin.productSubCategories.index'));
        }

        $productSubCategory = $this->productSubCategoryRepository->update($request->all(), $ID );

        Flash::success('Product Sub Category updated successfully.');

        return redirect(route('admin.productSubCategories.index'));
    }

    /**
     * Remove the specified ProductSubCategory from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $productSubCategory = $this->productSubCategoryRepository->find($ID );

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('admin.productSubCategories.index'));
        }

        $this->productSubCategoryRepository->delete($ID );

        Flash::success('Product Sub Category deleted successfully.');

        return redirect(route('admin.productSubCategories.index'));
    }
}
