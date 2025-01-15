<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function map()
    {
        return view('map');
    }

    public function card()
    {
        return view('card');
    }

    public function word()
    {
        return view('word');
    }

    public function quiz()
    {
        return view('quiz');
    }

    public function drag()
    {
        return view('drag');
    }

    public function biodata()
    {
        return view('biodata');
    }

    public function registration()
    {
        if (auth()->user()) {
            return redirect()->route('landing.map');
        }
        return view('registration');
    }

    public function cardrule()
    {
        return view('cardrule');
    }

    public function wordrule()
    {
        return view('wordrule');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}
}
