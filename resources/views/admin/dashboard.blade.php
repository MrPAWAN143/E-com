@extends('admin.layouts.app') 
@section('title', 'Dashboard')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('content')

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Dashboard </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-red-500 shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Card 1</h2>
                <p>Content for card 1.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Card 2</h2>
                <p>Content for card 2. </p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Card 3</h2>
                <p>Content for card 3.</p>
            </div>
        </div>
    </div>

    
@endsection