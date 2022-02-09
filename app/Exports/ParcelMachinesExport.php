<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Models\ParcelMachine;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ParcelMachinesExport implements FromView, ShouldAutoSize
{
    private $query;
    private $category;

    public function __construct(string $query, string $category)
    {
        $this->query = $query;
        $this->category = $category;
    }

    public function view(): View
    {
        if ($this->category == 'zip') {
            return view('parcel-machines.parcel-machines-export', [
                'parcelMachines' => ParcelMachine::where('zip', 'LIKE', '%' . $this->query . '%')->get(),
            ]);
        } else if($this->category == 'name') {
            return view('parcel-machines.parcel-machines-export', [
                'parcelMachines' => ParcelMachine::where('name', 'LIKE', '%' . $this->query . '%')->get(),
            ]);
        } else if($this->category == 'address') {
            return view('parcel-machines.parcel-machines-export', [
                'parcelMachines' => ParcelMachine::where(DB::raw("CONCAT(
                    parcel_machines.a0_name,' - ',parcel_machines.a1_name,' - ',
                    parcel_machines.a2_name,' - ',parcel_machines.a3_name,' - ',
                    parcel_machines.a4_name,' - ',parcel_machines.a5_name,' - ',
                    parcel_machines.a6_name,' - ',parcel_machines.a7_name,' - ',
                    parcel_machines.a8_name)"), 'LIKE', '%' . $this->query . '%')->get(),
            ]);
        } 
    }
}

// namespace App\Exports;

// use App\Models\ParcelMachine;
// use Maatwebsite\Excel\Concerns\FromQuery;
// use Maatwebsite\Excel\Concerns\Exportable;

// class ParcelMachinesExport implements FromQuery
// {

//     use Exportable;

//     public function __construct(int $year)
//     {
//         $this->year = $year;
//     }

//     public function query()
//     {
//         return ParcelMachine::query()->where('zip', 'LIKE', '%' . $this->year . '%');
//     }
//     // public function collection()
//     // {
//     //     return ParcelMachine::where('zip', 'LIKE', '%' . '10696' . '%')->get();
//     // }
// }
