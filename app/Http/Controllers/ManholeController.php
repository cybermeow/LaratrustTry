<?php

namespace App\Http\Controllers;

use App\Console\Commands\ManholeCsvCronJob;
use App\Manhole;
use Illuminate\Http\Request;

class ManholeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Manhole::all();
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
     * @param  \App\Manhole  $manhole
     * @return \Illuminate\Http\Response
     */
    public function show(Manhole $manhole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manhole  $manhole
     * @return \Illuminate\Http\Response
     */
    public function edit(Manhole $manhole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manhole  $manhole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manhole $manhole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manhole  $manhole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manhole $manhole)
    {
        //
    }
}
