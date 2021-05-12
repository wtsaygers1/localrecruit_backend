<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sport::all()->toArray(); //R
    }

    public function show($id)
    {
        return Sport::find($id); //R, individual sport
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sport = new Sport;
        $sport->name = $request->name;
        $url = str_replace(' ', '', $request->name);
        $url = strtolower($url);
        $sport->url = $url;
        $sport->save();

        return $sport;
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
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    // public function show(Sport $sport)
    // {
    //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        //
    }
}
