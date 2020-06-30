<?php

namespace App\Http\Controllers\Admin;

use App\ExpensesCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ExpensesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.expenses-categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expenses-categories.create');
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
            'name' => 'required',
        ], [], [
            'name' => trans('Name')
        ]);
        ExpensesCategory::create($request->all());
        toast(trans('Saved successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        if ($request['cat_id'])
            return redirect()->route('admin.expenses-categories.show', $request['cat_id']);
        return redirect()->route('admin.expenses-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ExpensesCategory $expensesCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpensesCategory $expensesCategory)
    {
        return view('admin.expenses-categories.show', compact('expensesCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ExpensesCategory $expensesCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpensesCategory $expensesCategory)
    {
        return view('admin.expenses-categories.edit', compact('expensesCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ExpensesCategory $expensesCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpensesCategory $expensesCategory)
    {
        $request->validate([
            'name' => 'required',
        ], [], [
            'name' => trans('Name')
        ]);
        $expensesCategory->update($request->all());
        toast(trans('Updated successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        if($expensesCategory['cat_id'])
            return redirect()->route('admin.expenses-categories.show',$expensesCategory['cat_id']);
        return redirect()->route('admin.expenses-categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ExpensesCategory $expensesCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpensesCategory $expensesCategory)
    {
        $expensesCategory->delete();
        toast(trans('Deleted successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return  redirect()->back();
    }
}
