<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AnalyticsSettings;
class AnalyticsSettingsController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$analytic = AnalyticsSettings::find($id);
    	return view('admin.analytics-settings')
    	->with('analytic',$analytic);
    }

    public function update($id)
    {
    	$AnalyticsSettings = AnalyticsSettings::find($id);
    	
        $AnalyticsSettings->update([
            'status' => request()->get('status'),
            'code' => request()->get('code'),
        ]);

        return redirect()->to('admin/analytics-settings');
    }
}
