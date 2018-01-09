<?php

namespace App\Http\Controllers;

use App\AlarmList;
use Illuminate\Http\Request;

class AlarmListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return AlarmList::all();
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
     * @param  \App\AlarmList  $alarmList
     * @return \Illuminate\Http\Response
     */
    public function show(AlarmList $alarmList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AlarmList  $alarmList
     * @return \Illuminate\Http\Response
     */
    public function edit(AlarmList $alarmList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlarmList  $alarmList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlarmList $alarmList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlarmList  $alarmList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlarmList $alarmList)
    {
        //
    }
}
