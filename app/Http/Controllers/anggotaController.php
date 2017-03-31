<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\anggotum;
use Illuminate\Http\Request;
use Session;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
    //     $keyword = $request->get('search');
    //     $perPage = 25;

    //     if (!empty($keyword)) {
    //         $anggota = anggotum::where('title', 'LIKE', "%$keyword%")
				// ->orWhere('body', 'LIKE', "%$keyword%")
				
    //             ->paginate($perPage);
    //     } else {
    //         $anggota = anggotum::paginate($perPage);
    //     }
        $data['i'] = 1;
        $data['data'] = \App\anggotum::all();

        return view('anggota.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('anggota.create');
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
        
        $requestData = $request->all();
        
        anggotum::create($requestData);

        Session::flash('flash_message', 'anggotum added!');

        return redirect('anggota');
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
        $anggotum = anggotum::findOrFail($id);

        return view('anggota.show', compact('anggotum'));
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
        $anggotum = anggotum::findOrFail($id);

        return view('anggota.edit', compact('anggotum'));
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
        
        $requestData = $request->all();
        
        $anggotum = anggotum::findOrFail($id);
        $anggotum->update($requestData);

        Session::flash('flash_message', 'anggotum updated!');

        return redirect('anggota');
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
        anggotum::destroy($id);

        Session::flash('flash_message', 'anggota deleted!');

        return redirect('anggota');
    }
}
