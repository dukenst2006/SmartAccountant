<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Cassandra\Set;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {

        $setting = auth()->user()->settings;
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Settings  $settings
     * @return Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Settings  $settings
     * @return Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Settings  $settings
     * @return Response
     */
    public function update(Request $request, Settings $settings)
    {
//        $request->validate([
//            'is_site_active' => 'required',
//            'program_status' => 'required',
//            'message_ar' => 'required',
//            'message_en' => 'required',
//            'program_end_date' => 'required',
//        ], [], [
//            'is_site_active' => trans('adminPanel.is_site_active'),
//            'program_status' => trans('adminPanel.is_program_active'),
//            'message_ar' => trans('adminPanel.closing_message'),
//            'message_en' => trans('adminPanel.closing_message'),
//            'program_end_date' => trans('adminPanel.program_end_date'),
//        ]);



        auth()->user()->settings->update($request->except("_token", '_method', 'Logo'));

        auth()->user()->settings->Currency = $request->get('Currency');
        auth()->user()->settings->VAT = $request->get('VAT');
        auth()->user()->settings->save();

        if ($request->hasFile('Logo'))
            auth()->user()->settings->update(['Logo' => Storage::put('images', $request->file('Logo'))]);


//        foreach (Langs::all() as $lang) {
//            foreach (Settings::all()->first()->trans as $tran) {
//                if ($lang['lang_code'] == $tran['lang_code']) {
//                    $tran->update([
//                        'message' => $request['message_' . $lang['lang_code']]
//                    ]);
//                }
//            }
//        }
        toast(trans('Updated successfully'),
            'success')->position(session('locale') == 'ar' ? 'bottom-start' : 'bottom-end');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Settings  $settings
     * @return Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
