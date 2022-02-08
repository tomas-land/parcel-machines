@extends('layouts.app')
@section('content')
    {{-- Top bar --}}
    <div class="h-32 flex flex-col justify-center bg-[#1a1a1acc] ">
        <form action="" method="post" class="flex items-end pl-8">
            @csrf
            <div class="flex flex-col max-w-xl shadow-xl">
                <div class="flex h-8 w-3/4">
                    <label class="category-labels">
                        <input type="radio" checked="checked" value="zip" name="category" class="hidden ">
                        <div class="">ZIP</div>
                    </label>
                    <label class="category-labels">
                        <input type="radio" value="name" name="category" class="hidden ">
                        <div class="">NAME</div>
                    </label>
                    <label class="category-labels">
                        <input type="radio" value="address" name="category" class="hidden ">
                        <div class="">ADDRESS</div>
                    </label>
                </div>
                <div class="flex border-4 rounded-lg rounded-tl-none border-[#F04E23] bg-white">
                    <button
                        class="flex items-center justify-center px-4 border-r border-r-red-400 bg-white border-4 rounded-md border-white">
                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </button>
                    <input type="text" class="px-4 py-1 outline-none w-full border-4 rounded-md border-white "
                        placeholder="Search..." id="search-parcelmachine" name="searchQuery" autocomplete="off">
                </div>
            </div>
        </form>
    </div>
    <div class="h-10 w-full flex items-center">
        <div id="total" class="text-md text-gray-400 ml-8">Total: {{ count($parcelMachinesTotal) }}</div>
    </div>
    {{-- Parcel Machines Container --}}
    @foreach ($parcelMachines as $parcelMachine)
        {{-- Parcel Machine Card --}}
        <a href="{{ route('parcelmachines.show', $parcelMachine) }}" class="w-3/4">
            <div class="flex rounded overflow-hidden shadow-lg items-center bg-gray-100 hover:bg-[#f1f1f1]">
                <div class="w-20 ml-4 opacity-30"><img src="{{ asset('img/locker.png') }}" alt="locker"></div>
                <div class="ml-6">
                    <div class="flex">
                        <div class="text text-gray-600"><span class="text-[#e4022c]">ZIP:</span>
                            {{ $parcelMachine->ZIP }}
                        </div>
                        <div class="text text-gray-600 ml-10"><span class="text-[#e4022c]">NAME:</span>
                            {{ $parcelMachine->NAME }}</div>
                    </div>
                    <div class="flex">
                        <div class="text text-gray-600"><span class="text-[#e4022c]">ADRESS:</span>
                            {{ implode(' - ',array_filter([$parcelMachine->A0_NAME,$parcelMachine->A1_NAME,$parcelMachine->A2_NAME,$parcelMachine->A3_NAME,$parcelMachine->A4_NAME,$parcelMachine->A5_NAME,$parcelMachine->A6_NAME,$parcelMachine->A7_NAME,$parcelMachine->A8_NAME])) }}
                            <!-- Removing empty values from array and adding commas -->
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    {{ $parcelMachines->links('pagination::tailwind') }}
    </div>
@endsection
@push('scripts')
@endpush
