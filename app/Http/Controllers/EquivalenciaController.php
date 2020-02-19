<?php

namespace App\Http\Controllers;

use App\Equivalencia;
use Illuminate\Http\Request;

class EquivalenciaController extends Controller
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
    public function create(Request $request)
    {
        try {
            $response = Equivalencia::create([
                'cucss_id' => $request->cucss_id,
                'csp_id' => $request->csp_id,
            ]);
        } catch (Exception $e) {
            dd('Error', $e);
        }
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
     * @param  \App\Equivalencia  $equivalencia
     * @return \Illuminate\Http\Response
     */
    public function show(Equivalencia $equivalencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equivalencia  $equivalencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        try {
            $equiv = Equivalencia::findOrFail($request->id);
            $equiv->cucss_id = $request->cucss_id;
            $equiv->csp_id = $request->csp_id;
            $equiv->save();
        } catch (Exception $e) {
            dd('Error', $e);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equivalencia  $equivalencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equivalencia $equivalencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equivalencia  $equivalencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equivalencia $equivalencia)
    {
        //
    }
}
