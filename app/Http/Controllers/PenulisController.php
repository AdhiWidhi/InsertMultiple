<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use App\Http\Requests\StorePenulisRequest;
use App\Http\Requests\UpdatePenulisRequest;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePenulisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenulisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show(Penulis $penulis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit(Penulis $penulis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenulisRequest  $request
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenulisRequest $request, Penulis $penulis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penulis $penulis)
    {
        //
    }
}
