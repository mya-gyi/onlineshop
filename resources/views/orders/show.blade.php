@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Order Details (ID: {{ $order->id }})</h2>

    <p><strong>Total Amount:</strong> {{ $order->formatted_total }} </p>
    <p><strong>Status:</strong>  {{ $order->status }} </p>
    <p><strong>Date:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
    <p><strong>Address:</strong> {{ $order->address }} </p>

    <h4>Item</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
