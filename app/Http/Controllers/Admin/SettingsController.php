<?php

namespace App\Http\Controllers\Admin;

use App\Models\Langs;
use App\Models\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Settings $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Settings $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Settings $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        $request->validate([
            'is_site_active' => 'required',
            'program_status' => 'required',
            'message_ar' => 'required',
            'message_en' => 'required',
            'program_end_date' => 'required',
        ], [], [
            'is_site_active' => trans('adminPanel.is_site_active'),
            'program_status' => trans('adminPanel.is_program_active'),
            'message_ar' => trans('adminPanel.closing_message'),
            'message_en' => trans('adminPanel.closing_message'),
            'program_end_date' => trans('adminPanel.program_end_date'),
        ]);
        Settings::all()->first()->update($request->all());
        foreach (Langs::all() as $lang) {
            foreach (Settings::all()->first()->trans as $tran) {
                if ($lang['lang_code'] == $tran['lang_code']) {
                    $tran->update([
                        'message' => $request['message_' . $lang['lang_code']]
                    ]);
                }
            }
        }
        toast(trans('Updated successfully'), 'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Settings $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
