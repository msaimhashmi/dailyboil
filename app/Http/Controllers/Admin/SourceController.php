<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Source;
use File;

class SourceController extends Controller
{
    public function index()
    {
    	$sources = Source::get();
    	return view('admin.sources')
    	->with('sources',$sources);
    }

    public function edit($id)
    {
    	$source = Source::find($id);
    	return view('admin.edit_source')
    	->with('source',$source);
    }

    public function update($id)
    {

    	$source = Source::find($id);
    	
    	$currant_img = $source->icon;
            
        $fileName = null;
        if(request()->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('assets/uploads/',$fileName);
        }

        $source->update([
            'name' => request()->get('name'),
            'website' => request()->get('website'),
            'link_cache_time' => request()->get('link_cache_time'),
            'icon' =>  ($fileName) ? $fileName : $currant_img ,
            'status' => request()->get('status'),
        ]);

        if ($fileName) {
            File::delete('assets/uploads/' . $currant_img);
        }

        return redirect()->to('admin/sources');
    }

    public function change_source_status() {
        print_r('abc');
        exit;
        if(isset($_POST['changeSourceStatus']) && $_POST['changeSourceStatus'] == 'changeSourceStatus') {
            $response = array();
            
            $action = request()->get('action');
            $id = request()->get('id');
            
            $status = ($action == "on" ? "1" : "0");
            // $messageAction = ($action == "on" ? "enabled" : "disabled");
            
            $status->update(["status" => $status]);
                        // update_source_info($id, ["status" => $status]);
                        
            $response['status'] = "success";
            $response['message'] = "Source ".$messageAction." successfully";
            echo json_encode($response);
        }
    }
}
