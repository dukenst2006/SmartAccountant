<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

class NotificationController extends AppBaseController
{
    public function index()
    {
    	$notifications = auth()->user()->notifications();
    	return view('admin.notifications.index', compact('notifications'));
    }
}
