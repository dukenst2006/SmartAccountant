<?php

namespace App\Imports;

use App\odelProduct;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Product
    */
    public function model(array $row)
    {
        return new Product([
            "UserID"                =>  $row[1],
            "ProductCategoryID"     =>  $row[2],
            "ProductSubCategoryID"  =>  $row[3],
            "WarehouseID"           =>  $row[4],
            "InventoryID"           =>  $row[5],
            "Name"                  =>  $row[6],
            "QuantityTypeID"        =>  $row[7],
            "PurchasingPrice"       =>  $row[8],
            "SellingPrice"          =>  $row[9],
            "LowPrice"              =>  $row[10],
            "Image"                 =>  $row[11],
            "ExpiryDate"            =>  $row[12],
            "Barcode"               =>  $row[13],
            "Quantity"              =>  $row[14],
            "UnlimitedQuantity"     =>  $row[15],
            "CanExpired"            =>  $row[16],
            "ExcludeFromVAT"        =>  $row[17],
            "created_at"            =>  $row[18],
            "updated_at"            =>  $row[19],
        ]);
    }
}
