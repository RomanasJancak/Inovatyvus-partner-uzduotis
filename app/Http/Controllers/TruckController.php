<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Http\Requests\StoreTruckRequest;
use App\Http\Requests\UpdateTruckRequest;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('truck.index',['trucks' => Truck::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('truck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTruckRequest $request)
    {
        $truck                  =   new Truck();
        $truck->unit_number     =   $request->unit_number;
        $truck->year            =   $request->year;
        $truck->note            =   $request->note;
        $truck->workingStatus   =   0;
        if($request->workingStatus === true){$truck->workingStatus = 1;}
        if($request->note === null){
            $truck->note = "";
        }
        $truck->save();
        return redirect()->route('truck.index',['trucks' => Truck::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        return view('truck.show',['truck' => $truck]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        return view('truck.edit',['truck' => $truck]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTruckRequest $request, Truck $truck)
    {
        //dd($truck);
        $truck->unit_number     =   $request->unit_number;
        $truck->year            =   $request->year;
        $truck->note            =   $request->note;
        $truck->workingStatus   =   0;
        
        if($request->workingStatus === 'true'){$truck->workingStatus = 1;}
        if($request->note === null){
            $truck->note = "";
        }
        $truck->save();
        return redirect()->route('truck.show',$truck);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {

        $truck->delete();
        return redirect()->route('truck.index',['trucks' => Truck::all()]);
    }
}
