@extends('layouts.app')
@section('content')
<div class="w-1/4 h-screen text-lg text-gray-600 flex items-center justify-center">{{ $error }}</div>
<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <p class="font-bold">{{ $error }}</p>
    <p>Something not ideal might be happening.</p>
  </div>
@endsection