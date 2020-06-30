<?php

namespace App\Http\Controllers\Admin;

use App\Brench;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BrenchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brenchs = Brench::all();
        return view('admin.brenchs.index', compact('brenchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brenchs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'manger_phone' => 'required',
            'tax_number' => 'required',
            'tax_image' => 'required',
            'email' => 'required',
            'long' => 'required',
            'lat' => 'required',
        ]);
        $image = '';
        if ($request->hasFile('tax_image')) {
            $image = Storage::disk('public')->putFile('images', $request->file('tax_image'));
            $data['tax_image'] = $image;
        }
        $brench = Brench::create($data);
        return Redirect::route('admin.brenchs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Brench $brench
     * @return \Illuminate\Http\Response
     */
    public function show(Brench $brench)
    {
        return view('admin.brenchs.show', compact('brench'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Brench $brench
     * @return \Illuminate\Http\Response
     */
    public function edit(Brench $brench)
    {
        return view('admin.brenchs.edit', compact('brench'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Brench $brench
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Brench $brench)
    {
        $data = $request->except('_token', '_method');
        $image = $brench['tax_image'];
        if ($request->hasFile('tax_image')) {
            $image = Storage::disk('public')->putFile('images', $request->file('tax_image'));
            $data['tax_image'] = $image;
        }
        $brench->update($data);
        return Redirect::route('admin.brenchs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Brench $brench
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Brench $brench)
    {
        $brench->delete();
        return Redirect::route('admin.brenchs.index');
    }

    public function stoning(Brench $brench)
    {
        $brench->status = "stoned";
        $brench->save();
        return Redirect::back();
    }

    public function activating(Brench $brench)
    {
        $brench->status = "active";
        $brench->save();
        return Redirect::back();
    }
}
