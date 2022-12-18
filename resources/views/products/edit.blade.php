@extends('layouts.app')

@section('title','Edit')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
        @csrf
        @method('put')
        <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
            Edit Products {{ $product->id}}
        </h2>

        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
        placeholder="Title" name="title" id="title" value="{{ $product->title}}">

        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
        placeholder="Country" name="country" id="country" value="{{ $product->country}}">

        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
        placeholder="Price" name="price" id="price" value="{{ $product->price}}">

        <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">Send</button>

    </form>

@endsection
