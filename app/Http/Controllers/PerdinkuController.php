<?php

namespace App\Http\Controllers;

use App\Models\Perdinku;
use Illuminate\Http\Request;

class PerdinkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('dashboard.perdinku.index');
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
     * @param  \App\Models\Perdinku  $perdinku
     * @return \Illuminate\Http\Response
     */
    public function show(Perdinku $perdinku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perdinku  $perdinku
     * @return \Illuminate\Http\Response
     */
    public function edit(Perdinku $perdinku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perdinku  $perdinku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perdinku $perdinku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perdinku  $perdinku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perdinku $perdinku)
    {
        //
    }
}
