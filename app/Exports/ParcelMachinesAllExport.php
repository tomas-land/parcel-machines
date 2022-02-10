<?php

namespace App\Exports;

use App\Models\ParcelMachine;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ParcelMachinesAllExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('parcel-machines.parcel-machines-all-export', [
            'parcelMachines' => ParcelMachine::all()
        ]);
    }
}
