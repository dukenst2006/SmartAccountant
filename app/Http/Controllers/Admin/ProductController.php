<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\product;
use App\Repositories\Admin\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param ProductDataTable $productDataTable
     * @return Response
     */
    public function index(ProductDataTable $productDataTable)
    {
        return $productDataTable->render('admin.products.index');
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $marketplaces = $this->productRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');
        $quantitytypes= $this->productRepository->GetDataForSelect('quantity_types');
  //      $product_categories = $this->productRepository->GetDataForSelect('product_categories');
     ///   $product_sub_categories = $this->productRepository->GetDataForSelect('product_sub_categories');
        return view('admin.products.create',compact('marketplaces','quantitytypes')); //,'product_categories','product_sub_categories'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        $input['Image'] = $this->productRepository->StoreFile($request->file('Image'),'');
        $product = $this->productRepository->create($input);
        Flash::success('Product saved successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id )
    {
        $product = $this->productRepository->find($id );

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id )
    {
        $product = $this->productRepository->find($id );

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param  int              $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id , UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id );
        $input = $request->all();
        $input['Image'] = $this->productRepository
            ->StoreFile($request->file('Image'),$product['Image']);
        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $product = $this->productRepository->update($input, $id );

        Flash::success('Product updated successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id )
    {
        $product = $this->productRepository->find($id );

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $this->productRepository->delete($id );

        Flash::success('Product deleted successfully.');

        return redirect(route('admin.products.index'));
    }







    public  function LiveSearch()
    {
      //  if (request()->ajax())

        return response()->json(['results'=>$this->productRepository->filter()]);


    }






}
