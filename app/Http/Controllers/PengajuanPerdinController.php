<?php

namespace App\Http\Controllers;

use App\Models\PengajuanPerdin;
use Illuminate\Http\Request;

class PengajuanPerdinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('dashboard.pengajuan-perdin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengajuanPerdin  $pengajuanPerdin
     * @return \Illuminate\Http\Response
     */
    public function show(PengajuanPerdin $pengajuanPerdin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengajuanPerdin  $pengajuanPerdin
     * @return \Illuminate\Http\Response
     */
    public function edit(PengajuanPerdin $pengajuanPerdin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengajuanPerdin  $pengajuanPerdin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengajuanPerdin $pengajuanPerdin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengajuanPerdin  $pengajuanPerdin
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengajuanPerdin $pengajuanPerdin)
    {
        //
    }
}
