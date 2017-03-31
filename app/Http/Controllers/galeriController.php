<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\galeri;
use Illuminate\Http\Request;
use Session;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $galeri = galeri::where('title', 'LIKE', "%$keyword%")
                ->orWhere('body', 'LIKE', "%$keyword%")
                
                ->paginate($perPage);
        } else {
            $galeri = galeri::paginate($perPage);
        }

        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $rules = [
            'foto' => 'required|mimes:jpg,jpeg,JPEG,png,gif,bmp|max:2048',
            'keterangan' => 'required|max:35'
        ];
        
        $this->validate($request, $rules);

        $input = $request->all();

        if($request->hasFile('foto') && $request->file('foto')){
            $filename = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('', $filename);
            $input['foto'] = $filename;
        }

        $status = \App\galeri::create($input);



        return redirect('galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $galeri = galeri::findOrFail($id);

        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $galeri = galeri::findOrFail($id);

        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $rules = [
            'foto' => 'required|mimes:jpg,jpeg,JPEG,png,gif,bmp|max:2048',
            'keterangan' => 'required|max:35'
        ];
        
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\galeri::where('id', $id)->first();

        if($request->hasFile('foto') && $request->file('foto')){
            $filename = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('', $filename);
            $input['foto'] = $filename;
        }

        $status = \App\galeri::update($input);

        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        galeri::destroy($id);

        Session::flash('flash_message', 'galeri deleted!');

        return redirect('galeri');
    }
}
