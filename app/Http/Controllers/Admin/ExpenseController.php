<?php

namespace App\Http\Controllers\Admin;

use App\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.expenses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expenses.create');
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
            'cat_id' => ['required', 'exists:expenses_categories,id', 'numeric'],
            'sub_cat_id' => ['required', 'exists:expenses_categories,id', 'numeric'],
            'type' => 'required',
            'amount' => ['required', 'numeric'],
            'description' => 'required',
            'date' => 'required',
        ], [], [
            'cat_id' => trans('expenses.main_cat'),
            'sub_cat_id' => trans('expenses.sub_cat'),
            'type' => trans('expenses.expense_type'),
            'amount' => trans('Price'),
            'description' => trans('Description'),
            'date' => trans('Date'),
        ]);
        Expense::create($request->all());
        toast(trans('Deleted successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->route('admin.expenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('admin.expenses.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'cat_id' => ['required', 'exists:expenses_categories,id', 'numeric'],
            'sub_cat_id' => ['required', 'exists:expenses_categories,id', 'numeric'],
            'type' => 'required',
            'amount' => ['required', 'numeric'],
            'description' => 'required',
            'date' => 'required',
        ], [], [
            'cat_id' => trans('expenses.main_cat'),
            'sub_cat_id' => trans('expenses.sub_cat'),
            'type' => trans('expenses.expense_type'),
            'amount' => trans('Price'),
            'description' => trans('Description'),
            'date' => trans('Date'),
        ]);
        $expense->update($request->all());
        toast(trans('Deleted successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->route('admin.expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        toast(trans('Deleted successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->back();
    }
}
