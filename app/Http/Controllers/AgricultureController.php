<?php

namespace App\Http\Controllers;

use App\Models\Agriculture;
use App\Http\Requests\StoreAgricultureRequest;
use App\Http\Requests\UpdateAgricultureRequest;

class AgricultureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agricultures = Agriculture::all();

        return view('agriculture.index',['agricultures'=>$agricultures]);
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
     * @param  \App\Http\Requests\StoreAgricultureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgricultureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agriculture  $agriculture
     * @return \Illuminate\Http\Response
     */
    public function show(Agriculture $agriculture)
    {
        //
        $agricultures = Agriculture::find($agriculture);

        //dd($agricultures);

        return view('agriculture.detail',['agricultures'=>$agricultures]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agriculture  $agriculture
     * @return \Illuminate\Http\Response
     */
    public function edit(Agriculture $agriculture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgricultureRequest  $request
     * @param  \App\Models\Agriculture  $agriculture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgricultureRequest $request, Agriculture $agriculture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agriculture  $agriculture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agriculture $agriculture)
    {
        //
    }
}
