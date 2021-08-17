<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::get();
        return view('admin.pages')
        ->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Pages::create([
        'title' =>  request()->get('title'),
        'permalink' =>  request()->get('permalink'),
        'description' =>  request()->get('description'),
        'keywords' =>  request()->get('keywords'),
        'content' =>  request()->get('content'),
        'position' =>  request()->get('position'),
        'status' =>  request()->get('status'),
        'displayOrder' =>  request()->get('displayOrder'),
      ]);

      return redirect()->to('/admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::find($id);
        return view('admin.edit-page')
        ->with('page',$page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $pages = Pages::find($id);

        $pages->update([
            'title' => request()->get('title'),
            'permalink' => request()->get('permalink'),
            'description' => request()->get('description'),
            'keywords' => request()->get('keywords'),
            'content' => request()->get('content'),
            'position' => request()->get('position'),
            'status' => request()->get('status'),
            'displayOrder' => request()->get('displayOrder'),
        ]);

        return redirect()->to('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pages::find($id)->delete();
        return redirect()->to('admin/pages');
    }
}
