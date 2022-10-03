<?php

namespace App\Http\Controllers;

use App\Models\ConfrontoPalpite;
use Illuminate\Http\Request;

use Exception;

class ConfrontoPalpiteController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $palpite = $request->all();
            ConfrontoPalpite::create($palpite);
        } catch (Exception $e) {
            return response()->json(['error' => "Não foi possível cadastrar o palpite."], 401);
        } return response()->json(['data' => "O palpite foi cadastrado com sucesso."], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfrontoPalpite  $confrontoPalpite
     * @return \Illuminate\Http\Response
     */
    public function show(ConfrontoPalpite $confrontoPalpite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfrontoPalpite  $confrontoPalpite
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfrontoPalpite $confrontoPalpite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConfrontoPalpite  $confrontoPalpite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfrontoPalpite $confrontoPalpite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfrontoPalpite  $confrontoPalpite
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfrontoPalpite $confrontoPalpite)
    {
        //
    }
}
