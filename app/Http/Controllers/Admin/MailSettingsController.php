<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MailSettings;

class MailSettingsController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$mailsettings = MailSettings::find($id);
    	return view('admin.mail-settings')
    	->with('mailsettings',$mailsettings);
    }

    public function store()
    {

        MailSettings::create([
            'smtpStatus' => request()->get('smtpStatus'),
            'host' => request()->get('host'),
            'port' => request()->get('port'),
            'username' => request()->get('username'),
            'password' => request()->get('password'),
            'contactEmail' => request()->get('contactEmail'),
        ]);

        return redirect()->to('admin/mail-settings');
    }    

    public function update($id)
    {
    	$Ads = MailSettings::find($id);

        $Ads->update([
            'smtpStatus' => request()->get('smtpStatus'),
            'host' => request()->get('host'),
            'port' => request()->get('port'),
            'username' => request()->get('username'),
            'password' => request()->get('password'),
            'contactEmail' => request()->get('contactEmail'),
        ]);

        return redirect()->to('admin/mail-settings');
    }
}
