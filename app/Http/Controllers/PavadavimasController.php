<?php

namespace App\Http\Controllers;

use App\Models\Pavadavimas;
use App\Models\Truck;
use App\Http\Requests\StorePavadavimasRequest;
use App\Http\Requests\UpdatePavadavimasRequest;

class PavadavimasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pavadavimas.index',['pavadavimai' => Pavadavimas::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mainTrucks=Truck::getTrucksAvailableToSubstitue();
        return view('pavadavimas.create',['mainTrucks'=>$mainTrucks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePavadavimasRequest $request)
    {
        $pavadavimas                =   new Pavadavimas();
        $pavadavimas->truck_id      =   $request->truck_id;
        $pavadavimas->subUnit       =   $request->subUnit;
        $pavadavimas->start_date    =   $request->start_date;
        $pavadavimas->end_date      =   $request->end_date;
        $pavadavimas->save();
        return redirect()->route('pavadavimas.index',['pavadavimai' => Pavadavimas::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pavadavimas $pavadavimas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pavadavimas $pavadavimas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePavadavimasRequest $request, Pavadavimas $pavadavimas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pavadavimas $pavadavimas)
    {
        //
    }
}
