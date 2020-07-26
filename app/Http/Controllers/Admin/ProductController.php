<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductDataTable;
use App\Exports\ProductsExport;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Imports\ProductsImport;
use App\Models\Marketplace;
use App\Models\Product;
use App\Models\Warehouse;
use App\Repositories\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
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
     * @param  ProductDataTable  $productDataTable
     * @return Response
     */
    public function index(ProductDataTable $productDataTable)
    {
        return $productDataTable->render('admin.products.index');
    }
    public  function TableView(){
        $products = Product::query()->paginate(10);
        if (isset($_GET['MarketID'])){
            if ($_GET['MarketID'] > 0){
                $market = Marketplace::query()->find($_GET['MarketID']);
                $inventory = $market->inventory;
                if ($inventory != null){
                    $products = Product::query()->where('InventoryID','=',$inventory->id)->paginate(10);
                }else{
                    $products = collect([]);
                }
            }
        }
        return view('admin.ProductsView.index',compact('products'));
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Factory|View
     */
    public function create()
    {
        $quantitytypes = $this->productRepository->GetDataForSelect('quantity_types');
        $product_categories = $this->productRepository->GetDataForSelect('product_categories');
        $product_sub_categories = $this->productRepository->GetDataForSelect('product_sub_categories');
        $marketplaces = $this->productRepository->GetDataForSelect('marketplaces');
        $marketplaces["0"] = "المخزن الرئيسي";
        $marketplaces = array_reverse($marketplaces);
        return view('admin.products.create',
            compact( 'quantitytypes', 'product_categories', 'product_sub_categories','marketplaces'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param  CreateProductRequest  $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        $input['Image'] = $this->productRepository->StoreFile($request->file('Image'), '');
        if ($input['MarketplaceID'] == 0){
            $input['MarketplaceID'] = null;
            $input['WarehouseID'] = Warehouse::query()->first()->id;
        }
        $product = $this->productRepository->create($input);
        Flash::success('Product saved successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param  int  $id
     * @param  UpdateProductRequest  $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);
        $input = $request->all();
        $input['Image'] = $this->productRepository
            ->StoreFile($request->file('Image'), $product['Image']);
        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $product = $this->productRepository->update($input, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('admin.products.index'));
    }


    public function LiveSearch()
    {
        //  if (request()->ajax())

        return response()->json(['results' => $this->productRepository->filter()]);


    }
    public function export()
    {
        return Excel::download(new ProductsExport(), 'products.xlsx');
    }
    public function import(Request $request)
    {
        if ($request->hasFile('excel')){
            Excel::import(new ProductsImport, $request->file('excel'));
        }
        alert('','done','success');
        return redirect()->back();
    }


}
