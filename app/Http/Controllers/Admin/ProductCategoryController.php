<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductCategoryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductCategoryRequest;
use App\Http\Requests\Admin\UpdateProductCategoryRequest;
use App\Repositories\Admin\ProductCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductCategoryController extends AppBaseController
{
    /** @var  ProductCategoryRepository */
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepo)
    {
        $this->productCategoryRepository = $productCategoryRepo;
    }

    /**
     * Display a listing of the ProductCategory.
     *
     * @param ProductCategoryDataTable $productCategoryDataTable
     * @return Response
     */
    public function index(ProductCategoryDataTable $productCategoryDataTable)
    {
        return $productCategoryDataTable->render('admin.product_categories.index');
    }

    /**
     * Show the form for creating a new ProductCategory.
     *
     * @return Response
     */
    public function create()
    {
        $marketplaces = $this->productCategoryRepository->GetDataForSelect('marketplaces');
        return view('admin.product_categories.create',compact('marketplaces'));
    }

    /**
     * Store a newly created ProductCategory in storage.
     *
     * @param CreateProductCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateProductCategoryRequest $request)
    {
        $input = $request->all();

        $productCategory = $this->productCategoryRepository->create($input);

        Flash::success('Product Category saved successfully.');

        return redirect(route('admin.productCategories.index'));
    }

    /**
     * Display the specified ProductCategory.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $productCategory = $this->productCategoryRepository->find($ID );

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('admin.productCategories.index'));
        }

        return view('admin.product_categories.show')->with('productCategory', $productCategory);
    }

    /**
     * Show the form for editing the specified ProductCategory.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $productCategory = $this->productCategoryRepository->find($ID );

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('admin.productCategories.index'));
        }

        return view('admin.product_categories.edit')->with('productCategory', $productCategory);
    }

    /**
     * Update the specified ProductCategory in storage.
     *
     * @param  int              $ID
     * @param UpdateProductCategoryRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateProductCategoryRequest $request)
    {
        $productCategory = $this->productCategoryRepository->find($ID );

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('admin.productCategories.index'));
        }

        $productCategory = $this->productCategoryRepository->update($request->all(), $ID );

        Flash::success('Product Category updated successfully.');

        return redirect(route('admin.productCategories.index'));
    }

    /**
     * Remove the specified ProductCategory from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $productCategory = $this->productCategoryRepository->find($ID );

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('admin.productCategories.index'));
        }

        $this->productCategoryRepository->delete($ID );

        Flash::success('Product Category deleted successfully.');

        return redirect(route('admin.productCategories.index'));
    }
}
