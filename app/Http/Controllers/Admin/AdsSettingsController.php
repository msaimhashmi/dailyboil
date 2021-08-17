<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdsSettings;

class AdsSettingsController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$ads = AdsSettings::find($id);
    	return view('admin.ads-settings')
    	->with('ads',$ads);
    }

    public function update($id)
    {
    	$Ads = AdsSettings::find($id);

        $Ads->update([
            'ad728x90Status' => request()->get('ad728x90Status'),
            'ad728x90ResponsiveStatus' => request()->get('ad728x90ResponsiveStatus'),
            'ad728x90' => request()->get('ad728x90'),
            'ad250x250Status' => request()->get('ad250x250Status'),
            'ad250x250ResponsiveStatu' => request()->get('ad250x250ResponsiveStatu'),
            'ad250x250' => request()->get('ad250x250'),
            'popAdStatus' => request()->get('popAdStatus'),
            'popAd' => request()->get('popAd'),
            'popAdFrequency' => request()->get('popAdFrequency'),
            'displayOnHomePage' => request()->get('displayOnHomePage'),
            'displayOnDynamicPages' => request()->get('displayOnDynamicPages'),
            'displayOnContactPage' => request()->get('displayOnContactPage'),
        ]);

        return redirect()->to('admin/ads-settings');
    }
}
