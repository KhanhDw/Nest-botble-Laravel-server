@extends('layouts.app')

@section('content')
    <div>
        <h1>Product List</h1>
        <ul>
            @foreach($products as $product)
                <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
            @endforeach
        </ul>
        <h1>-------------------------------------</h1>
        <ul>
            @foreach($productsObject as $productO)
                <li>{{ $productO->name }} - ${{ $productO->price }}</li>
            @endforeach
        </ul>
        <h1>--------------------------------------</h1>
        <ul>
            @foreach($product11 as $productO1)
                <li>{{ $productO1->product_name }} - ${{ $productO1->product_name }}</li>
                <li><a href="#">delete</a></li>
                <li>---</li>
            @endforeach
        </ul>
    </div>
@endsection 