<?php

namespace App\Http\Controllers;

use App\Exceptions\ParcelMachineNotFoundException;
use App\Exports\ParcelMachinesAllExport;
use App\Exports\ParcelMachinesExport;
use App\Models\ParcelMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ParcelMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $parcelMachinesTotal = ParcelMachine::all();
            $parcelMachines = ParcelMachine::paginate(10);
        } catch (\Exception $e) {
            throw new ParcelMachineNotFoundException();
        }
        return view('parcel-machines.index', compact('parcelMachines', 'parcelMachinesTotal'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParcelMachine  $parcelMachine
     * @return \Illuminate\Http\Response
     */
    public function show(ParcelMachine $parcelmachine)
    {
        $parcelMachine = ParcelMachine::find($parcelmachine)->firstOrFail();
        return view('parcel-machines.show', compact('parcelMachine'));
    }

    public function search(Request $request)
    {
        if ($request->get('category') == 'zip') {
            $this->validate($request, [
                'searchQuery' => 'bail|nullable|numeric|between:1,99999',
            ],
                [ // custom error messages
                    'searchQuery.numeric' => 'Zip code must contain only numbers',
                    'searchQuery.between' => 'Zip code must contain no more than 5 digits',
                ]);
            $parcelMachines = ParcelMachine::where('zip', 'LIKE', $request->get('searchQuery') . '%')->orderBY('zip', 'ASC')->get(); // compares strings to match the given string sequentualy
            return response()->json($parcelMachines);
        } 
        if ($request->get('category') == 'name') {
            $parcelMachines = ParcelMachine::where('name', 'LIKE', '%' . $request->get('searchQuery') . '%')->get(); // returns name if search query exist anywhere in the name
            return response()->json($parcelMachines);
        } 
         if ($request->get('category') == 'address') {
            $parcelMachines = ParcelMachine::where(DB::raw("CONCAT(
                    parcel_machines.a0_name,' - ',parcel_machines.a1_name,' - ',
                    parcel_machines.a2_name,' - ',parcel_machines.a3_name,' - ',
                    parcel_machines.a4_name,' - ',parcel_machines.a5_name,' - ',
                    parcel_machines.a6_name,' - ',parcel_machines.a7_name,' - ',
                    parcel_machines.a8_name)"), 'LIKE', '%' . $request->get('searchQuery') . '%')->get();
            return response()->json($parcelMachines);
        }
    }

    public function export(Request $request)
    {
        if (request()->has('searchQuery') && !empty(request()->get('searchQuery'))) {
            $category = $request->get('category');
            $query = $request->get('searchQuery');
            return Excel::download(new ParcelMachinesExport($query, $category), 'parcel-machines.xlsx');
        } else {
            return Excel::download(new ParcelMachinesAllExport, 'parcel-machines.xlsx');
        }
    }

}
