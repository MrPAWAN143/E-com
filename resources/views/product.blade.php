@extends('layouts.master')
@section('title', 'Product Page')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/product.css')}}">  
@endsection
@section('banner')
    <div class="banner">
        <h1>Product Page</h1>
    </div>

@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Product List</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        </div>
    </div>
@endsection 
@section('javascript')
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endsection

