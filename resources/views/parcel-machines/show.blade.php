@extends('layouts.app')
@section('content')
    <div class="h-32 flex flex-col justify-center bg-[#1a1a1acc] ">
        <div class="text-2xl text-gray-200 ml-12">Details:</div>
    </div>
    <div class="flex flex-col ml-12 mt-12">
        <div><span class="text-[#e4022c]"> ZIP: </span>{{ $parcelMachine->ZIP }} </div>
        <div><span class="text-[#e4022c]"> NAME: </span>{{ $parcelMachine->NAME }} </div>
        <div><span class="text-[#e4022c]"> TYPE: </span>{{ $parcelMachine->TYPE }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_0: </span>{{ $parcelMachine->A0_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_1: </span>{{ $parcelMachine->A1_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_2: </span>{{ $parcelMachine->A2_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_3: </span>{{ $parcelMachine->A3_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_4: </span>{{ $parcelMachine->A4_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_5: </span>{{ $parcelMachine->A5_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_6: </span>{{ $parcelMachine->A6_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_7: </span>{{ $parcelMachine->A7_NAME }} </div>
        <div><span class="text-[#e4022c]"> ADDRESS_8: </span>{{ $parcelMachine->A8_NAME }} </div>
        <div><span class="text-[#e4022c]"> X_COORDINATE: </span>{{ $parcelMachine->X_COORDINATE }} </div>
        <div><span class="text-[#e4022c]"> Y_COORDINATE: </span>{{ $parcelMachine->Y_COORDINATE }} </div>
        <div><span class="text-[#e4022c]"> SERVICE_HOURS: </span>{{ $parcelMachine->SERVICE_HOURS }} </div>
        <div><span class="text-[#e4022c]"> TEMP_SERVICE_HOURS: </span>{{ $parcelMachine->TEMP_SERVICE_HOURS }} </div>
        <div><span class="text-[#e4022c]"> TEMP_SERVICE_HOURS_UNTIL: </span>{{ $parcelMachine->TEMP_SERVICE_HOURS_UNTIL }} </div>
        <div><span class="text-[#e4022c]"> TEMP_SERVICE_HOURS_2: </span>{{ $parcelMachine->TEMP_SERVICE_HOURS_2 }} </div>
        <div><span class="text-[#e4022c]"> TEMP_SERVICE_HOURS_2_UNTIL: </span>{{ $parcelMachine->TEMP_SERVICE_HOURS_2_UNTIL }} </div>
        <div><span class="text-[#e4022c] uppercase"> comment_est: </span>{{ $parcelMachine->comment_est }} </div>
        <div><span class="text-[#e4022c] uppercase"> comment_eng: </span>{{ $parcelMachine->comment_eng }} </div>
        <div><span class="text-[#e4022c] uppercase"> comment_rus: </span>{{ $parcelMachine->comment_rus }} </div>
        <div><span class="text-[#e4022c] uppercase"> comment_lav: </span>{{ $parcelMachine->comment_lav }} </div>
        <div><span class="text-[#e4022c] uppercase"> comment_lit: </span>{{ $parcelMachine->comment_lit }} </div>
        <div><span class="text-[#e4022c] "> MODIFIED: </span>{{ $parcelMachine->MODIFIED }} </div>
    </div>
@endsection
