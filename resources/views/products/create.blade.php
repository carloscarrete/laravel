@extends('layouts.app')

@section('title','Create')

@section('content')

<form action="{{route('products.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
@csrf
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Create Products</h2>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" type="text" name="title" placeholder="Title">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" type="text" name="country" placeholder="Country">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" type="text" name="price" placeholder="Price">

<button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Send</button>

</form>

@endsection