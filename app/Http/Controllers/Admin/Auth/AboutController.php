<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.about.index');
    }
}
