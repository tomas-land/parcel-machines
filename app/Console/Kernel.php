<?php

namespace App\Console;

use App\Models\ParcelMachine;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $parcelMachines = Http::get('https://www.omniva.lt/locations.json')->json();   
            ParcelMachine::whereNotNull('id')->delete();   
            foreach ($parcelMachines as $machine) {              
                $parcelMachine = new ParcelMachine();
                $parcelMachine->fill($machine);
                $parcelMachine->save();                    
            }
        })->dailyAt('17:48')->timezone('Europe/Vilnius');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
