<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\ProductBill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'branch_id' => ['required', 'exists:brenches,id'],
            'phone' => ['required'],
            'address' => ['required'],
            'tax_number' => ['required'],
            'bill_number' => ['required'],
        ], [], [
            'branch_id' => trans('bills.branch_name'),
            'phone' => trans('Phone'),
            'address' => trans('Address'),
            'tax_number' => trans('bills.tax_number'),
            'bill_number' => trans('bills.bill_number'),
        ]);
        Bill::create($request->all());
        toast(trans('Saved successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->route('admin.bills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        return view('admin.bills.edit', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        $request->validate([
            'branch_id' => ['required', 'exists:brenches,id'],
            'phone' => ['required'],
            'address' => ['required'],
            'tax_number' => ['required'],
            'bill_number' => ['required'],
        ], [], [
            'branch_id' => trans('bills.branch_name'),
            'phone' => trans('Phone'),
            'address' => trans('Address'),
            'tax_number' => trans('bills.tax_number'),
            'bill_number' => trans('bills.bill_number'),
        ]);
        $bill->update($request->all());
        toast(trans('Updated successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->route('admin.bills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        toast(trans('Deleted successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->back();
    }
    public function newBill(Request $request){
        $bill = Bill::create($request->only('brench_id','emp_id','pay_way','paid'));
        $products = $request->get('products');
        foreach ($products as $item){
            ProductBill::create(['product_id'=>$item['id'],'bill_id'=>$bill['id']]);
        }
        return '1';
    }
}
