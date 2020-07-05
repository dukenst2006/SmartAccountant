<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductCategoriesDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductCategoriesRequest;
use App\Http\Requests\Admin\UpdateProductCategoriesRequest;
use App\Repositories\Admin\ProductCategoriesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductCategoriesController extends AppBaseController
{
    /** @var  ProductCategoriesRepository */
    private $productCategoriesRepository;

    public function __construct(ProductCategoriesRepository $productCategoriesRepo)
    {
        $this->productCategoriesRepository = $productCategoriesRepo;
    }

    /**
     * Display a listing of the ProductCategories.
     *
     * @param ProductCategoriesDataTable $productCategoriesDataTable
     * @return Response
     */
    public function index(ProductCategoriesDataTable $productCategoriesDataTable)
    {
        return $productCategoriesDataTable->render('admin.product_categories.index');
    }

    /**
     * Show the form for creating a new ProductCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.product_categories.create');
    }

    /**
     * Store a newly created ProductCategories in storage.
     *
     * @param CreateProductCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateProductCategoriesRequest $request)
    {
        $input = $request->all();

        $productCategories = $this->productCategoriesRepository->create($input);

        Flash::success('Product Categories saved successfully.');

        return redirect(route('admin.productCategories.index'));
    }

    /**
     * Display the specified ProductCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productCategories = $this->productCategoriesRepository->find($id);

        if (empty($productCategories)) {
            Flash::error('Product Categories not found');

            return redirect(route('admin.productCategories.index'));
        }

        return view('admin.product_categories.show')->with('productCategories', $productCategories);
    }

    /**
     * Show the form for editing the specified ProductCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productCategories = $this->productCategoriesRepository->find($id);

        if (empty($productCategories)) {
            Flash::error('Product Categories not found');

            return redirect(route('admin.productCategories.index'));
        }

        return view('admin.product_categories.edit')->with('productCategories', $productCategories);
    }

    /**
     * Update the specified ProductCategories in storage.
     *
     * @param  int              $id
     * @param UpdateProductCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductCategoriesRequest $request)
    {
        $productCategories = $this->productCategoriesRepository->find($id);

        if (empty($productCategories)) {
            Flash::error('Product Categories not found');

            return redirect(route('admin.productCategories.index'));
        }

        $productCategories = $this->productCategoriesRepository->update($request->all(), $id);

        Flash::success('Product Categories updated successfully.');

        return redirect(route('admin.productCategories.index'));
    }

    /**
     * Remove the specified ProductCategories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productCategories = $this->productCategoriesRepository->find($id);

        if (empty($productCategories)) {
            Flash::error('Product Categories not found');

            return redirect(route('admin.productCategories.index'));
        }

        $this->productCategoriesRepository->delete($id);

        Flash::success('Product Categories deleted successfully.');

        return redirect(route('admin.productCategories.index'));
    }
}
