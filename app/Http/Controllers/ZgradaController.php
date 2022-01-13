<?php

namespace App\Http\Controllers;

use App\Models\Zgrada;
use Illuminate\Http\Request;
use App\Http\Resources\ZgradaResource;

class ZgradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sveZgrade = Zgrada::all();
        return ZgradaResource::collection($sveZgrade);
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
     * @param  \App\Models\Zgrada  $zgrada
     * @return \Illuminate\Http\Response
     */
    public function show(Zgrada $zgrada)
    {
        return new ZgradaResource($zgrada);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zgrada  $zgrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Zgrada $zgrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zgrada  $zgrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zgrada $zgrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zgrada  $zgrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zgrada $zgrada)
    {
        $zgrada->delete();
        return response()->json([
            'Poruka', 'Zgrada uspešno obrisana!',
            'Zgrada', new ZgradaResource($zgrada)
        ]);
    }
}
