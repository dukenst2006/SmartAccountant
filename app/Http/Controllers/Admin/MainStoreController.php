<?php

namespace App\Http\Controllers\Admin;

use App\Brench;
use App\MainStore;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainStoreController extends Controller
{
    public function index()
    {
        return view('admin.main-store.index');
    }


    public function distribute(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => ['required', 'numeric'],
            'branch_id' => ['required', 'exists:brenches,id']
        ], [], [
            'quantity' => trans('products.quantity'),
            'branch_id' => trans('branch.name'),
        ]);
        $branch = Brench::find($request['branch_id']);

        if ($product['quantity'] >= $request['quantity']) {
            if ($branch->products->contains($product)) {
                $branch->products->find($product)->pivot->quantity += $request['quantity'];
                $branch->push();
            } else {
                $branch->products()->attach([$product['id'] => ['quantity' => $request['quantity']]]);
            }
            $product->decrement('quantity', $request['quantity']);
            toast(trans('Saved successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        } else {
            toast(trans('Quantity not available'), 'error')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        }
        return redirect()->back();
    }
}
