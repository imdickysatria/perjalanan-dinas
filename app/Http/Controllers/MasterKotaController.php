<?php

namespace App\Http\Controllers;

use App\Models\MasterKota;
use Illuminate\Http\Request;

class MasterKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('dashboard.master-kota.index');
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
     * @param  \App\Models\MasterKota  $masterKota
     * @return \Illuminate\Http\Response
     */
    public function show(MasterKota $masterKota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterKota  $masterKota
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterKota $masterKota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterKota  $masterKota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterKota $masterKota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterKota  $masterKota
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterKota $masterKota)
    {
        //
    }
}
