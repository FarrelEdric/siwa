<?php

namespace App\Http\Controllers;

use App\Models\BansosModel;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('welcome');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BansosModel $bansosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BansosModel $bansosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BansosModel $bansosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BansosModel $bansosModel)
    {
        //
    }
}
