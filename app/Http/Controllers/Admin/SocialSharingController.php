<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialSharing;

class SocialSharingController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$socialsharing = SocialSharing::find($id);
    	return view('admin.social-sharing')
    	->with('socialsharing',$socialsharing);
    }

    public function update($id)
    {
    	$Ads = SocialSharing::find($id);

        $Ads->update([
            'status' => request()->get('status'),
            'facebookSharing' => request()->get('facebookSharing'),
            'facebookPageName' => request()->get('facebookPageName'),
            'googleplusSharing' => request()->get('googleplusSharing'),
            'googleplusPageId' => request()->get('googleplusPageId'),
            'twitterSharing' => request()->get('twitterSharing'),
            'twitterTweetText' => request()->get('twitterTweetText'),
            'linkedinSharing' => request()->get('linkedinSharing'),
        ]);

        return redirect()->to('admin/social-sharing');
    }
}
