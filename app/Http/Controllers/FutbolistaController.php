<?php

namespace App\Http\Controllers;

use App\Models\Futbolista;
use App\Http\Requests\StoreFutbolistaRequest;
use App\Http\Requests\UpdateFutbolistaRequest;

class FutbolistaController extends Controller
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
     * @param  \App\Http\Requests\StoreFutbolistaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFutbolistaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Futbolista  $futbolista
     * @return \Illuminate\Http\Response
     */
    public function show(Futbolista $futbolista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Futbolista  $futbolista
     * @return \Illuminate\Http\Response
     */
    public function edit(Futbolista $futbolista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFutbolistaRequest  $request
     * @param  \App\Models\Futbolista  $futbolista
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFutbolistaRequest $request, Futbolista $futbolista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Futbolista  $futbolista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Futbolista $futbolista)
    {
        //
    }
}
