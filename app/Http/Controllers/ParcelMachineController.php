<?php

namespace App\Http\Controllers;

use App\Models\ParcelMachine;
use Illuminate\Http\Request;

class ParcelMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcelMachinesTotal = ParcelMachine::all();
        $parcelMachines = ParcelMachine::paginate(10);
        return view('parcel-machines.index', compact('parcelMachines', 'parcelMachinesTotal'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParcelMachine  $parcelMachine
     * @return \Illuminate\Http\Response
     */
    public function show(ParcelMachine $parcelMachine)
    {
        //
    }

 
}
