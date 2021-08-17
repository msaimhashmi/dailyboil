<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Generalsettings;
use File;


class GeneralSettingsController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$Generalsettings = Generalsettings::find($id);;

    	return view('.admin.general-settings')
            ->with('Generalsettings',$Generalsettings);
    }

    public function update($id)
    {
        $Generalsettings = Generalsettings::find($id);

        $currant_coverImage = $Generalsettings->coverImage;
        $currant_backgroundImage = $Generalsettings->backgroundImage;
        $currant_logo = $Generalsettings->logo;
        $currant_logoLight = $Generalsettings->logoLight;
        $currant_favicon = $Generalsettings->favicon;

        $fileName1 = null;
        if(request()->hasFile('logo'))
        {
            $file1 = request()->file('logo');
            $fileName1 = md5($file1->getClientOriginalName()) . time() . "." . $file1->getClientOriginalExtension();
            $file1->move('assets/uploads/',$fileName1);
        }
        $fileName2 = null;
        if(request()->hasFile('backgroundImage'))
        {
            $file2 = request()->file('backgroundImage');
            $fileName2 = md5($file2->getClientOriginalName()) . time() . "." . $file2->getClientOriginalExtension();
            $file2->move('assets/uploads/',$fileName2);
        }
        $fileName3 = null;
        if(request()->hasFile('logoLight'))
        {
            $file3 = request()->file('logoLight');
            $fileName3 = md5($file3->getClientOriginalName()) . time() . "." . $file3->getClientOriginalExtension();
            $file3->move('assets/uploads/',$fileName3);
        }
        $fileName4 = null;
        if(request()->hasFile('favicon'))
        {
            $file4 = request()->file('favicon');
            $fileName4 = md5($file4->getClientOriginalName()) . time() . "." . $file4->getClientOriginalExtension();
            $file4->move('assets/uploads/',$fileName4);
        }
        $fileName5 = null;
        if(request()->hasFile('coverImage'))
        {
            $file5 = request()->file('coverImage');
            $fileName5 = md5($file5->getClientOriginalName()) . time() . "." . $file5->getClientOriginalExtension();
            $file5->move('assets/uploads/',$fileName5);
        }

        $Generalsettings->update([
            'title' => request()->get('title'),
            'description' => request()->get('description'),
            'keywords' => request()->get('keywords'),
            'allowDirectLink' => request()->get('allowDirectLink'),
            'www' => request()->get('www'),
            'https' => request()->get('https'),
            'logo' =>  ($fileName1) ? $fileName1 : $currant_logo,
            'backgroundImage' =>  ($fileName2) ? $fileName2 : $currant_backgroundImage,
            'logoLight' =>  ($fileName3) ? $fileName3 : $currant_logoLight,
            'favicon' =>  ($fileName4) ? $fileName4 : $currant_favicon,
            'coverImage' =>  ($fileName5) ? $fileName5 : $currant_coverImage,
        ]);

        if ($fileName1) {
            File::delete('/assets/images/' . $currant_logo);
        }
        if ($fileName2) {
            File::delete('/assets/images/' . $currant_backgroundImage);
        }
        if ($fileName3) {
            File::delete('/assets/images/' . $currant_logoLight);
        }
        if ($fileName4) {
            File::delete('/assets/images/' . $currant_favicon);
        }
        if ($fileName5) {
            File::delete('/assets/images/' . $currant_coverImage);
        }

        return redirect()->to('/admin/general-settings');

    }
}
