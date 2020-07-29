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

class ProductMovesController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }


    public function index()
    {

        $marketplaces = $this->productRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');
        $ProductMovements = $this->productRepository->GetDataForSelect('product_movement_types');

        return view('admin.ProductsMoves.index')->with(['marketplaces'=>$marketplaces , 'productmovements'=>$ProductMovements]);
    }

    public function move()
    {
        $Product =  $this->productRepository->find(request()->ProductID);
        if(!empty($Product)) {
            if(request()->ProductMovementID == 1 && $Product->Inventory == null) {
                $marketplace = \App\Models\Marketplace::find(request()->MarketplaceID)->with('inventory')->first();
                if(request()->Quantity == $Product->Quantity) {
                    $Product->InventoryID = $marketplace->inventory->id;
                    $Product->save();
                    alert()->success('raw success');
                    return back();
                } elseif(request()->Quantity > $Product->Quantity) {
                    // create new raw for the product with the new quantity and InventoryID frontend Marketplace->InventoryID
                    $otherProduct = clone $Product;
                    $otherProduct->InventoryID = $marketplace->inventory->id;
                    $otherProduct->Quantity = request()->Quantity;
                    $otherProduct->save();
                    // subtract the quantity of product the previos raw from the new product raw
                    $previosQuantity = request()->Quantity - $Product->Quantity;
                    $Product->Quantity = $previosQuantity;
                    $Product->save();
                    alert()->success('raw success');
                    return back();
                }

                alert()->error('error message');
                return back();
            } elseif(request()->ProductMovementID == 2 && !empty($Product->InventoryID)) {
                $Warehouse = \App\Models\Warehouse::where('MarketplaceOwnerID', $this->productRepository->GetMyOwner())->first();
                if(request()->Quantity == $Product->Quantity) {
                    // store WarehouseID and InventoryID = null
                    $Product->WarehouseID = $Warehouse->id;
                    $Product->save();
                    alert()->success('raw success');
                    return back();
                } elseif(request()->Quantity > $Product->Quantity) {
                    // create new raw for the product with the new quantity and InventoryID frontend Marketplace->InventoryID
                    $otherProduct = clone $Product;
                    $otherProduct->WarehouseID = $Warehouse->id;
                    $otherProduct->Quantity = request()->Quantity;
                    $otherProduct->save();
                    // subtract the quantity of product the previos raw from the new product raw
                    $previosQuantity = request()->Quantity - $Product->Quantity;
                    $Product->Quantity = $previosQuantity;
                    $Product->save();
                    alert()->success('raw success');
                    return back();
                } elseif(request()->Quantity < $Product->Quantity) {
                    alert()->error('raw success');
                }
            }
        }

        dd(request()->all());
    }
}
