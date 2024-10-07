@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Your Orders</h2>

    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <thead>
            @foreach ($orders as $order)
                <tr>
                    <th>{{ $order->id }}</th>
                    <th>{{ $order->formatted_total }}</th>
                    <th>{{ $order->status }}</th>
                    <th>{{ $order->created_at->format('d/m/Y')}}</th>
                    <th>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                    </th>
                </tr>
            @endforeach
        </thead>
    </table>
</div>
@endsection
